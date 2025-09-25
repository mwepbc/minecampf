<?php 

/*$dsn = 'mysql:dbname=dilyara203;host=localhost';
$user = 'dilyara203';
$password = 'Dilyara203';

$dbh = new PDO($dsn, $user, $password);

function Select($dbh, $table){
	$sql = 'SELECT * FROM '.$table;
	$sth = $dbh->prepare($sql, [PDO::ATTR_CURSOR => 				PDO::CURSOR_FWDONLY]);
	$sth->execute();
	$red = $sth->fetchAll();

	return $red;
}

var_dump(Select($dbh, 'users'));*/

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