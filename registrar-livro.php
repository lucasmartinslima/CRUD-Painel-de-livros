<?php
include('db_con.php');

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$categoria = $_POST['opcao'];


$sql = "INSERT INTO livros(titulo,autor,categoria) VALUES(:titulo,:autor,:categoria)";
$stmt = $db->prepare($sql);
$stmt->bindValue("titulo", $titulo);
$stmt->bindValue(":categoria", $categoria);
$stmt->bindValue(":autor", $autor);
$stmt->execute();


header('Location: index.php');