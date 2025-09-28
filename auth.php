<?php
include("assets/functions/connect.php");

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $sth = $dbh->prepare('SELECT *
    FROM users
    WHERE login = ? AND password = ?');
        $sth->execute([$login, $password]);
        $user = $sth->fetch();

        if ($user) {
            setcookie("user_id", $user['id'], time() + 3600);

            if($user['role'] == "admin"){
                header("Location: admin.php");
            }
            else{
                header("Location: index.php");
            }
        } else {
            $error = "Неверный логин или пароль";
        }
    } else {
        $error = "Заполните все поля";
    }
}


?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
    <?php include("assets/includes/header.php") ?>
    <main class="formPage">
        <form action="" method="POST">
            <h1>
                ВОЙТИ В АККАУНТ
            </h1>
            <div>
                <label for="login">ЛОГИН</label>
                <input type="text" name="login">
            </div>
            <div>
                <label for="password">ПАРОЛЬ</label>
                <input type="password" name="password">
            </div>
            <p class="error"><?php echo $error ?></p>
            <button type="submit">ПОДТВЕРДИТЬ</button>
        </form>
    </main>
    <?php include("assets/includes/footer.php") ?>
</body>

</html>