<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
		h1{
			text-align: center;
			font-size: 10px;
			font-family: sans-serif;
			color: #444445;
		}
		thead{
			color: #444445;
		}
		strong{
			color: #fd9464;
		}
		tbody{
			color: #444445;
		}
	</style>
	<title>Listagem de Vendas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="Logo1.ico">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	<script type="text/jscript" src="script.js"></script>
</head>
<body>
	<h1 class="título" text-align:center> Listagem de<strong> Vendas</h1>
	<div class="container">
		<table class="bordered striped centered highlight responsive-table">
			<colgroup>
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
            </colgroup>
            <thead class="u-align-center u-custom-font u-heading-font u-palette-1-base u-table-header u-table-header-1">
				<tr style="height: 45px;">
					<td>DESCRIÇÃO</td>
					<td>QUANTIDADE</td>
					<td>VALOR TOTAL</td>
					<td>DATA E HORA DA VENDA</td>
					<td width="10">ALTERAR</td>
					<td width="10">EXCLUIR</td>
				</tr>
			 </thead>
				<?php
					include("conecta.php");
				$seleciona=mysqli_query($conexao, "select * from venda order by CodVenda desc");
					while ($campo=mysqli_fetch_array($seleciona)) {?>
					<tbody class="u-align-center u-table-body u-text-body-color">
						<tr style="height: 80px;">
							<td><?=$campo["Descricao"]?></td>
							<td><?=$campo["Quantidade"]?></td>
							<td>R$<?=$campo["ValorTotal"]?></td>
							<td><?=$campo["DataHoraVenda"]?></td>
							<td align="center"><a href="editaVenda.php?editacodvenda=<?=$campo["CodVenda"]?>"><i class="fa fa-edit"></i></a></td>
							<td align="center"><a href="#"onClick="verificaVenda(<?=$campo["CodVenda"]?>)"><i class="fa fa-trash"></i></a></td>
						</tr> 
					</tbody>
				<?php }?>
		

    	</table>
    </div>

</body>
</html>
