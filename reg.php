<?php
include("assets/functions/connect.php");

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['role'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $sth = $dbh->prepare('INSERT INTO users
        (`id`, `login`, `password`, `role`)
        VALUES (NULL, ?, ?, ?)');
        $sth->execute([$login, $password, $role]);
        $user = $sth->fetch();

        if ($user) {
            header("Location: auth.php");
        } else {
            $error = "Ошибка регистрации!!!";
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
            <p><?php echo $error ?></p>
            <button type="submit">ПОДТВЕРДИТЬ</button>
        </form>
    </main>
    <?php include("assets/includes/footer.php") ?>
</body>

</html>