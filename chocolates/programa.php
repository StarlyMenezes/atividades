<?php
$contagem = 0;
$chocolatePreto = 0;
$chocolateBranco = 0;
$promoB = 0 ; 
$promoE = 0 ;

$chocolatePreto = $_POST["chocolatePreto"];
$chocolateBranco = $_POST["chocolateBranco"];

$contagem = 3 ;
while ($contagem <= $chocolatePreto) {
	$promoB = $promoB  + 1; 
	$contagem = $contagem + 3;
} 

$contagem = 2 ;
while ($contagem <= $chocolateBranco) {
	$promoE = $promoE  + 1 ;
	$contagem = $contagem  + 2 ;

}
$contagem = 5 ;
while ($contagem <= $chocolatePreto + $chocolateBranco) {
	$promoB = $promoB + 1 ; 
	$contagem = $contagem + 5 ;

}
echo $chocolateBranco + $promoB;
echo $chocolatePreto  + $promoE;

?>

