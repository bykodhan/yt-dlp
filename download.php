<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$url = $_GET['url'];
$result = shell_exec("yt-dlp --get-url " . $url);
var_dump($result);
?>
