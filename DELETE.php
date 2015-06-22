<?php
$token = 'a5w878a8awe8ae8aw7e8a';

//$ch = curl_init("http://localhost/api/users/16");
$ch = curl_init("http://slim/api/users/16");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',"OAuth-Token: $token"));
$response = curl_exec($ch);
var_dump($response);
curl_close($ch);