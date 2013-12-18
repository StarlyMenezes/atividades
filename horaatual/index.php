<?php

date_default_timezone_set("Brazil/East");
echo '<meta http-equiv ="refresh" content = "1" >'; 

$dataAtual = getdate();


$horas = $dataAtual["hours"] -1;

$minutos = str_pad($dataAtual["minutes"] , 2 , "0" , STR_PAD_LEFT);

$segundos =  str_pad($dataAtual["seconds"] , 2 , "0" , STR_PAD_LEFT);


echo "Hora Certa :" . "$horas:$minutos:$segundos ";
echo "<br/>" ;


echo "Data Certa :" . $dataAtual["mday"] . "/" . $dataAtual["mon"] . "/" .$dataAtual["year"];

echo "<br/>" ; 


switch ($dataAtual["wday"]){

	case 0:
	echo "Domingo";
	break;
	
	case 1:
	echo "Segunda-Feira";
	break;

	case 2:
	echo "Terça-Feira";
	break;

	case 3:
	echo "Quarta-Feira";
	break;

	case 4:
	echo "Quinta-Feira";
	break;

	case 5:
	echo "Sexta-Feira";
	break;

	case 6:
	echo "Sábado";
	break;
}
 
?>


