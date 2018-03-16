<?php
namespace common;

use common\Constants;
use common\models\db\model\AtsApplicationDocument;
use common\models\db\model\AtsApplicationInterviewAttachment;
use Faker\Provider\File;
use yii\helpers\FileHelper;

class AtsUploader extends FileHelper
{
    static function uploadAtsFile($hash, $fileName)
    {
        $strLen = (strlen($hash) / 2);
        $folderOne = substr($hash, 0, $strLen);
        $folderTwo = substr($hash, $strLen);

        $ftp = new Ftp();
        $ftp->connect(Constants::FTP_IMG_URL);
        $ftp->login(Constants::FTP_IMG_USERNAME, Constants::FTP_IMG_PASSWORD);
        $ftp->pasv(true);

        $ftpDir = Constants::FTP_ATS . $folderOne;
        if (!$ftp->isDir($ftpDir)) {
            $ftp->mkDirRecursive($ftpDir);
        }

        $ftpDir .= '/' . $folderTwo;
        if (!$ftp->isDir($ftpDir)) {
            $ftp->mkDirRecursive($ftpDir);
        }

        $ftpFile = $ftpDir . '/' . $hash;
        $localFile = $fileName;

        if ($ftp->put($ftpFile, $localFile, FTP_BINARY)) {
            unlink($localFile);
            return true;
        } else {
            return false;
        }
    }

    static function deleteAtsFile($hash)
    {

        $applicationDocuments = new AtsApplicationDocument();
        $applicationInterviewAttachment = new AtsApplicationInterviewAttachment();

        $documentCount = $applicationDocuments->countDocuments($hash);
        if ($documentCount == 0) {
            $documentCount = $applicationInterviewAttachment->countDocuments($hash);
        }

        if ($documentCount == 1) {
            $strLen = (strlen($hash) / 2);
            $folderOne = substr($hash, 0, $strLen);
            $folderTwo = substr($hash, $strLen);

            $ftp = new Ftp();
            $ftp->connect(Constants::FTP_IMG_URL);
            $ftp->login(Constants::FTP_IMG_USERNAME, Constants::FTP_IMG_PASSWORD);
            $ftp->pasv(true);

            $ftpDir = Constants::FTP_ATS . $folderOne;
            if (!$ftp->isDir($ftpDir)) {
                $ftp->mkDirRecursive($ftpDir);
            }

            $ftpDir .= '/' . $folderTwo;
            if (!$ftp->isDir($ftpDir)) {
                $ftp->mkDirRecursive($ftpDir);
            }

            $ftpFile = $ftpDir . '/' . $hash;
        }
    }
}