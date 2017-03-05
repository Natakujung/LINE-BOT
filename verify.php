<?php
$access_token = 'fR3BgYFCmU8bCYT/92A9VPulYqZd0ZzxEvtt8ScFVaFXxzq+3sYNIYpVOoRmocnYTZ/mW+eM1aJR9s4dO9B7Ric5T08K+Ku3KrDdz2b3Ef0obceb6+Jy0Yl5wElMZO5Sb8yMu/MQz44QNtKA1D2lGAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
