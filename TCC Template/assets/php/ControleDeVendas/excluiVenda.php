<?php
		include("conecta.php");

		$recCodVenda=$_GET["idexc"];

		mysqli_query($conexao, "delete from venda Where CodVenda=$recCodVenda");

		header("location:listaVenda.php");
?>