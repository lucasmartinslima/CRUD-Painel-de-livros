
<?php
include('db_con.php');

$id = $_GET['id'];

$stmt= $db->prepare("SELECT * FROM livros WHERE id=:id;");
$stmt->bindValue(':id', $id);
$stmt->execute();

	$dados = $stmt->fetchAll();   

foreach ($dados as $dado) {
		$id = $dado['id'];
	$titulo = $dado['titulo'];
	$autor = $dado['autor'];
	
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Editar Livro</title>
	<title>Painel - Registrar Livros</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&display=swap" rel="stylesheet">
</head>
</head>
<body>

	<div>
		<ul>
			<li> <a href="index.php"> Inicio </a> </li>
			<li> <a href="page-registrar.php"> Registrar livro</a> </li>
		</ul>
	</div>


<div class="reg-form">
<form class="" action="editar-livro.php" method="GET">

<?php echo 
'<input class="reg" type="text" name="titulo"  placeholder="Título" value="'.$titulo.'"> </br>
<input class="reg" type="text" name="autor"  placeholder="Autor"  value="'.$autor.'"> </br>
<input class="id-livro" type="text" name="id" readonly="true" value="'.$id.'"> </br>
'; ?>
			<select class="reg-s"  name="cat">
			<option value="ciencia" selected>Ciência</option>
			<option value="acao">Ação</option>
			<option value="fic_cien">Ficção Cientifica</option>
			<option value="romance" name="romance" >Romance</option> 
			<option value="programacao">Programação</option>
		</select>
	<input class="reg-s" class="" type="submit" value="Editar Livro">
</form>
	</div>


</body>
</html>

