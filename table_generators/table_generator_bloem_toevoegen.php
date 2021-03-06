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
        
        <?php
    
        function create_table($dataset, $from){
       
        if(is_array($dataset) && !empty($dataset)){ 
            // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
            $key = $from."_code";
          
            ?>

            <table class="table table-striped">
            <caption style="caption-side:top"><h2>Bloem in magazijn toevoegen</h2></caption>
            
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
                        <a href="bloem-toevoegen-magazijn.php?bloem_code=<?php echo trim($row['bloem_code']); ?>
                      
                        "
                        class="btn btn-primary" >Voeg toe in magazijn</a>
                    </td>
                   
            <?php }
         }
    }?>
    </table>

    <br>
    
    </body>
    
</html>