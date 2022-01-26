// JavaScript Document
function verificaVenda(recCodVenda){
	if(confirm("Tem certeza de que deseja excluir permanentemente este cadastro?")){
		window.location="excluiVenda.php?idexc=" + recCodVenda
	} 
}