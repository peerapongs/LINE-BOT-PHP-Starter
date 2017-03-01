<?php
$access_token = 'pUTyeX3soDcNHeVeDkG82IPFvyH0kpiz0HZbPAA31kmMKi9eqxE76Y1iDQh4lTT/aO8vfyomUMAxKMTxtO3xPUPg30O5pMNokz/6y60NvQvYk/gnua7jiDUjkPkBJiekwwD39hZcxiDDzVrTAhVgsQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
