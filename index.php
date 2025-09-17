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
    
    <!--обязательно шрифт майнкрафта!-->
    <style>
        @font-face {
            font-family: "mine";
            src: url("assets/fonts/minecraft.ttf");
        }
    
        *{
            margin: 0;
            padding: 0;
            font-family: "mine";
        }
        
        a{
            text-decoration: none;
        }

        header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            
            padding: 5vh;
            background-color: #1E1E1E;
            
            color:white;
        }
        
        button{
            padding: 3vh 3vw;
            
            color: white;
            background-image: url('assets/img/button.png');
            
            cursor: pointer;
        }
        
        nav{
            display: flex;
            gap: 2vw;
        }
        
        /*главная*/
        main{
            display: flex;
            align-items: center;
            justify-content: space-around;
            
            padding: 4vh;
            
            height: 70vh;
            background-size: 5%;
            background-image: url('assets/img/stone.webp');
        }
        
        .list{
            position: relative;
            
            display: flex;
            flex-wrap: wrap;
            gap: 2vw;
            
            width: 34%;
            height: 92%;
            padding: 5vh;
            
            background-image: url('assets/img/base.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .craftingTable{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1vw;
            
            width: 200px;
            height: 200px;
            padding: 15vh;
            
            background-image: url('assets/img/Crafting_Table_29_JE2_BE2.webp');
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .cell{
            width: 50px;
            height: 50px;
            
            z-index: 1;
        }
        
        .cell::before{
            content: url('assets/img/cell.png');
            position: absolute;
        }
        
        
        #arrow{
            filter: brightness(0%);
        }
        
        .result{
            width: 80px;
            height: 80px;
            
            background-image: url('assets/img/cell.png');
            background-repeat: no-repeat;
            background-size: 100%;
        }
    </style>
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