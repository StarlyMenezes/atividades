<?php
$codigo = 0;

$codigo = $_POST["codigo"]; 

switch($codigo){ 
	case 1: 
		echo "Caneta 1.20";
		break;
	case 2:
		echo "Lápis 0.80";
		break;
	case 3:		
		echo "Caderno 3.50";
		break;
	default:
		echo "Produto não Cadastrado";

}

?>
