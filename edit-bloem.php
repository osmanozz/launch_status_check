<?php
    include_once "database.php";
    $db = new database();
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $bloem_code = trim($_POST['bloem_code']);
            $bloem_naam = trim($_POST['bloem_naam']);
            $bloem_img = trim($_POST['bloem_img']);
            $prijs_per_stuk = trim($_POST['prijs_per_stuk']);
            $aanwezig_toaal = trim($_POST['aanwezig_toaal']);
            
            
                $sql = "UPDATE bloemen SET bloem_code=:bloem_code, bloem_naam=:bloem_naam, bloem_img=:bloem_img, prijs_per_stuk=:prijs_per_stuk, aanwezig_totaal=:aanwezig_totaal
                WHERE bloem_code=:bloem_code";

                    $placeholders = [
                        'bloem_code' => $bloem_code,
                        'bloem_naam' => $bloem_naam,
                        'bloem_img' => $bloem_img,       
                        'prijs_per_stuk' => $prijs_per_stuk,
                        'aanwezig_toaal' => $aanwezig_toaal,
                                        
                    ];
                        $db->edit($sql,$placeholders, "overzicht-bloemen.php");
        }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
        <input type="hidden" name="bloem_code" value="<?php echo trim($_GET['bloem_code']) ?>"> <br><br>
        Bloem naam : <input type="text" name="bloem_naam"  value="<?php echo trim($_GET['bloem_naam']) ?>" required> <br><br>
        Bloem img : <input type="text" name="bloem_img"  value="<?php echo trim($_GET['bloem_img']) ?>" > <br><br>
        Prijs per stuk : <input type="text" name="prijs_per_stuk"  value="<?php echo trim($_GET['prijs_per_stuk']) ?>" required> <br><br>
        Aanwezig Toaal : <input type="text" name="aanwezig_totaal"  value="<?php echo trim($_GET['aanwezig_totaal']) ?>" required> <br><br>
               <input type="submit" class="btn btn-primary" name="submit" value="Wijzig">
</form>
    </div>
    </div>
    </div>