<?php

/*  
 
$postdata = http_build_query(
    array(
        'name' => 'Jonas',
        'email' => 'jonas@aol.com'
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context = stream_context_create($opts);
$result = file_get_contents('http://localhost/api/users',FALSE, $context );
echo $result;
  
 */

$data = array('name' => 'bianca', 'email' => 'bianca@dominio.com.br');

//$ch = curl_init('http://localhost/api/users');
$ch = curl_init('http://slim/api/users');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_exec($ch);
curl_close($ch);



?>