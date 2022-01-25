<?php
    include_once "database.php";
    $db = new database();
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $magazijn_code = trim($_POST['magazijn_code']);
            $magazijn_naam = trim($_POST['magazijn_naam']);
            
            
                $sql = "UPDATE magazijnen SET magazijn_code=:magazijn_code, magazijn_naam=:magazijn_naam
                WHERE magazijn_code=:magazijn_code";

                    $placeholders = [
                        'magazijn_code' => $magazijn_code,
                        'magazijn_naam' => $magazijn_naam,             
                    ];
                        $db->edit($sql,$placeholders, "magazijnen.php");
        }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
        <input type="hidden" name="magazijn_code" value="<?php echo trim($_GET['magazijn_code']) ?>"> <br><br>
        Magazijn naam : <input type="text" name="magazijn_naam"  value="<?php echo trim($_GET['magazijn_naam']) ?>" required> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Wijzig">
</form>
    </div>
    </div>
    </div>