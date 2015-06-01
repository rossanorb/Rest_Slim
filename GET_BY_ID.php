<?php

$ch = curl_init('http://localhost/api/users/18');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$page = curl_exec($ch);
echo $page;
