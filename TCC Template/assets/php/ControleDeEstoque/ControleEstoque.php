<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
	<meta charset="utf-8">
	<title>Controle de Estoque</title>
	<link rel="shortcut icon" href="Logo1.ico">
	<link rel="stylesheet" href="Cadastro.css">
</head>
<body>
	<div class="container">
		<div id="controle">
			<form method="get" action="grava.php" class="formulário">
				<img src="MerceariaLogo.png" width="250">
				<h2>Controle de<strong> Estoque</strong></h2>
				<br>
				<label>Descrição<input type="text" name="fdescricao" placeholder="Descricao" required class="input"><br>
				<label>Quantidade<input type="text" name="fquantidade" placeholder="Quantidade" required class="input"><br>
				<label>Valor Unitário<input type='number' step='0.01' value='0.00' placeholder='0.00'name="fvalorunitario" placeholder="Valor Unitario" required class="input"><br>
				<input id="BotaoLog" type="submit" value="Gravar" class="botform">
				</form>	
		</div>
	</div>
</body>
</html>