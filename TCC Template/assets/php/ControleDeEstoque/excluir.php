<?php
		include("Conecta.php");

		$recCodProduto=$_GET["idexc"];

		mysqli_query($conexao, "delete from produto Where CodProduto=$recCodProduto");

		header("location:lista.php");
?>