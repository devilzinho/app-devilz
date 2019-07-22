<?php 
 
$api = $_GET['api'];
$content = file_get_contents("php://input");
$update = json_decode($content, true);
/////////////////////////////////////////////
///////////////////// Parte da api.telegram.org //////////////////////////
////////////


//VARIABILI

$msg = $update["message"];
$chatID = $update["message"]["chat"]["id"];
$user_id = $update["message"]["message_id"];
///////////////////////////////////////////////

//FUNZIONI

//funzione per mandare un messaggio di testo
function sm($chatID, $text, $reply) {
global $api;
global $update;
if($reply != NULL) {
	$r = file_get_contents('https://api.telegram.org/'.$api.'/sendMessage?chat_id='.$chatID.'&text='.$text.'&reply_to_message_id='.$reply);	
}
else {	
	$r = file_get_contents('https://api.telegram.org/'.$api.'/sendMessage?chat_id='.$chatID.'&text='.$text); }
}
//funzione per mandare una foto
function sf($chatID, $photo, $reply) {
global $api;
global $update;
if($reply != NULL) {
	$r = file_get_contents('https://api.telegram.org/'.$api.'/sendPhoto?chat_id='.$chatID.'&photo='.$photo.'&reply_to_message_id='.$reply);	
}
else {	
	$r = file_get_contents('https://api.telegram.org/'.$api.'/sendPhoto?chat_id='.$chatID.'&photo='.$photo); }
} 
///////////////////////////////////////////////////////////////////////////
//AZIONI 
if(array_key_exists("text", $msg)){ 
    $text = strtolower($update["message"]["text"]); //non modificare
	
    if ($text == "/start") {
	$out = sm($chatID, "Bot realizzato da Devilz per @lasagnevtortellini", NULL); } //NULL per mandare il messaggio senza reply

    
    if ($text == "devilz") {
	$out = sm($chatID, "Non nominare il nome di Dio invano!", NULL); } //NULL per mandare il messaggio senza reply
   
   
    if ($text == "niente") {
	$photo = 'https://66.media.tumblr.com/656909d1b2864f26fb61ae126a20cfb0/tumblr_inline_pjfp2uyEWf1uli3vd_540.png'; //url della foto
	$out = sf($chatID, $photo, NULL);}
	
    if ($text == "ciao") {
	$out = sm($chatID, "No", NULL); } //NULL per mandare il messaggio senza reply
    
    if ($text == "micine") {
	$out = sm($chatID, "Uttio pigul ine on line?", NULL); } //NULL per mandare il messaggio senza reply
   
    if ($text == "mauro") {
	$out = sm($chatID, "È frocio", NULL); } //NULL per mandare il messaggio senza reply

    if ($text == "tortellini") {
	$out = sm($chatID, "Fai schifo, esci", NULL); } //NULL per mandare il messaggio senza reply

    if ($text == "lasagne") {
	$out = sm($chatID, "Lasagne über alles", NULL); } //NULL per mandare il messaggio senza reply

    if ($text == "buongiorno") {
	$out = sm($chatID, "Buongiorno al cazzo!", NULL); } 

    if ($text == "luca") {
	$out = sm($chatID, "Sono esterrefatto dalla mediocrità dei vostri argomenti", NULL); } //NULL per mandare il messaggio senza reply

    if ($text == "gabro") {
	$out = sm($chatID, "Il peggior founder della storia", NULL); } //NULL per mandare il messaggio senza reply

    if ($text == "pipino") {
	$out = sm($chatID, "È nudo", NULL); } //NULL per mandare il messaggio senza reply

}
?>
