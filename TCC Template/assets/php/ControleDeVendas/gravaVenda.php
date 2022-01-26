<?php
		include("conecta.php");
		
		$recdescricao=$_GET["fdescricao"];
		$recquantidade=$_GET["fquantidade"];
		$recdatahoravenda=$_GET["fdatahoravenda"];
		$recvalortotal=$_GET["fvalortotal"];

		mysqli_query($conexao, "insert into venda(Descricao, Quantidade, DataHoraVenda, ValorTotal) values('$recdescricao', '$recquantidade', '$recdatahoravenda', '$recvalortotal')");

		header("location:listaVenda.php");

?>