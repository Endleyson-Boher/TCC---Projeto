<?php
		include("Conecta.php");
		
		$recdescricao=$_GET["fdescricao"];
		$recquantidade=$_GET["fquantidade"];
		$recvalorunitario=$_GET["fvalorunitario"];
		$recvalortotal= $recquantidade * $recvalorunitario;

		mysqli_query($conexao, "insert into produto(Descricao, Quantidade, ValorUnitario, ValorTotal) values('$recdescricao', '$recquantidade', '$recvalorunitario', '$recvalortotal')");

		header("location:lista.php");

?>