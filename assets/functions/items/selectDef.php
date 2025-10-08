<?php
include("../connect.php");

$id = $_POST['id_item'];

$sth = $dbh->prepare('SELECT * FROM items WHERE id = ?');
$sth->execute([$id]);
$item = $sth->fetch();

echo json_encode($item);
?>