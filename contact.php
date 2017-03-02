<?php
$name   = $_REQUEST["name"];
$email  = $_REQUEST["email"];
$mobile = $_REQUEST["mobile"];
$msg    = $_REQUEST["msg"];
$to     = "chiefmanager@micemn.net";

if (isset($email) && isset($name) && isset($msg))
{
    $subject = "$name MICE Contact Form";

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html;charset=utf-8" . "\r\n";
    $headers .= "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    $msg     = "From: $name<br/>Email: $email <br/>Mobile: $mobile <br/>Message: $msg";

    $mail =  mail($to, $subject, $msg, $headers);
    if ($mail)
    {
        echo 'success';
    }
    else
    {
        echo 'failed';
    }
}

