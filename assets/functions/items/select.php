<?php
include("../connect.php");

$sth = $dbh->prepare('SELECT * FROM items');
$sth->execute();
$items = $sth->fetchAll();

echo json_encode($items);

function defeniteItem($dbh, $id)
{
    $sth = $dbh->prepare('SELECT * FROM items WHERE id = ?');
    $sth->execute([$id]);
    return $sth->fetch();
}

?>