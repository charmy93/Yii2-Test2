<?php

namespace common;

/**
 * FTP - access to an FTP server.
 *
 * Opens an FTP connection to the specified host:
 * $ftp = new Core_Ftp;
 * $ftp->connect($host);
 * Login with username and password
 *
 * $ftp->login($username, $password);
 * Upload the file
 *
 * $ftp->put($destination_file, $source_file, FTP_BINARY);
 * Close the FTP stream
 *
 * $ftp->close();
 * // or simply unset($ftp);
 * Ftp throws exception if operation failed. So you can simply do following:
 *
 * try {
 * $ftp = new Ftp;
 * $ftp->connect($host);
 * $ftp->login($username, $password);
 * $ftp->put($destination_file, $source_file, FTP_BINARY);
 *
 * } catch (FtpException $e) {
 * echo 'Error: ', $e->getMessage();
 * }
 * On the other hand, if you'd like the possible exception quietly catch, call methods with the prefix 'try':
 *
 * $ftp->tryDelete($destination_file);
 * When the connection is accidentally interrupted, you can re-establish it using method ftp->reconnect().
 */
class Ftp
{
    /**#@+ FTP constant alias */
    const ASCII = FTP_ASCII;
    const TEXT = FTP_TEXT;
    const BINARY = FTP_BINARY;
    const IMAGE = FTP_IMAGE;
    const TIMEOUT_SEC = FTP_TIMEOUT_SEC;
    const AUTOSEEK = FTP_AUTOSEEK;
    const AUTORESUME = FTP_AUTORESUME;
    const FAILED = FTP_FAILED;
    const FINISHED = FTP_FINISHED;
    const MOREDATA = FTP_MOREDATA;

    private static $aliases = array(
        'sslconnect' => 'ssl_connect',
        'getoption' => 'get_option',
        'setoption' => 'set_option',
        'nbcontinue' => 'nb_continue',
        'nbfget' => 'nb_fget',
        'nbfput' => 'nb_fput',
        'nbget' => 'nb_get',
        'nbput' => 'nb_put',
        'mdtm' => 'mdtm'
    );

    /** @var resource */
    private $resource;

    /** @var array */
    private $state;

    /** @var string */
    private $errorMsg;
    private $errFile;
    private $errLine;

    public $verbose = false;
    public $exclude_list = array();
    private $logArray = array();

    /**
     * @param  string  URL ftp://...
     */
    public function __construct($url = NULL)
    {
        if (!extension_loaded('ftp')) {
            throw new /*\*/
            Exception("PHP extension FTP is not loaded.");
        }

        if ($url) {
            $parts = parse_url($url);
            $this->connect($parts['host'], empty($parts['port']) ? NULL : (int)$parts['port']);
            $this->login($parts['user'], $parts['pass']);
            $this->pasv(TRUE);
            if (isset($parts['path'])) {
                $this->chdir($parts['path']);
            }
        }
        $this->logArray = array();
    }

    /**
     * Magic method (do not call directly).
     * @param  string  method name
     * @param  array   arguments
     * @return mixed
     * @throws Exception
     * @throws FtpException
     */
    public function __call($name, $args)
    {
        $name = strtolower($name);
        $silent = strncmp($name, 'try', 3) === 0;
        $func = $silent ? substr($name, 3) : $name;
        $func = 'ftp_' . (isset(self::$aliases[$func]) ? self::$aliases[$func] : $func);


        if (!function_exists($func)) {
            throw new Exception("Call to undefined method Ftp::$name().");
        }

        $this->errorMsg = NULL;
        set_error_handler(array($this, '_errorHandler'));

        if ($func === 'ftp_connect' || $func === 'ftp_ssl_connect') {
            $this->state = array($name => $args);
            $this->resource = call_user_func_array($func, $args);
            $res = NULL;

        } elseif (!is_resource($this->resource)) {
            restore_error_handler();
            throw new FtpException("Not connected to FTP server. Call connect() or ssl_connect() first.");
        } else {
            if ($func === 'ftp_login' || $func === 'ftp_pasv') {
                $this->state[$name] = $args;
            }
            array_unshift($args, $this->resource);
            $res = call_user_func_array($func, $args);

            if ($func === 'ftp_chdir' || $func === 'ftp_cdup') {
                $this->state['chdir'] = array(ftp_pwd($this->resource));
            }
        }

        restore_error_handler();
        if (!$silent && $this->errorMsg !== NULL) {
            if (ini_get('html_errors')) {
                $this->errorMsg = html_entity_decode(strip_tags($this->errorMsg));
            }

            if (($a = strpos($this->errorMsg, ': ')) !== FALSE) {
                $this->errorMsg = substr($this->errorMsg, $a + 2);
            }

            throw new FtpException($this->errorMsg);
        }

        return $res;
    }

    /**
     * Internal error handler. Do not call directly.
     */
    public function _errorHandler($code, $message, $errFile, $errLine)
    {
        $this->errorMsg = $message;
        $this->errFile = $errFile;
        $this->errLine = $errLine;
    }

