<?php


	$tamanho = 10;
	$numeros = array();

	for($i=0;$i<$tamanho;$i++)
	{
		echo $i;
		echo "<br>";
	}
	
	echo "<hr>";
	

	for($i=0; $i <= $tamanho; $i++)
	{
		$numeros[] = mt_rand(0,10);
		
	}
	echo "<pre>";
	var_dump($numeros);

	echo "<hr>";

	for($i=0; $i <= $tamanho; $i++)
	{
		echo $numeros[$i] . ",";
		
	}
	

	echo "<hr>";

	foreach($numeros as $chave => $valor){
		echo $chave . "=" .$valor. ",";
	}

	echo "<hr>";

	echo $numeros[0];
	
	echo "<hr>";

	echo $numeros[$tamanho - 1];

	echo "<hr>";

	for($i = 0; $i < $tamanho; $i++){
	
		if($numeros[$i] % 2 != 0){
		echo $numeros[$i] . ",";
		}
	}
	
	echo "<hr>";

	foreach($numeros as $chave => $valor){
		
		if($valor % 2 != 0){
			echo $valor . ",";
		}	
	}
	echo "<hr>";
	
	$maior = $numeros[0];

	for($i = 0; $i < $tamanho; $i++){
	
		if($numeros[$i] > $maior){
		$maior = $numeros[$i];
		}
		
	}
	echo $maior;
	
	echo "<hr>";

	foreach($numeros as $chave => $valor){
		
		if($valor > $maior){
			$maior = $valor;		
		}
		
	}
	echo $maior;
	
	echo "<hr>";
	
	$maior = $numeros[0];
	$menor = $numeros[0];

	for($i = 0; $i < $tamanho; $i++){
	
		if($numeros[$i] < $menor){
		$menor = $numeros[$i];
		}		
	}
	echo $menor;
	
	echo "<hr>";

	foreach($numeros as $chave => $valor){
		
		if($valor < $menor){
			$menor = $valor;
		}
	}
	echo $menor;



	


