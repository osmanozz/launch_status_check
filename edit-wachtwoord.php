<?php
    include_once "database.php";
    $db = new database();
    session_start();
    
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            


                $medewerker_code = $_SESSION['medewerker_code'];
                $username = $_SESSION['username'];
                $password = $_POST['password'];
                $password = password_hash($password, PASSWORD_DEFAULT);
                
                
                    $sql = "UPDATE medewerker SET medewerker_code=:medewerker_code, medewerker_naam=:medewerker_naam, username=:username, password=:password
                    WHERE medewerker_code=:medewerker_code";
    
                        $placeholders = [
                            'medewerker_code' => $medewerker_code,
                            'medewerker_naam' => NULL,
                            'username' => $username,
                            'password' => $password          
                        ];
                            $db->edit($sql,$placeholders, "overzicht-admin.php");
            }
            
            
    
            
        
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
       
        New Password : <input type="text" name="password"  placeholder="Nieuw password" required> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Wijzig">
</form>
    </div>
    </div>
    </div>