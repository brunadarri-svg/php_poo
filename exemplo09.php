<?php

class Filme 
{
    public $nome;
    public $saldo;

    function_construct($nome, $saldo)
    {
        $this->nome = $nome;
        $this->saldo = $saldo;
    }

    function_incrementarSaldo($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }
}