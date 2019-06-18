<?php
include('db_con.php');

$id = $_GET['id'];

$stmt= $db->prepare("DELETE FROM livros WHERE id=:id;");
$stmt->bindValue(':id', $id);
$stmt->execute();

header('Location: index.php');