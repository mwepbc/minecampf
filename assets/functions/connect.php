<?php

function connect()
{
    $dsn = 'mysql:dbname=minecampf;host=127.0.0.1';
    $user = 'root';
    $password = '';

    try {
        $dbh = new PDO($dsn, $user, $password);
        return $dbh;
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}

?>