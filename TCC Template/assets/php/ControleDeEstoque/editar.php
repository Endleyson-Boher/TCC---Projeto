<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
	<link rel="stylesheet" href="Cadastro.css">
	<link rel="shortcut icon" href="Logo1.ico">
	<meta charset="utf-8">
	<title>Formulário de Edição</title>
</head>
<body>	
	<?php
		include("Conecta.php");
		$recCodProduto=$_GET["editaCodProduto"];
		$seleciona=mysqli_query($conexao, "select * from produto where CodProduto=$recCodProduto");
		$campo=mysqli_fetch_array($seleciona);
	?>	
	<div id="editar">
		<form method="post" action="gravaedita.php" class="formulário">
			<img src="MerceariaLogo.png" width="250">
			<h2>Formulário de <strong> Edição</strong></h2>
			<br>
			<input type="hidden" name="fCodProduto" value="<?=$campo["CodProduto"]?>">
			<label>Descrição<input type="text" name="fdescricao" placeholder="Descricao" required class="input" value="<?=$campo["Descricao"]?>"><br>
			<label>Quantidade<input type="text" name="fquantidade" placeholder="Quantidade" required class="input" value="<?=$campo["Quantidade"]?>"><br>
			<label>Valor Unitário<input type="number" step='0.01' name="fvalorunitario" placeholder="ValorUnitario" required class="input" value="<?=$campo["ValorUnitario"]?>"><br>
			<input id="BotaoLog" type="submit" value="GRAVAR" class="botform">
		</form>	
	</div>
</body>
</html>