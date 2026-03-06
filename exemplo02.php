<?php

function calcularDescontos($salario, $previdencia) {
    return number_format($salario*0.275 + $previdencia, 2, ',', '.');
}

$joaoNome = "João Filho";
$joaoDescontos = calcularDescontos(1000, 100);

$mariaNome = "Maria Rute";
$mariaDescontos = calcularDescontos(2000, 200);

$joseNome = "José salgado";
$joseDescontos = calcularDescontos(3000, 300);

echo "O Valor do desconto de $joaoNome é de $joaoDescontos. <br>";
echo "O Valor do desconto de $mariaNome é de $mariaDescontos. <br>";
echo "O Valor do desconto de $joseNome é de $joseDescontos. <br>";
