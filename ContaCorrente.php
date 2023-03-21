<?php

class ContaCorrente extends Conta {
    var $limite;

    function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $limite){
        parent:: __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
        $this->limite = $limite;
    }
}

?>