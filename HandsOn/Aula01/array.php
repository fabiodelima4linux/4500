<?php

echo "<pre>";

$var[0] = "Linux";
$var[1] = "4Linux";

var_dump($var);

echo "<hr>";

$pessoa = ["nome" => "LUcas", 
	"idade" => "24"];

	var_dump($pessoa);

	echo "<hr>";

	$cursos = [
	"PHP" => [
	"iniciante" => 500],
	"LINUX" => [
	"intermediario" => 45],
	];

	var_dump($cursos);

	echo "<hr>";

	foreach($cursos as $nome => $valor){
		var_dump($cursos);
	}

