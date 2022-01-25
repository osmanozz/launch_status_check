<?php
include "database.php";
    $db = new database();

if (isset($_GET['bloem_code'])) {

    $bloem_code = $_GET['bloem_code'];
        $sql = "DELETE FROM bloemen WHERE bloem_code=:bloem_code";
            $placeholder = [
                'bloem_code'=> $bloem_code
            ];
                $db->delete($sql, $placeholder, "overzicht-bloemen.php");
}
?>