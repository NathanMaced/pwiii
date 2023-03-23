<?php

include_once 'Pessoa.php';
include_once 'Conta.php';

$carlos = new Pessoa;
$carlos->codigo = 10;
$carlos->nome = "Carlos da Silva";
$carlos->aLtura = 1.85;
$carlos->idade = 25;
$carlos->nascimento = '10/04/1976';
$carlos->escolaridade = "Ensino Médio";

echo "Manipulando o objeto $carlos->Nome : <br>";
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>";
echo "{$carlos->Nome} possui {$carlos->Idade} anos <br>";

$carlos->envelhecer(1);
echo "{$carlos->Nome} possui {$carlos->Idade} anos <br>";

$conta_carlos = new Conta;
$conta_carlos->agencia = 6677;
$conta_carlos->codigo = "CC.12 34. 56";
$conta_carlos->$dataDeCriacao = "10/07/02";
$conta_carlos->$titular = $carlos;
$conta_carlos->$senha = 9876;
$conta_carlos->$Saldo = 567.89;
$conta_carlos->cancelada = false;

echo "<br>";
echo "Manipulando a conta de: {$conta_carlos->titular->nome}<br>";
echo "O saldo atual é R\$ {$conta->carlos->obterSaldo()} <br>";

$conta_carlos->depositar(20);
echo "O saldo atual é R\$ {$conta->carlos->obterSaldo()} <br>";

$conta_carlos->retirar(10);
echo "O saldo atual é R\$ {$conta->carlos->obterSaldo()} <br>";

?>