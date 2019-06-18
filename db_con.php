<?php

try{
$db = new PDO('mysql:host=localhost;dbname=banco_livros','root','');
}catch(PDOException $e){
  echo "Erro ".$e->getMessage();
}