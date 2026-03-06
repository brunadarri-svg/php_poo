<?php 

$joaoSalario = 1000;
$joaoPrevidencia = 100;
$joaoNome = 'João Filho';
$joaoDescontos = number_format($joaoSalario*0.25 + $joaoPrevidencia, 2, ',', '.');

$mariaSalario = 2000;
$mariaPrevidencia = 200;
$mariaNome = 'Maria Rute';
$mariaDescontos = number_format($joaoSalario*0.25 + $joaoPrevidencia, 2, ',', '.');

$joseSalario = 3000;
$josePrevidencia = 300;
$joseNome = 'José Salgado';
$joseDescontos = number_format($joaoSalario*0.25 + $joaoPrevidencia, 2, ',', '.');

echo "O Valor do desconto de $joaoNome é $joaoDescontos. <br>";
echo "O Valor do desconto de $mariaNome é $mariaDescontos. <br>";
echo "O Valor do desconto de $joseNome é $joseDescontos. <br>";