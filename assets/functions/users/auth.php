<?php
include("../connect.php");

$login = $_POST['login']; // запись данных в переменную
$password = $_POST['password']; // запись данных в переменную

if (!empty($login) && !empty($password)) {
    // подключаюсь к пшп файлу со всеми функциями с бд
    include '../users/users.php';
    $user = userByLoginPassword($dbh, $login, $password);

    if ($user) {
        echo json_encode($user);
    } else {
        echo json_encode(["error" => "Неверный логин или пароль"]);
    }
} else {
    echo json_encode(["error" => "Заполните все поля"]);
}
?>