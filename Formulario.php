<!DOCTYPE html>
<html lang="pt-br"> 
<head>
<meta charset="utf-8">
<meta name="viwport" content="width=device-width, initial-scale=1">
<title>Interação com Formulários</title>
<link rel="stylesheet" type="text/css" href="style01.css">
</head>
<body>
<header>
	<div class="div1">
		<div class="div02">

			<h1 align="center" style="color: #372991;">Apresente-se para nós</h1>

		</div>

	</div>
	
	</header>
	<div id="container">
	<section>
		<form action="cad.php" method="get">
			
			<label for="nome">Nome</label>

			<input type="text" name="nome" id="idnome">

			<label for="sobrenome">Sobrenome</label>

			<input type="text" name="sobrenome" id="idsobrenome">

			<label for="e-mail">E-mail</label>

			<input type="e-mail" name="e-mail" id="idemail">

			<input type="submit" value="Enviar"> 
		</form>
	</section>
</div>
</body>
</html>

