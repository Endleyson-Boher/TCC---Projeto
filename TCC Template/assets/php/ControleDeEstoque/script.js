// JavaScript Document
function verifica(recCodProduto){
	if(confirm("Tem certeza de que deseja excluir permanentemente este cadastro?")){
		window.location="excluir.php?idexc=" + recCodProduto
	} 
}