    public function getError()
    {
        return $this->errorMsg;
    }

    /**
     * Reconnects to FTP server.
     * @return void
     */
    public function reconnect()
    {
        @ftp_close($this->resource); // intentionally @
        foreach ($this->state as $name => $args) {
            call_user_func_array(array($this, $name), $args);
        }
    }

    /**
     * Checks if file or directory exists.
     * @param  string
     * @return bool
     */
    public function fileExists($file)
    {
        return is_array($this->nlist($file));
    }

    /**
     * Checks if directory exists.
     * @param  string
     * @return bool
     */
    public function isDir($dir)
    {
        $current = $this->pwd();
        try {
            $this->chdir($dir);
        } catch (FtpException $e) {
        }
        $this->chdir($current);
        return empty($e);
    }

    /**
     * Recursive creates directories.
     * @param  string
     * @return void
     */
    public function mkDirRecursive($dir)
    {
        $parts = explode('/', $dir);
        $path = '';
        while (!empty($parts)) {
            $path .= array_shift($parts);
            try {
                if ($path !== '') $this->mkdir($path);
            } catch (FtpException $e) {
                if (!$this->isDir($path)) {
                    throw new FtpException("Cannot create directory '$path'.");
                }
            }
            $path .= '/';
        }
    }

    /**
     * Recursive deletes path.
     * @param  string
     * @return void
     */
    public function deleteRecursive($path)
    {
        if (!$this->tryDelete($path)) {
            foreach ((array)$this->nlist($path) as $file) {
                if ($file !== '.' && $file !== '..') {
                    $this->deleteRecursive(strpos($file, '/') === FALSE ? "$path/$file" : $file);
                }
            }
            $this->rmdir($path);
        }
    }

    public function syncPull($local, $remote, $createDir = false, $removeRemote = false)
    {
        $nList = $this->__call('nlist', array($remote));
        $files = array();
        foreach ($nList as $ftpFile) {
            $fileName = basename($ftpFile);
            if (empty($fileName)) {
                continue;
            }
            $uidName = md5($fileName);
            $dateTime = $this->__call('mdtm', array($ftpFile));
            if ($dateTime == -1) {
                $ftpDate = $dateTime;
//                var_dump("$ftpFile was last modified on : " . date("F d Y H:i:s.", $dateTime));
            } else {
                $ftpDate = time();
            }

            $ftpSize = $this->__call('size', array($ftpFile));
            $ftpType = 'directory';
            if ($ftpSize != "-1") {
                $ftpType = 'file';
            }

            $files[$uidName] = array(
                'size' => $ftpSize,
                'modify' => $ftpDate,
                'type' => $ftpType,
                'filename' => $fileName
            );

            $localFile = $local . $fileName;
            if (!is_file($localFile)) {
//                var_dump('getting file');
                $this->get($localFile, $ftpFile, FTP_BINARY);
            }
        }

        if ($handle = opendir($local)) {
            while (false !== ($entry = readdir($handle))) {
                if (!in_array($entry, array(".", "..", 'Thumbs.db'))) {
                    $uidEntry = md5($entry);
                    if (!isset($files[$uidEntry]) && is_file($local . $entry)) {
                        unlink($local . $entry);
                    }
                }
            }
        }
    }

    public function resetLog()
    {
        $this->logArray = array();
    }

    private function logger($fullPath, $options = array())
    {
        if (!isset($this->logArray[$fullPath])) {
            $this->logArray[$fullPath] = array();
        }
        if (!empty($options)) {
            $this->logArray[$fullPath] = array_merge($this->logArray[$fullPath], $options);
        }
    }

    public function getLog()
    {
        return $this->logArray;
    }

