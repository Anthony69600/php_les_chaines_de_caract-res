<?php

$msg1 = "0@sn9sirppa@#?ia'jgtvryko1"; 

$msg1Lenght = strlen($msg1);

echo $msg1Lenght;

$key = $msg1Lenght/2;

echo $key;


$msgSub = substr($msg1, 6 , $key);

echo $msgSub;

$msgSub1 = str_replace ('@','',$msgSub);

echo $msgSub1;

$msgSub2 = str_replace ('#','',$msgSub1);

echo $msgSub2;

$msgSub3 = str_replace ('?','',$msgSub2);


echo $msgSub3;

$msgFinal = strrev($msgSub3);

echo $msgFinal;

?>
