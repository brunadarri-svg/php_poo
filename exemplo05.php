<?php

class funcionario
{
    public $nome;
    public $salario;
    public $previdencia;
    public $descontos;
    public $tipoFuncionario;

    function __construct($nome, $salario, $previdencia )
    {
         $this->nome = $nome;
         $this->salario = $salario;
         $this->previdencia = $previdencia;
         $this->descontos= $this->calcularDescontos();
         $this->tipoFuncionario = $this->categorizarFuncionario();
    }

    function calcularDescontos()
    {
       return number_format($this->salario * 0.257 + $this->previdencia, 2, ',','.');
    }

    function categorizarFuncionario(): string 
    {
        $salario = $this->salario;

        if($salario >= 1000 && $salario < 2000){
            $tipoFuncionario = "Junior";
        }else if($salario >= 2000 && $salario < 3000){
            $tipoFuncionario = "Pleno";
        }else if($salario >= 3000 ){
            $tipoFuncionario = "Ssenior";
        }else{
            $tipoFuncionario = "Estagiario";
        }

        return $tipoFuncionario;
    }
}

$joao = new Funcionario('Joao Filho', 1000,100);
$maria = new Funcionario('Maria Rute', 2000,200);
$jose = new Funcionario('José Salgado', 3000,300);

echo "Funcionari@ $joao->nome é   $joao->tipoFuncionario e o valor do desconto é
de R$ $joao->descontos <br>";

echo "Funcionari@ $maria->nome  é $maria->tipoFuncionario e o valor do desconto é
de R$ $maria->descontos <br>";

echo "Funcionari@ $jose->nome é   $jose->tipoFuncionario e o valor do desconto é
de R$ $jose->descontos <br>";

