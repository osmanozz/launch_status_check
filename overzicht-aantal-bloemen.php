<?php

require_once 'database.php';
$db = new database();


$amsterdam = $db->select('SELECT bloemen.bloem_naam, voorraad_bloemen.aantal, magazijnen.magazijn_naam
from bloemen 
INNER JOIN voorraad_bloemen ON bloemen.bloem_code = voorraad_bloemen.bloem_code
INNER JOIN magazijnen ON magazijnen.magazijn_code = voorraad_bloemen.magazijn_code
WHERE magazijnen.magazijn_naam = "Rotterdam"');

$aalsmeer = $db->select('SELECT bloemen.bloem_naam, voorraad_bloemen.aantal, magazijnen.magazijn_naam
from bloemen 
INNER JOIN voorraad_bloemen ON bloemen.bloem_code = voorraad_bloemen.bloem_code 
INNER JOIN magazijnen on magazijnen.magazijn_code = voorraad_bloemen.magazijn_code
WHERE magazijnen.magazijn_naam = "Aalsmeer"');

include 'table_generators/table_generator_overzicht_aantal.php';


create_table($amsterdam, 'bloem');
create_table($aalsmeer, 'bloem');

?>
    
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
