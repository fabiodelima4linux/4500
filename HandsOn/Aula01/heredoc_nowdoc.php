<?php

$certi = "Zend";
$curso = <<< TEXTO

EStou se preparando para a certificação $certi na 4LInux;

TEXTO;

echo "$curso";
echo "<hr>";
$curso = <<< 'TEXTO'

EStou se preparando para a certificação $certi na 4LInux;

TEXTO;

echo $curso;