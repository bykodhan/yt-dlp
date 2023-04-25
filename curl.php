<?php
// Set the URL of the audio file you want to download
$url = 'https://rr2---sn-bpcpgoxu-pnue.googlevideo.com/videoplayback?expire=1671501494&ei=VsKgY8qmNp7pgQfokaGQAg&ip=31.210.37.80&id=o-AN1zbYcg_Fth-ux8eSW7AG4UY2PSStRFwjE325CNDGW0&itag=251&source=youtube&requiressl=yes&mh=zS&mm=31%2C29&mn=sn-bpcpgoxu-pnue%2Csn-nv47lns6&ms=au%2Crdu&mv=m&mvi=2&pl=24&initcwndbps=480000&spc=zIddbDPMb8ja3tbzEHQxoeSJnEo6tzc&vprv=1&svpuc=1&mime=audio%2Fwebm&gir=yes&clen=2779086&dur=168.621&lmt=1671322843251779&mt=1671479607&fvip=1&keepalive=yes&fexp=24001373%2C24007246&c=ANDROID&txp=4532434&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cgir%2Cclen%2Cdur%2Clmt&sig=AOq0QJ8wRQIhAIvmluCc7x2dpRf6tNvQjWmUxWxoIEpXJnP2SF-2NLVvAiBqmOeXXTeJKgy9vSsk-leqDmetVnLJPLYRQ3UqJYyBhw%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRgIhAIRU_8tpNU1hTLWLhLFuxn1qDzaGcoAYO8qDVzxRMLyIAiEAonZM5fx_OPjpHJQHMNeAvsu909UupFie7SoR7kuD0O0%3D';
// URL is not path of mp3 file but exact mp3 file
// Set the URL of the webm file
// Initialize cURL
$ch = curl_init();

// Set the URL and other options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute the request and get the audio file
$audio = curl_exec($ch);

// Close the cURL session
curl_close($ch);

// Set the appropriate headers to initiate a download
header('Content-Type: audio/mpeg');
header('Content-Disposition: attachment; filename="audio.mp3"');

// Output the audio file to the browser
echo $audio;

exit;

?>