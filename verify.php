<?php
$access_token = 'dZkWi+CzpQ7ZURbcpydeqaUNlEudf6M1LJIKS0PMlkLxaQNS60bc18MKmsMRHxR8qeHY9IOGQpOrIVWDEBf9lTGSKBUNyc29iL0rDptZGVgi+oumBLwjggZdxxomWCdtjDN1ffYnjIWx3cgCBMVRgAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;