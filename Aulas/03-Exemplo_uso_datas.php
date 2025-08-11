<?php

	date_default_timezone_set('America/Sao_Paulo');
	echo "Hoje é " .  date("d - m - Y");
	echo "<br /><br />" ;
	echo "Hoje é " .  date("d/m/Y h:i:s");
	echo "<br /><br />" ;
	echo "Hoje é " .  date("l");
	echo "<br /><br />" ;
	echo "Hoje é " .  date("F");  
	echo "<br /><br />" ;  
	echo "Ano bissexto? ";
	if (date("L") ==1) {echo "Sim";}
		else {echo "Não";}; //. date("L");
	echo "<br /><br />" ;  
	echo "Fuso horário atual: " .  date("e");  
	echo "<br /><br /><hr />" ;

	$dataAtual= new DateTime();
	$dataEspecifica= new DateTime('2025-08-06 18:50:23');
	echo $dataAtual->format('d-m-Y H:i:s');
	echo "<br /><br />";
	echo $dataEspecifica->format('d-m-Y H:i:s');
	echo "<br /><br />" ;  
	//echo $dataAtual->format('N');
	$nomeDia = $dataEspecifica->format('N');
	switch($nomeDia){
		case 1: echo "Segunda-feira"; break;
		case 2: echo "Terça-feira"; break;
		case 3: echo "Quarta-feira"; break;
		case 4: echo "Quinta-feira"; break;
		case 5: echo "Sexta-feira"; break;
		case 6: echo "Sábado"; break;
	default: echo "Domingo";
	}
?>  