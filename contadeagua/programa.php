<?php
$mes1 = 0;
$mes2 = 0;
$mes3 = 0;
$media = 0;

$mes1 = $_POST["mes1"];
$mes2 = $_POST["mes2"];
$mes3 = $_POST["mes3"];

$media = ($mes1 + $mes2 + $mes3)/3;
echo "Sua média de conta é R$ " . $media . "<br/>";

$mediaConsumo = $media  /  2.50;
echo "Sua média de consumo é "  . $mediaConsumo . "m³ <br/>";

echo "A previsão da sua próxima conta com o aumento da tarifa   è de R$ "  . ($mediaConsumo  * 3.50); 

?>
