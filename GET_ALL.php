<?php


//$page = file_get_contents('http://localhost/api/users');
//echo $page;


$ch = curl_init('http://localhost/api/users');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$page = curl_exec($ch);
echo $page;
