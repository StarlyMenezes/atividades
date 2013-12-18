<?php
$numero = 0;

$numero = $_POST["numero"];

if ($numero % 2== 0){
	echo "O número é par";
}
if ($numero % 2== 1){
	echo "O número é impar";
}
?>
