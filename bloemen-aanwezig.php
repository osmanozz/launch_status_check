<?php

require_once 'database.php';
$db = new database();

$act = $db->select("SELECT bloem_code, bloem_naam, aanwezig_totaal FROM bloemen");

include 'table_generators/table_generator_aanwezig_bloemen.php';

create_table($act, 'bloem');

?>
    <a class="btn btn-danger" href="login-medewerker.php">UITLOGGEN</a> <br><br>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht aanwezig bloemen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
        <h2 class="text-muted">Overzichten</h2>

                <div class="section">
                <a href="overzicht-aantal-bloemen.php" class="btn btn-primary">Aanwezig bloemen per magazijn</a> <br> <br>
                </div>




        </div>
    </div>
 </div>


</body>
</html>