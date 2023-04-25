<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type:application/json');
$url = $_GET['url'];
$result = shell_exec("yt-dlp " . $url);
print_r($result);
telegram_bot_send_message($result);
function telegram_bot_send_message($message)
{
    $token = "";
    $parametre = array(
        'chat_id' => "",
        'video' => $message,
    );
    $ch = curl_init();
    $url = "https://api.telegram.org/bot" . $token . "/sendVideo";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametre);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    if (json_decode($result)->ok) {
        return true;
    } else {

    }
}

?>
