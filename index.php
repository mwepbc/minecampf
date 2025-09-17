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
    <header>
        <a href="index.php">
            <img src="assets/img/logo.png" alt="logo"/>
        </a>
        <nav>
            <a href="auth.php">
                <button>
                    ВХОД
                </button>
            </a>
            <a href="reg.php">
                <button>
                    РЕГИСТРАЦИЯ
                </button>
            </a>
        </nav>
    </header>
    
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
</body>

</html>