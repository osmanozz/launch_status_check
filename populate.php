<?php

include "database.php";

$sql = "INSERT INTO medewerker VALUES (:medewerker_code, :medewerker_naam, :username, :password)";
$placeholder = [
    'medewerker_code'=> NULL,
    'medewerker_naam'=> 'ADMIN',
    'username'=> 'admin',
    'password'=> password_hash('admin', PASSWORD_DEFAULT)
]; 

$db = new database();
$db->insert($sql, $placeholder);

?> 