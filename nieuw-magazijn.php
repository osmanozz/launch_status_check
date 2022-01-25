<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    $sql = "INSERT INTO magazijnen VALUES (:magazijn_code, :magazijn_naam)";
        $placeholders = [
        'magazijn_code'=> NULL,
        'magazijn_naam'=> $_POST['magazijn_naam'],
        ];
             $db->insert($sql, $placeholders);
            header("Location:magazijnen.php");
}



?>

<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Nieuw magazijn toevoegen</title>
</head>

<body>

<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
        <h2 class="text-muted">MAGAZIJN TOEVOEGEN</h2>
</div>

    <form method="POST">
        <input type="hidden" name="magazijn_code" placeholder="Magazijn code" required> <br><br>
        <input type="text" name="magazijn_naam" placeholder="Magazijn naam" required> <br><br>
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