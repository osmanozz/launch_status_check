<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Overzicht magazijnen</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <br><br>
        <a href="nieuw-bloem.php" class="btn btn-primary">Nieuw Bloem toevoegen</a> <br><br>
        <?php
    
        function create_table($dataset, $from){
       
        if(is_array($dataset) && !empty($dataset)){ 
            // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
            $key = $from."_code";
          
            ?>

            <table class="table table-striped">
            <caption style="caption-side:top"><h2>Overzicht Bloemen</h2></caption>
            
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
                    $row_id = $row[$key]; ?>
                    <tr>
                    <?php foreach($row as $rowdata){ ?>
                        
                        <td><?php echo $rowdata; ?></td>
                    <?php } ?>
                    

                    <td>
                        <a href="edit-<?php echo $from?>.php?bloem_code=<?php echo trim($row['bloem_code']); ?>
                        &bloem_naam=<?php echo trim($row['bloem_naam']); ?>
                        &bloem_img=<?php echo trim($row['bloem_img']); ?>
                        &prijs_per_stuk=<?php echo trim($row['prijs_per_stuk']); ?>
                        &aanwezig_totaal=<?php echo trim($row['aanwezig_totaal']); ?>"
                        class="btn btn-primary" >Edit</a>
                    </td>
                    <td>
                        <a href="delete-<?php echo $from?>.php?bloem_code=<?php echo $row_id; ?>" class="btn btn-danger" >Delete</a>
                    </td>
                    </tr>
            <?php }
         }
    }?>
    </table>

    <br>
    
    </body>
    
</html>