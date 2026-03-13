<?php

class Conta
{
    public $numero;
    public $saldo;

    function __contruct($numero, $saldo)
    { 
        $this->numero = $numero;
        $this->saldo = $saldo;
    }
}