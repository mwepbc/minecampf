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
            <button type="submit">ПОДТВЕРДИТЬ</button>
        </form>
    </main>
    <?php include("assets/includes/footer.php") ?>
</body>

</html>