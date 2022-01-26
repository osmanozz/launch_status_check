<?php
require_once 'database.php';
$db = new database();
?>


<div class="container">
  <div class="row">
    <div class="col">
      <?php

      $totaal_amsterdam = $db->select('SELECT SUM(voorraad_bloemen.aantal * bloemen.prijs_per_stuk) AS totaal_amsterdam FROM voorraad_bloemen 
      INNER JOIN bloemen ON voorraad_bloemen.bloem_code = bloemen.bloem_code
      WHERE magazijn_code = "4"');
         foreach ($totaal_amsterdam as $productAms) {
            foreach ($productAms as $das) {
                        echo "<strong>AMSTERDAM totaal waarde = </strong>";
                        echo "<strong>$das</strong>";
                        echo "<br>";
                    }
        }
    
        ?>
    </div>

    <div class="w-100">
    <div class="col">
    <?php

            $totaal_aalsmeer = $db->select('SELECT SUM(voorraad_bloemen.aantal * bloemen.prijs_per_stuk) AS totaal_aalsmeer FROM voorraad_bloemen 
            INNER JOIN bloemen ON voorraad_bloemen.bloem_code = bloemen.bloem_code
            WHERE magazijn_code = "5"');
            foreach ($totaal_aalsmeer as $productAalsmeer) {
                foreach ($productAalsmeer as $das) {
                            echo "<strong>AALSMEER totaal waarde = </strong>";
                            echo "<strong>$das</strong>";
                            echo "<br>";
                        }
            }

  ?>
    </div>
    

<?php

$act = $db->select("SELECT voorraad_bloemen.magazijn_code, magazijnen.magazijn_naam, voorraad_bloemen.bloem_code, bloemen.bloem_naam, bloemen.prijs_per_stuk, voorraad_bloemen.aantal
        FROM voorraad_bloemen 
     JOIN bloemen ON bloemen.bloem_code = voorraad_bloemen.bloem_code
     JOIN magazijnen ON magazijnen.magazijn_code = voorraad_bloemen.magazijn_code
");


// $db = new database();
// $magazijnen = $db->select("SELECT magazijn_naam FROM magazijnen");

// foreach ($magazijnen as $magazijn) {
//     print_r($magazijn['magazijn_naam']);
//     echo "<br>";
// }


include 'table_generators/table_generator_bloemen_voorraad.php';

create_table($act, 'magazijn');

?>
    <a class="btn btn-danger" href="index.php">UITLOGGEN</a> <br><br>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


