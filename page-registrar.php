
<!DOCTYPE html>
<html>
<head>
	<title>Painel - Registrar Livros</title>
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


	<div class="reg-form">
		<form class="" action="registrar-livro.php" method="POST">
			<input class="reg" type="text" name="titulo" id="titulo" placeholder="Título"></br>
			<input class="reg" type="text" name="autor" id="autor" placeholder="Autor"></br>
			<select class="reg-s" name="opcao">
				<option value="ciencia" selected>Ciência</option>
				<option value="acao">Ação</option>
				<option value="fic_cien">Ficção Cientifica</option>
				<option value="romance" name="romance" >Romance</option> 
				<option value="programacao">Programação</option>
			</select></br>
			<input class="reg-s"  class="" type="submit" value="Registrar Livro" ">
		</form>
	</div>

	

</body>
</html>









