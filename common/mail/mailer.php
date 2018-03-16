<?php

namespace common\mail;

use Yii;
use common\Constants;

class Mailer
{
    /**
     * Sends email (in a less spammy way...)
     *
     * @param    array $from sender information
     * @param    array $recipient recipient's email address
     * @param    string $subject subject of e-mail
     * @param    string $body body of email
     * @param    array $attachments path to file for attachments
     * @param    array|boolean $test flag or alternate email address to send to for testing
     *
     * @return    boolean
     */
    public static function send($from, $recipient, $subject, $body, $attachments = null, $test = false)
    {
        $mail = Yii::$app->mailer->compose();

        $errorTo = array(Constants::WEB_TECH_EMAIL => Constants::WEB_TECH_EMAIL_NAME);
        $errorBody = 'SERVER - ' . Constants::SERVER . '<br />';
        $errorBody .= 'FROM - ' . json_encode($from) . '<br />';
        $errorBody .= 'TO - ' . json_encode($recipient) . '<br />';
        $errorBody .= 'SUBJECT - ' . $subject . '<br />';
        $errorBody .= 'BODY - ' . $body . '<br />';
        $errorBody .= 'ATTACHMENT = ' . json_encode($attachments) . '<br />';

        try {
            //$mail->IsSMTP();    // telling the class to use SMTP
            //$mail->Host = Constants::SMTP_HOST; // SMTP server
            //$mail->SMTPDebug = 2;

            $mail->setFrom($from);
            if (!is_null($subject)) {
                $mail->setSubject(strip_tags($subject));
            }

            if (isset($recipient['to'])) {
                $toEmails = Mailer::_setEmails($recipient['to']);
                if ($test == false)
                    $mail->setTo($toEmails);
            }

            if (isset($recipient['cc'])) {
                $ccEmails = Mailer::_setEmails($recipient['cc']);
                if ($test == false)
                    $mail->setCc($ccEmails);
            }

            if (!isset($recipient['to']) && !isset($recipient['cc'])) {
                $emails = Mailer::_setEmails($recipient);
                if ($test == false)
                    $mail->setTo($emails);
            }

            if ($test != false) {
                $body .= '<strong>Server:</strong> ' . Constants::SERVER . ' (' . YII_ENV . ')<br />';
                $body .= '<strong>e-mail to be sent to:</strong><br />';

                if (isset($toEmails)) {
                    $body .= '[to] - ';
                    foreach ($toEmails as $email => $name)
                        $body .= $name . ' (' . $email . ')<br />';
                }

                if (isset($ccEmails)) {
                    $body .= '[cc] - ';
                    foreach ($ccEmails as $email => $name)
                        $body .= $name . ' (' . $email . ')<br />';
                }

                if (isset($emails)) {
                    $body .= '[to] - ';
                    foreach ($emails as $email => $name)
                        $body .= $name . ' (' . $email . ')<br />';
                }

                $mail->setTo([Constants::WEB_TECH_EMAIL => Constants::WEB_TECH_EMAIL_NAME]);
            }

            //Add Attachments
            if (!is_null($attachments)) {
                if (is_array($attachments)) {
                    foreach ($attachments as $file)
                        $mail->attach($file);
                } else {
                    $mail->attach($attachments);
                }
            }

            if (empty($body))
                $body = 'Automated email';

            $mail->setTextBody($body);
            $mail->setHtmlBody($body);

            if (!$mail->send()) {
                if (!$test && json_encode($errorTo) != json_encode($recipient)) {
                    Mailer::webServiceSend($errorTo, 'E-mail Failed', $errorBody, null, $test);
                } else {
                    Yii::error($mail->toString());
                }
            }

            return true;
//        } catch (phpmailerException $e) {
//
//            if (Custom_Constants::SERVER == 'sched') {
//                var_dump($e);
//                exit();
//            } elseif (!$test && json_encode($errorTo) != json_encode($recipient)) {
//                $errorBody .= 'ERROR - ' . json_encode($e->errorMessage());
//                $errorBody .= $mail->ErrorInfo;
//                Core_Mail::webServiceSend($errorTo, 'E-mail Failed', $errorBody, null, $test);
//            } else {
//                //Pretty error messages from PHPMailer
//                Zend_Registry::get('logger')->err($e->errorMessage());
//                //echo $e->errorMessage();
//            }
        } catch (Exception $e) {
            if (Constants::SERVER == 'sched') {
                var_dump($e->getMessage());
                exit();
            }
            if (!$test && json_encode($errorTo) != json_encode($recipient)) {
                $errorBody .= 'ERROR - ' . json_encode($e->getMessage());
                Mailer::webServiceSend($errorTo, 'E-mail Failed', $errorBody, null, $test);
            } else {
                //Boring error messages from anything else!
                Yii::error($e->getMessage());
                //echo $e->errorMessage();
            }
        }
    }

