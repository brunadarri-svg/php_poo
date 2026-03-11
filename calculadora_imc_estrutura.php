<?php

// Entrada de dados
$peso = 70;
$altura = 1.75;

// Processamento
$imc = $peso / ($altura * $altura);

// Saída
echo "Peso: $peso kg <br>";
echo "Altura: $altura m <br>";
echo "IMC: " . number_format($imc, 2) . "<br>";

// Estrutura de decisão
if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($imc < 24.9) {
    echo "Classificação: Peso normal";
} elseif ($imc < 29.9) {
    echo "Classificação: Sobrepeso";
} elseif ($imc < 34.9) {
    echo "Classificação: Obesidade grau 1";
} elseif ($imc < 39.9) {
    echo "Classificação: Obesidade grau 2";
} else {
    echo "Classificação: Obesidade grau 3";
}

?>