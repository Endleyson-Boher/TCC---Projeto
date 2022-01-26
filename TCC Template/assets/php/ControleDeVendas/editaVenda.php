 <!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
	<link rel="stylesheet" href="cadastro.css">
	<link rel="shortcut icon" href="Logo1.ico">
	<meta charset="utf-8">
	<title>Formulário de Edição</title>
</head>
<body>	
	<?php
		include("conecta.php");
		$recCodVenda=$_GET["editacodvenda"];
		$seleciona=mysqli_query($conexao, "select * from venda where CodVenda=$recCodVenda");
		$campo=mysqli_fetch_array($seleciona);
	?>	
	<div id="editar">
		<form method="post" action="gravaEditaVenda.php" class="formulário">
			<img src="merceariaLogo.png" width="250">
			<h2>Formulário de <strong> Edição</strong></h2>
			<br>
			<input type="hidden" name="fCodVenda" value="<?=$campo["CodVenda"]?>">
			<label>Descrição<input type="text" name="fdescricao" placeholder="Descricao" required class="input" value="<?=$campo["Descricao"]?>"><br>
			<label>Quantidade<input type="text" name="fquantidade" placeholder="Quantidade" required class="input" value="<?=$campo["Quantidade"]?>"><br>
			<label>Valor Total<input type="number" step='0.01' name="fvalortotal" placeholder="ValorTotal" required class="input" value="<?=$campo["ValorTotal"]?>"><br>
			<label>Data da Venda<input id="date" type="date" name="fdatahoravenda" placeholder="DataHoraVenda" required class="input" value="<?=$campo["DataHoraVenda"]?>"><br>	
			<input id="BotaoLog" type="submit" value="GRAVAR" class="botform">
		</form>	
	</div>
</body>
</html>