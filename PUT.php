<?php
$token = 'a5w878a8awe8ae8aw7e8a';

$data = array(  
  'name' => 'Rossano',
  'email' => 'rossanorb@gmail.com'
  );

$ch = curl_init("http://localhost/api/users/17");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
$response = curl_exec($ch);
var_dump($response);
curl_close($ch);