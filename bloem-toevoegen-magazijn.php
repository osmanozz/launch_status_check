<?php
require_once 'database.php';
$db = new database();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

   

    $magazijn_code = $_POST['magazijn_code'];

    $sql = "INSERT INTO voorraad_bloemen VALUES (:magazijn_code, :bloem_code, :aantal)";
        $placeholders = [
        'magazijn_code'=> $magazijn_code,
        'bloem_code'=> $_POST['bloem_code'],
        'aantal'=> $_POST['aantal'],
        ];
             $db->insert($sql, $placeholders);
            header("Location:bloemen-voorraad.php");    
            
}

$db = new database();
$magazijnen = $db->select("SELECT magazijn_code FROM magazijnen");

     

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
        <input type="hidden" name="bloem_code" value="<?php echo trim($_GET['bloem_code']) ?>"> <br><br>

        <label>Magazijn code</label>
        <select name="magazijn_code">
            <?php foreach($magazijnen as $magazijn) { ?>
                <option name="magazijn_code"> <?php echo $magazijn['magazijn_code']; ?> </option>
            <?php } ?>
        </select>

        Aantal: <input type="text" name="aantal" required> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Wijzig">
</form>
    </div>
    </div>
    </div>