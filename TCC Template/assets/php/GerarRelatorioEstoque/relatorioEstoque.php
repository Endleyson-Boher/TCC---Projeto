<?php	

	include_once("conexao.php");

	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Descição</th>';
	$html .= '<th>Quantidade</th>';
	$html .= '<th>Valor Unitário</th>';
	$html .= '<th>Valor Total</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_produto = "SELECT * FROM produto";
	$resultado_produto = mysqli_query($conn, $result_produto);
	while($row_produto = mysqli_fetch_assoc($resultado_produto)){
		$html .= '<tr><td>'.$row_produto['CodProduto'] . "</td>";
		$html .= '<td>'.$row_produto['Descricao'] . "</td>";
		$html .= '<td>'.$row_produto['Quantidade'] . "</td>";
		$html .= '<td>R$'.$row_produto['ValorUnitario'] . "</td>";
		$html .= '<td>R$'.$row_produto['ValorTotal'] . "</td></tr>";		
	}
	
	$html .= '</tbody>';
	$html .= '</table';


	use Dompdf\Dompdf;

	require_once("dompdf/autoload.inc.php");

	$dompdf = new DOMPDF();
	
	$dompdf->load_html('
			<h1 style="text-align: center;">Mercearia do Paulinho - Relatório de Estoque</h1>
			'. $html .'
		');

	$dompdf->render();

	$dompdf->stream(
		"relatorio_estoque.pdf", 
		array(
			"Attachment" => false 
		)
	);
?>