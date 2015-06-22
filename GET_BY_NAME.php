<?php

//$ch = curl_init('http://localhost/api/users/search/Ana');
$ch = curl_init('http://slim/api/users/search/Ana');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$page = curl_exec($ch);
echo $page;

