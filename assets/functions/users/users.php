<?php
// функция запроса всех юзеров из бд
function allUsers($dbh)
{
    $sth = $dbh->prepare('SELECT * FROM users');
    $sth->execute();
    $users = $sth->fetchAll();

    return $users;
}

// функция поиска юзера по логину и паролю
function userByLoginPassword($dbh, $login, $password)
{
    $sth = $dbh->prepare('SELECT *
    FROM users
    WHERE login=? AND password=?');
    $sth->execute([$login, $password]);
    $user = $sth->fetch();

    return $user;
}

// функция поиска юзера по айди
function userById($dbh, $id)
{
    $sth = $dbh->prepare('SELECT *
    FROM users
    WHERE id=?');
    $sth->execute($id);
    $user = $sth->fetch();

    return $user;
}

// функция вставки юзера в бд
function insertUser($dbh, $login, $password, $role){
    $sth = $dbh->prepare('INSERT INTO `users`
    (`id`, `login`, `password`, `role`)
    VALUES (NULL, ?, ?, ?)');
    $sth->execute([$login, $password, $role]);
}
?>