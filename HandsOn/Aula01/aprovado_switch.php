<?php

$nota = 7;
$frequencia = 8;

switch(true){
	case($nota >= 7 && $frequencia >= 8);
	echo "Aprovado";
	break;
	case($nota >= 5 && $nota < 7 &&$frequencia >= 8);
	echo "Recuperação";
	break;
	case(nota < 5 || $frequencia < 8);
	echo "Reprovado";
	break;
	default:
	#code
	break;
	
}