    private static function _setEmails($addressBlock)
    {
        $returnEmail = array();
        if (is_int(key($addressBlock))) {
            foreach ($addressBlock as $address) {
                $returnEmail[key($address)] = $address[key($address)];
            }
        } else {
            $returnEmail = $addressBlock;
        }
        return $returnEmail;
    }

    /**
     * Sends mail from e-mail address constants 'TECH_EMAIL'
     *
     * @param    array $recipient recipient's email address
     * @param    string $subject subject of e-mail
     * @param    string $body body of email
     * @param    array $attachments path to file for attachments
     * @param    array|boolean $test flag or alternate email address to send to for testing
     *
     * @return    boolean
     */
    public static function serverSend($recipient, $subject, $body, $attachments = null, $test = false)
    {
        $from = array(Constants::TECH_EMAIL => Constants::TECH_EMAIL_NAME);
        return Mailer::send($from, $recipient, $subject, $body, $attachments, $test);
    }

    /**
     * Sends mail from e-mail address constants 'WEB_TECH_EMAIL'
     *
     * @param    array $recipient recipient's email address
     * @param    string $subject subject of e-mail
     * @param    string $body body of email
     * @param    array $attachments path to file for attachments
     * @param    array|boolean $test flag or alternate email address to send to for testing
     *
     * @return    boolean
     */
    public static function webServiceSend($recipient, $subject, $body, $attachments = null, $test = false)
    {
        $from = array(Constants::WEB_TECH_EMAIL => Constants::WEB_TECH_EMAIL_NAME);
        return Mailer::send($from, $recipient, $subject, $body, $attachments, $test);
    }

    /**
     * Sends mail from e-mail address constants 'WEB_TECH_EMAIL'
     *
     * @param    array $recipient recipient's email address
     * @param    string $subject subject of e-mail
     * @param    string $body body of email
     * @param    array $attachments path to file for attachments
     * @param    array|boolean $test flag or alternate email address to send to for testing
     *
     * @return    boolean
     */
    public static function hrSend($recipient, $subject, $body, $attachments = null, $test = false)
    {
        $from = array(Constants::HR_EMAIL => Constants::HR_EMAIL_NAME);
        return Mailer::send($from, $recipient, $subject, $body, $attachments, $test);
    }

    /**
     * Sends mail from e-mail address constants 'ONLINE_EMAIL'
     *
     * @param    array $recipient recipient's email address
     * @param    string $subject subject of e-mail
     * @param    string $body body of email
     * @param    array $attachments path to file for attachments
     * @param    array|boolean $test flag or alternate email address to send to for testing
     *
     * @return    boolean
     */
    public static function onlineSend($recipient, $subject, $body, $attachments = null, $test = false)
    {
        $from = array(Constants::ONLINE_EMAIL => Constants::ONLINE_EMAIL_NAME);
        return Mailer::send($from, $recipient, $subject, $body, $attachments, $test);
    }

    /**
     *
     * @param    string $subject subject of e-mail
     * @param    string $body body of email
     * @param    array $attachments path to file for attachments
     * @param    array|boolean $test flag or alternate email address to send to for testing
     *
     * @return    boolean
     */
    public static function errorSend($subject, $body, $attachments = null, $test = false)
    {
        $from = array(Constants::WEB_TECH_EMAIL => Constants::WEB_TECH_EMAIL_NAME);
        $recipient = array(
            'to' => array(Constants::WEB_TECH_EMAIL => Constants::WEB_TECH_EMAIL_NAME)
        );
        return Mailer::send($from, $recipient, $subject, $body, $attachments, $test);
    }
}