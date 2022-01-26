<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Overzicht aantal bloemen</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <br><br>
        <a href="bloemen-voorraad.php" class="btn btn-primary">Terug</a> <br><br>
     
        <?php
    
        function create_table($dataset, $from){
       
        if(is_array($dataset) && !empty($dataset)){ 
            // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
           
          
            ?>

            <table class="table table-striped">
            <caption style="caption-side:top"><h2>Aantal voorraad per bloem</h2></caption>
            
            <?php 
            // DE KOLOMNAMEN WORDEN OPGEHAALD
            $columns = array_keys($dataset[0]);
            ?>
            
            <tr>
                <?php foreach($columns as $column){ ?>
                    <th>
                        <strong>
                            <?php echo $column?>
                        </strong>
                    </th>
                <?php } ?>
                <th colspan="2">action</th>
            </tr>
                <?php foreach($dataset as $rows=>$row){ 
                     ?>
                    <tr>
                    <?php foreach($row as $rowdata){ ?>
                        
                        <td><?php echo $rowdata; ?></td>
                    <?php } ?>
                    

                    <!-- <td>
                        <a href="edit-bloemen-voorraad.php?magazijn_code=<?php echo trim($row['magazijn_code']); ?>
                        &aantal=<?php echo trim($row['aantal']); ?>"
                        
                        class="btn btn-primary" >Edit</a>
                    </td> -->
                    <td>
                        
                    </td>
                    </tr>
            <?php }
         }
    }?>
    </table>
    <br>
    <a class="btn btn-danger" href="login-medewerker.php">UITLOGGEN</a> <br><br>
    <br>
    
    </body>
    
</html>