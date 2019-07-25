<?php

$src = file_get_contents("http://freesstpvpn.com/setup-sstp-vpn");

$pos1 = strpos($src, "PIN:");
$pin1 = substr($src, $pos1, 9);

$pos2 = strpos($src,"PIN:",$pos1+9);
$pin2 = substr($src, $pos2, 9);

$pos3 = strpos($src,"PIN:",$pos2+9);
$pin3 = substr($src, $pos3, 9);

$pos4 = strpos($src,"PIN:",$pos3+9);
$pin4 = substr($src, $pos4, 9);

$fp = fopen('PINS.txt',"wa+")
fwrite($fp,string(nl2br("US_".$pin1."\r\n"."UK_".$pin2."\r\n"."NL_".$pin3."\r\n"."CA_".$pin4)))
fclose($fp)
// echo nl2br("US_".$pin1."\r\n"."UK_".$pin2."\r\n"."NL_".$pin3."\r\n"."CA_".$pin4);



?>