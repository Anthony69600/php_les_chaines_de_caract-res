<?php
//First message

$msg1 = "0@sn9sirppa@#?ia'jgtvryko1";

$msg1Lenght = strlen($msg1);

$key = $msg1Lenght/2; //Calculate the length of the chain and divide it by 2, so you will get the "key figure"

$msgSub = substr($msg1, 5 , $key); // Then get the key digit length substring starting from the 6th character.

$msgSub1 = str_replace ('@',' ',$msgSub); // remove the @ and replace them with a life

$msgSub2 = str_replace ('#',' ',$msgSub1); // remove the # and replace them with a life

$msgSub3 = str_replace ('?',' ',$msgSub2); // remove the ? and replace them with a life

$msgFinal = strrev($msgSub3);

echo $msgFinal . " ";  // decrypted message 1


//Second message

$msg2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";

$msg2Lenght = strlen($msg2);

$key1 = $msg2Lenght/2; //Calculate the length of the chain and divide it by 2, so you will get the "key figure"

$msg2Sub = substr($msg2, 5 , $key1); // Then get the key digit length substring starting from the 6th character.

$msg2Sub1 = str_replace ('@',' ',$msg2Sub); // remove the @ and replace them with a life

$msg2Sub2 = str_replace ('#',' ',$msg2Sub1); // remove the # and replace them with a life

$msg2Sub3 = str_replace ('?',' ',$msg2Sub2); // remove the ? and replace them with a life

$msg2Final = strrev($msg2Sub3);

echo $msg2Final . " ";  //decrypted message n°2


//Third message


$msg3 = "aopi?sgnirts@#?sedhtg+p9l!";

$msg3Lenght = strlen($msg3);

$key2 = $msg3Lenght/2; //Calculate the length of the chain and divide it by 2, so you will get the "key figure"

$msg3Sub = substr($msg3, 5 , $key2); // Then get the key digit length substring starting from the 6th character.

$msg3Sub1 = str_replace ('@',' ',$msg3Sub); // remove the @ and replace them with a life

$msg3Sub2 = str_replace ('#',' ',$msg3Sub1); // remove the # and replace them with a life

$msg3Sub3 = str_replace ('?',' ',$msg3Sub2); // remove the ? and replace them with a life

$msg3Final = strrev($msg3Sub3);

echo $msg3Final . " "; //decrypted message n°3


?>
