<!DOCTYPE html>
<html  lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viwport" content="width=device-width, initial-scale=1">
	<title>Interação com Formulários</title>
	<link rel="stylesheet" type="text/css" href="style01.css">
</head>
</head>
<body>
	<header>
		<h1>Resultado do processamento</h1>
	</header>
	<main>
		<?php
		$nome = $_GET['nome']?? "Digite o nome";
		$sobrenome = $_GET['sobrenome']?? "Desconhecido";
		echo"<p> É um prazer te conhecer, <strong> $nome $sobrenome!</strong> Este é o meu site!";
		?>
		<p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
	</main>

</body>
</html>