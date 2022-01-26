<?php
	include("Conecta.php");

	$recCodProduto=$_POST["fCodProduto"];
	$recdescricao=$_POST["fdescricao"];
	$recquantidade=$_POST["fquantidade"];
	$recvalorunitario=$_POST["fvalorunitario"];
	$recvalortotal= $recquantidade * $recvalorunitario;


	mysqli_query($conexao,"update produto set Descricao='$recdescricao', Quantidade='$recquantidade', ValorUnitario='$recvalorunitario', ValorTotal='$recvalortotal' where CodProduto=$recCodProduto");

	header("location:lista.php");
?>