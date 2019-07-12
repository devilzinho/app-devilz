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

    if ($text == "diocane") {
	$out = sm($chatID, "Ciao a te!", NULL); } //NULL per mandare il messaggio senza reply
   
   
    if ($text == "gatto") {
	$photo = 'https://www.miciogatto.it/new/wp-content/uploads/2018/02/Linguaggio-dei-gatti-come-capire-un-gatto-1030x587.jpg'; //url della foto
	$out = sf($chatID, $photo, NULL);}
	
}
?>
