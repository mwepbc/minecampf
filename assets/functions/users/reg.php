<?php
include("../connect.php");

$login = $_POST['login'];
$password = $_POST['password']; 
$role = $_POST['role']; 

if (!empty($login) && !empty($password)) {
    // подключаюсь к пшп файлу со всеми функциями с бд
    include '../users/users.php';
    insertUser($dbh, $login, $password, $role);

    // проверяю, добавился ли юзер в бд
    $user = userByLoginPassword($dbh, $login, $password);

    if ($user) {
        echo json_encode($user);
    } else {
        echo json_encode(["error" => "Что-то пошло не так"]);
    }
} else {
    echo json_encode(["error" => "Заполните все поля"]);
}
