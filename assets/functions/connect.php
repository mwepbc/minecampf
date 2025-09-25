<?php

// function connect()
// {
//     $dsn = '';
//     $user = 'root';
//     $password = '';

//     try {
//         $dbh = new PDO($dsn, $user, $password);
//         return $dbh;
//     } catch (Exception $e) {
//         echo 'Caught exception: ', $e->getMessage(), "\n";
//     }
// }

// Подключение к базе
$dsn = 'mysql:dbname=minecampf;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}

?>