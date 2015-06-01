<?php
$db = new PDO('sqlite:Database.db');
$result = $db->query('SELECT * FROM restAPI');
foreach ($result as $row) {
    print nl2br(" Nome:   {$row['name']} \n   email:   {$row['email']} ");
    
}
    
?>