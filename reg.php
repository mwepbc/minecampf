<?php 
include("assets/functions/connect.php");
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
    <?php 
    include("assets/includes/header.php");

     ?>
    <main class="formPage">
        <form action="" method="POST">
            <h1>
                РЕГИСТРАЦИЯ
            </h1>
            <div>
                <label for="login">ЛОГИН</label>
                <input type="text" name="login">
            </div>
            <div>
                <label for="password">ПАРОЛЬ</label>
                <input type="password" name="password">
            </div>
            <div>
                <label for="role">РОЛЬ</label>
                <select name="role">
                    <option value="admin">Администратор</option>
                    <option value="user">Пользователь</option>
                </select>
            </div>
            <button type="submit">ПОДТВЕРДИТЬ</button>
        </form>
    </main>
    <?php include("assets/includes/footer.php") ?>
</body>

</html>