<?php

include_once 'Pessoa.php';
include_once 'Conta.php';

$carlos = new Pessoa;
$carlos->Codigo = 10;
$carlos->Nome = "Carlos da Silva";
$carlos->ALtura = 1.85;
$carlos->Idade = 25;
$carlos->Nascimento = '10/04/1976';
$carlos->Escolaridade = "Ensino Médio";

echo "Manipulando o objeto $carlos->Nome : <br>";
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>";
echo "{$carlos->Nome} possui {$carlos->Idade} anos <br>";

$carlos->envelhecer(1);

?>