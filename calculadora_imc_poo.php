<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>

<h2>Calculadora de IMC</h2>

<form method="post">
    <label>Peso (kg):</label>
    <input type="number" step="0.1" name="peso" required><br><br>

    <label>Altura (m):</label>
    <input type="number" step="0.01" name="altura" required><br><br>

    <button type="submit">Calcular IMC</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = $peso / ($altura * $altura);

    echo "<h3>Seu IMC é: " . number_format($imc, 2) . "</h3>";

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
}
?>

</body>
</html>