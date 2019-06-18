<?php
include('db_con.php');

$id = $_GET['id'];
$titulo = $_GET['titulo'];
$autor = $_GET['autor'];
$categoria = $_GET['cat'];

$stmt= $db->prepare("UPDATE livros SET categoria=:cat, titulo=:tit, autor=:autor WHERE id=:id;");
$stmt->bindValue(':id', $id);
$stmt->bindValue(':autor', $autor);
$stmt->bindValue(':tit', $titulo);
$stmt->bindValue(':cat', $categoria);
$stmt->execute();

header('Location: index.php');


?>