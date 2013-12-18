<?php
$passagens = 0;
$total = 0;

$passagens = $_POST["passagens"];

if ($passagens <= 4){
	$total = $passagens * 1.40;
} 
else{
	$total = 5.60;
	$total = $total + ($passagens - 4) * 2.80;
}
	echo "O valor que irá pagar é R$" . number_format($total ,2, ",", ".");

?>  

