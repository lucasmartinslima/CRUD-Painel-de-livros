
<?php include('db_con.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Painel - Início</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&display=swap" rel="stylesheet">
</head>
<body>

	<div>
		<ul>
			<li> <a href="index.php"> Inicio </a> </li>
			<li> <a href="page-registrar.php"> Registrar livro</a> </li>
		</ul>
	</div>


	<div>
		<form class="form-busca" action="" method="GET">
			<h3>Filtrar busca: </h3>
			<select id="busca" name="op">
				<option value="ciencia" selected>Ciência</option>
				<option value="acao">Ação</option>
				<option value="fic_cien">Ficção Cientifica</option>
				<option value="romance" name="romance" >Romance</option> 
				<option value="programacao">Programação</option>
			</select>
			<input class="" type="submit" value="Buscar livro">
		</form>
	</div>


	<?php

	echo "
	<table>
	<tr>
	<th>Id</th>
	<th>Titulo</th> 
	<th>Categoria</th>
	<th>Autor</th>
	<th>Editar</th>
	<th>Excluir</th>
	</tr>";





	if(isset($_GET['op'])){

		$op=$_GET['op'];

		$stmt = $db->prepare("SELECT * FROM livros WHERE categoria=:op");    
		$stmt->bindValue(':op', $op);
		$stmt->execute();    
		$dados = $stmt->fetchAll();      


		foreach ($dados as $dado) {

			echo "

			<tr>
			<td>".$dado['id']."</td>
			<td>".$dado['titulo']."</td> 
			<td>".$dado['categoria']."</td>
			<td>".$dado['autor']."</td>

			<td class='editar'>
			<a href=page-editar.php?id=".$dado['id']."> Editar </a>
			</td>
			<td id='excluir'>
			<a href=excluir-livro.php?id=".$dado['id']."> Excluir </a>
			</td>	
			</tr>

			";                       
		}
	}
	else
	{

		$stmt = $db->prepare("SELECT * FROM livros");    
		$stmt->execute();        
		$dados = $stmt->fetchAll();      

		foreach ($dados as $dado) {
			echo "<tr>
			<td>".$dado['id']."</td>
			<td>".$dado['titulo']."</td> 
			<td>".$dado['categoria']."</td>
			<td>".$dado['autor']."</td>


			<td class='editar'>
			<a href=page-editar.php?id=".$dado['id']."> Editar </a>
			</td>
			<td id='excluir'> 
			<a href=excluir-livro.php?id=".$dado['id']."> Excluir </a>
			</td>	
			</tr>

			";                           
		}

	}






	?>




</body>
</html>