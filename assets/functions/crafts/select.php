<?php

$sth = $dbh->prepare('SELECT * FROM crafts');
$sth->execute();
$crafts = $sth->fetchAll();

function defeniteCraft($dbh, $id)
{
    $sth = $dbh->prepare('SELECT * FROM crafts WHERE id = ?');
    $sth->execute([$id]);
    return $sth->fetch();
}

?>