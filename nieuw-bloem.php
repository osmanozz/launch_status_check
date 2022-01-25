<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    $sql = "INSERT INTO bloemen VALUES (:bloem_code, :bloem_naam, :bloem_img, :prijs_per_stuk, :aanwezig_totaal)";
        $placeholders = [
        'bloem_code'=> NULL,
        'bloem_naam'=> $_POST['bloem_naam'],
        'bloem_img'=> $_POST['bloem_img'],
        'prijs_per_stuk'=> $_POST['prijs_per_stuk'],
        'aanwezig_totaal'=> $_POST['aanwezig_totaal'],
        ];
             $db->insert($sql, $placeholders);
            header("Location:overzicht-bloemen.php");    
}

?>

<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Nieuw bloem toevoegen</title>
</head>

<body>

<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
        <h2 class="text-muted">BLOEM TOEVOEGEN</h2>
</div>

    <form method="POST">
        <input type="hidden" name="bloem_code" placeholder="Bloem code" required> <br><br>
        <input type="text" name="bloem_naam" placeholder="Bloem naam" required> <br><br>
        <input type="text" name="bloem_img" placeholder="Bloem image" > <br><br>
        <input type="text" name="prijs_per_stuk" placeholder="Bloem prijs" required ><br><br>
        <input type="int" name="aanwezig_totaal" placeholder="Bloem aanwezig" required ><br><br>
        <input class="btn btn-primary" type="submit" value="Toevogen">
    </form>

</div>
    </div>
        </div>

    <br>
      <br>
        <br>
</body>
</html>