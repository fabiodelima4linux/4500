<?php
$num = 4;


function isPar($num){
	
	if($num % 2 == 0){
		return true;
	}else{
		return false;
	}
}
echo isPar($num);

echo "<hr>";

function isMaior($num1,$num2){
	$maior;
	if($num1 > $num2){
		$maior = $num1;
	}
	else if($num2 > $num1){
		$maior = $num2;
	}
	else{
		$maior = "Iguais";
	}	
	return $maior;
}
$resultado = isMaior(1,1);
echo $resultado;

echo "<hr>";

function gerarAleatorio($tam = 5, $num1 = 0, $num2 = 10){
	for($i = 0; $i < $tam; $i++){
		$numeros[] = mt_rand($num1, $num2);
	}
	return $numeros;
}
$array = gerarAleatorio();
var_dump($array);


echo "<hr>";

$nomes = ['Lucas', 'Marcos', 'Lucas'];
$encontrado =  array_filter($nomes, function($nomes){

	if($nomes != 'Lucas'){
		return $nomes;
	}
});
var_dump($encontrado);


echo "<hr>";

//nativas


$nomes = "Lucas,João,Mateus,César";
$nomes = explode(',', $nomes);
var_dump($nomes);

echo "<hr>";

$nomes = array("Lucas,João,Mateus,César");
$nomes = implode(',', $nomes);
var_dump($nomes);

echo "<hr>";

$email = 'lucas@linux.org';
$dominio = strstr($email,'@');
echo $dominio;

echo "<hr>";

$email = 'lucas@linux.org';
$user = strstr($email,'@', true);
echo $user;

echo "<hr>";

$string ="98745693";
$procurar = "3";

$pos = strpos($string, $procurar);
echo $pos;


echo "<hr>";

$string ="98745693";
$procurar = "3";

$pos = strrpos($string, $procurar);
echo $pos;

echo "<hr>";

$string ="dAAaaccDDcC";
$procurar = "a";

$pos = strrpos($string, $procurar);
echo $pos;

echo "<hr>";

function par($num){
	
	if($num % 2 == 0){
		return $num;	
	}
}
function impar($num){
	
	if($num % 2 != 0){
		return $num;	
	}
}
$vetor = [6,7,8,9,10,11,12,13];
print_r(array_filter($vetor,"par"));
print_r(array_filter($vetor,"impar"));

echo "<hr>";

$chaves = array(1,2,3);
$valores = array("um","dois","tres");
$vetor = array_combine($valores,$chaves);
print_r($vetor);