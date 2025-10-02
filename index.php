<?php

include("assets/functions/connect.php");
include("assets/functions/crafts/select.php");
include("assets/functions/items/select.php");


?>
  
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minecampf</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
    <?php include("assets/includes/header.php") ?>
    <main>
        <div class="list">
            <?php 
            foreach ($crafts as $craft) {
                $crafting_item = defeniteItem($dbh, $craft['crafting_item']);

                echo '
                    <div class="cell">
                        <input type="hidden" name="select" value="'.$craft['id'].'">
                        <img src="assets/img/'. $crafting_item['image'].'" 
                        alt="'. $crafting_item['name'].'">
                    </div>';
            }
            ?>
            
            
        </div>
        
        <div class="craftingTable">
            <div class="cell">
                
            </div>
            <div class="cell">
                
            </div>
            <div class="cell">
                
            </div>
            <div class="cell">
                
            </div>
            <div class="cell">
                
            </div>
            <div class="cell">
                
            </div>
            <div class="cell">
                
            </div>
            <div class="cell">
                
            </div>
            <div class="cell">
                
            </div>
        </div>
        
        <img src="assets/img/arrow.png" id="arrow">
        
        <div class="result">
            
        </div>
    </main>

    <?php include("assets/includes/footer.php") ?>
</body>

</html>