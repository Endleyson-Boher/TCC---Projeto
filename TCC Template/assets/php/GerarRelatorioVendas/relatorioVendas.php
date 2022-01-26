<?php	

	include_once("conexao.php");

	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Descrição</th>';
	$html .= '<th>Quantidade</th>';
	$html .= '<th>Valor Total</th>';
	$html .= '<th>Data da venda</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_venda = "SELECT * FROM venda";
	$resultado_venda = mysqli_query($conn, $result_venda);
	while($row_venda = mysqli_fetch_assoc($resultado_venda)){
		$html .= '<tr><td>'.$row_venda['CodVenda'] . "</td>";
		$html .= '<td>'.$row_venda['Descricao'] . "</td>";
		$html .= '<td>'.$row_venda['Quantidade'] . "</td>";
		$html .= '<td>R$'.$row_venda['ValorTotal'] . "</td>";
		$html .= '<td>'.$row_venda['DataHoraVenda'] . "</td></tr>";		
	}
	
	$html .= '</tbody>';
	$html .= '</table';


	use Dompdf\Dompdf;

	require_once("dompdf/autoload.inc.php");

	$dompdf = new DOMPDF();
	
	$dompdf->load_html('
			<h1 style="text-align: center;">Mercearia do Paulinho - Relatório de Vendas</h1>
			'. $html .'
		');

	$dompdf->render();

	$dompdf->stream(
		"relatorio_vendas.pdf", 
		array(
			"Attachment" => false 
		)
	);
?>