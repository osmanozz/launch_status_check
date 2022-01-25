<?php

require_once 'database.php';
$db = new database();

$act = $db->select("SELECT * FROM bloemen");

include 'table_generators/table_generator_bloem_toevoegen.php';

create_table($act, 'bloem');

?>
    <a class="btn btn-danger" href="login-medewerker.php">UITLOGGEN</a> <br><br>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
