<?php
	include("conecta.php");

	$recCodVenda=$_POST["fCodVenda"];
	$recdescricao=$_POST["fdescricao"];
	$recquantidade=$_POST["fquantidade"];
	$recdatahoravenda=$_POST["fdatahoravenda"];
	$recvalortotal=$_POST["fvalortotal"];


	mysqli_query($conexao,"update venda set Descricao='$recdescricao', Quantidade='$recquantidade', ValorTotal='$recvalortotal', DataHoraVenda='$recdatahoravenda' where CodVenda=$recCodVenda");

	header("location:listaVenda.php");
?>