<?php
use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */

$addonParams = array(
    'domain' => 'www.bisontransport.com',
    'pageWidth' => '700',
    'additionalFooter' => ''
);
foreach ($addonParams as $paramName => $value)
    if (!isset(${$paramName}) || empty(${$paramName})) {
        ${$paramName} = $value;
    }

?>
<?php $this->beginPage() ?>
    <meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
    <!-- Opening Code -->
    <!doctype html public "- / /w3c / /dtd xhtml 1.0 transitional / /en" "http: / /www.w3.org /tr /xhtml1 /dtd /xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
    <head>

        <title><?= Html::encode($this->title) ?></title>
        <style type="text/css">
            html {
                -webkit-text-size-adjust:none;
                font-size:100.1%;}
            .ReadMsgBody {width: 100%;}
            .ExternalClass {width: 100%;}
            .ExternalClass *{line-height:100%;}
            body, p, ol, ul{
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:#5f5f5f;
                font-size:80%;}
            li ul, li ol {
                font-size:100%;}
            hr.spacer {
                background: none repeat scroll 0 0 #fff;
                color: #fff;
                visibility: hidden;}
            .ios_links_grey a{
                color:#444444;
                text-decoration:none;}
            .ios_links_footer a{
                color:#999999;
                text-decoration:none;}
            .ios_links_blue a{
                color:#4285f4;
                text-decoration:none;}
            th, td {
                padding: 2px;}
            th {
                text-align: left;}
            .center {
                text-align: center;}
            .text-right {
                text-align: right;}
            .error, .alert, .notice, .success, .info, .blank, .bubbleNote {
                border: 2px solid #ddd;
                border-radius: 5px;
                padding: 10px;}
            .error {
                background: none repeat scroll 0 0 #fbe3e4;
                border-color: #fbc2c4;
                color: #8a1f11;}
            .alert {
                background: none repeat scroll 0 0 #fee297;
                border-color: #ffba00;
                color: #785b0c;}
            .notice {
                background: none repeat scroll 0 0 #fff6bf;
                border-color: #ffd324;
                color: #514721;}
            .success {
                background: none repeat scroll 0 0 #e6efc2;
                border-color: #c6d880;
                color: #264409;}
            .info {
                background: none repeat scroll 0 0 #d5edf8;
                border-color: #92cae4;
                color: #205791;}
            .odd {
                background: none repeat scroll 0 0 #EEEEEE;
                border-color: #EEEEEE;}
            .note {
                font-size:10px;
                line-height:14px;
                color:#999999;}
            .systemNote {
                font-size: 8px;
                color: #A0A0A0;}
        </style>
    </head>

    <body style="margin:0px;">
    <center>
        <table cellspacing="0" cellpadding="0" width="100%" align="center">
            <tr>
                <td align="center">
                    <!-- Start Header -->
                    <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#f4f4f4">
                        <tr>
                            <td align="center">
                                <table cellspacing="0" cellpadding="0" width="<?= $pageWidth; ?>">
                                    <tr>
                                        <td align="left" height="100">
                                            <a href="http://<?= $domain; ?>"><img src="http://img.bisontransport.com/public/resources/images/logos/Bison%20Transport_Logo_Standard.png" width="196" height="64" border="0" style="display:block;" /></a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- End Header-->

                    <!-- Start Main -->
                    <table cellspacing="0" cellpadding="0" width="<?= $pageWidth; ?>">
                        <tr>
                            <td align="left" style="font-size:15px; line-height:28px;">
                                <?php $this->beginBody() ?>
                                <?= $content ?>
                                <?php $this->endBody() ?>
                            </td>
                        </tr>
                    </table>

                    <!-- Start Footer -->
                    <table cellspacing="0" cellpadding="0" width="<?= $pageWidth; ?>">
                        <tr>
                            <td class="ios_links_footer" align="left" style="padding-top:37px;font-size:10px; line-height:14px; color:#999999;">
                                <?= $additionalFooter; ?>
                                &copy; <?= date('Y'); ?> Bison Transport INC. 1001 Sherwin Road Winnipeg, Manitoba R3H 0T8
                                <br><br>
                                All e-mail to or from this address is recorded and is subject to archival, monitoring and/or review, by and/or disclosure to, someone other than the recipient. This communication, including its attachments, if any, is confidential and intended only for the person(s) to whom it is addressed, and may contain proprietary and/or privileged material. Any unauthorized review, disclosure, copying, other distribution of this communication or taking of any action in reliance on its contents is strictly prohibited. If you have received this message in error, please notify us immediately so that we may amend our records. Then, please delete this message (and its attachments, if any) without reading, copying or forwarding it to anyone.
                                <br><br><br>
                            </td>
                        </tr>
                    </table>
                    <!-- End Footer-->
                </td>
            </tr>
        </table>
    </center>
    </body>
    </html>

<?php $this->endPage() ?>