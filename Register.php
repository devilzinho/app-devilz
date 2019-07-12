<?php

//////////////////////////////////// non toccare niente ////////////////////////////////////////
$token = "774419724:AAGuwyci9C4xjUQVETZTqfkyLEO32tESJfc"; 
$sito = "https://app-devilz.herokuapp.com/index.php";
$webhook = 'https://api.telegram.org/bot'.$token.'/setwebhook?url='.$sito.'?api=bot'.$token;
$ch = curl_init("$webhook");
curl_exec($ch);
?>
