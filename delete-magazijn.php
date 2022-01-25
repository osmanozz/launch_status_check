<?php
include "database.php";
    $db = new database();

if (isset($_GET['magazijn_code'])) {

    $magazijn_code = $_GET['magazijn_code'];
        $sql = "DELETE FROM magazijnen WHERE magazijn_code=:magazijn_code";
            $placeholder = [
                'magazijn_code'=> $magazijn_code
            ];
                $db->delete($sql, $placeholder, "magazijnen.php");
}
?>