    public function sync($local, $remote, $createDir = false)
    {
        $raw_files = $this->__call('rawlist', array($remote));

        $files = array();
        foreach ($raw_files as $file) {
            $chunks = preg_split("/\s+/", $file);

            $startPos = (strpos($file, $chunks[7]) + strlen($chunks[7]) + 1);
            $endPos = strlen($file) - $startPos;
            $filename = substr($file, $startPos, $endPos);
            $uidName = md5($filename);

            if ($chunks[1] != 1 && ($chunks[8] == "." || $chunks[8] == "..")) {
                // do nothing
            } else {

                $year = date('Y');//year is assumed current year
                if (strpos($chunks[7], ':') === false) {
                    $year = $chunks[7];
                    $hour = 0;
                    $minute = 0;
                } else {
                    list($hour, $minute) = explode(':', $chunks[7]);
                }

                switch (strtolower($chunks[5])) {
                    case 'jan':
                        $chunks[5] = 1;
                        break;
                    case 'feb':
                        $chunks[5] = 2;
                        break;
                    case 'mar':
                        $chunks[5] = 3;
                        break;
                    case 'apr':
                        $chunks[5] = 4;
                        break;
                    case 'may':
                        $chunks[5] = 5;
                        break;
                    case 'jun':
                        $chunks[5] = 6;
                        break;
                    case 'jul':
                        $chunks[5] = 7;
                        break;
                    case 'aug':
                        $chunks[5] = 8;
                        break;
                    case 'sep':
                        $chunks[5] = 9;
                        break;
                    case 'oct':
                        $chunks[5] = 10;
                        break;
                    case 'nov':
                        $chunks[5] = 11;
                        break;
                    case 'dec':
                        $chunks[5] = 12;
                        break;
                }

                $item = array(
                    'size' => $chunks[4],
                    'modify' => mktime($hour, $minute, 0, $chunks[5], $chunks[6], $year),
                    'type' => $chunks[0]{0} === 'd' ? 'directory' : 'file',
                    'name' => $filename
                );
                $files[$uidName] = $item;

            }
        }

        if ($handle = opendir($local)) {
            while (false !== ($entry = readdir($handle))) {
                if (!in_array($entry, array(".", "..", 'Thumbs.db'))) {
                    $uidEntry = md5($entry);
                    $file = @$files[$uidEntry];
                    if ($remote == '/public/eLearning/HDPS') {
                        //var_dump($entry);
                    }

                    $localFileSize = filesize($local . '/' . $entry);
                    $localIsDir = is_dir($local . '/' . $entry);

                    if (!empty($file) && ($file['modify'] + 43200) >= filemtime($local . '/' . $entry) && $file['size'] == $localFileSize && !$localIsDir) {
                        $this->logger($remote . "/" . $file['name'], array(
                            'name' => $file['name'],
                            'size' => $file['size'],
                            'type' => $file['type'],
                            'modify' => $file['modify'],
                            'status' => 'unchanged',
                            'local_modify' => filemtime($local . '/' . $entry)
                        ));
                        unset($files[$uidEntry]);
                        //do nothing, this is sync. copy
                    } else {
                        if (in_array($entry, $this->exclude_list)) {
                            continue;
                        }
                        $this->logger($remote . "/" . $file['name'], array(
                            'status' => 'dirunchanged'
                        ));
                        if ($localIsDir) {
                            //var_dump('is DIR: '. $remote .'/'. $entry);

                            //recurse to sync. directory
                            if (empty($file)) {
                                //if file with the same name as directory it'll fail
                                $this->mkDirRecursive($remote . '/' . $entry);
                                $this->logger($remote . "/" . $file['name'], array(
                                    'status' => 'dirupdated'
                                ));
                                echo "updated\n";
                            }

                            //var_dump($local .'/'. $entry, $remote .'/'. $entry);
                            $this->sync($local . '/' . $entry, $remote . '/' . $entry, false);
                        } else {
                            //if file existent remove it
                            if (!empty($file)) {
                                $this->deleteRecursive($remote . '/' . $entry);
                                $this->logger($remote . "/" . $file['name'], array(
                                    'status' => 'dirdeleted'
                                ));
                                echo "deleted\n";
                            }

                            //var_dump('upload file: '. $remote .'/'. $entry);

                            //sync. file

                            $this->put($remote . '/' . $entry, $local . '/' . $entry, FTP_BINARY);
                            //var_dump($remote);
                            $this->logger($remote . "/" . $entry, array(
                                'name' => $entry,
                                'size' => filesize($local . '/' . $entry),
                                'type' => 'file',
                                'modify' => filemtime($local . '/' . $entry),
                                'status' => 'updated',
                                'local_modify' => filemtime($local . '/' . $entry)
                            ));
                            $this->transferredSize += $localFileSize;
                            $this->transferredFiles++;
                        }
                        $this->logger($remote . "/" . $file['name'], array(
                            'name' => $file['name'],
                            'size' => $file['size'],
                            'type' => $file['type'],
                            'modify' => $file['modify'],
                            'local_modify' => filemtime($local . '/' . $entry)
                        ));
                        unset($files[$uidEntry]);
                    }

                    //$this->continueUpload();//to make a progress in upload queue
                }
            }

            closedir($handle);

            if (count($files) > 0) {
                foreach ($files as $entry => $r) {
                    $this->deleteRecursive($remote . '/' . $r['name']);

                    $this->logger($remote . "/" . $r['name'], array(
                        'name' => $r['name'],
                        'size' => $r['size'],
                        'type' => $r['type'],
                        'modify' => $r['modify'],
                        'local_modify' => 0
                    ));
                    if ($r['type'] == 'directory') {
                        $this->logger($remote . "/" . $r['name'], array(
                            'status' => 'dirdeleted'));
                    } else {
                        $this->logger($remote . "/" . $r['name'], array(
                            'status' => 'deleted'));
                    }
                }
            }

            if ($this->verbose) {
                echo $remote . ' : sync' . "\r\n";
                flush();
            }
        }
    }
}

class FtpException extends \Exception
{

}
