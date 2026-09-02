<?php

require_once "funcao.php";

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $peso = (float) $_POST["peso"];
    $altura = (float) $_POST["altura"];

    if ($peso <= 0 || $altura <= 0) {

        $resultado = "Digite um peso e uma altura válidos.";

    } else {

        $imc = calcularIMC($peso, $altura);

        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc < 25) {
            $classificacao = "Peso adequado";
        } elseif ($imc < 30) {
            $classificacao = "Sobrepeso";
        } elseif ($imc < 35) {
            $classificacao = "Obesidade grau I";
        } elseif ($imc < 40) {
            $classificacao = "Obesidade grau II";
        } else {
            $classificacao = "Obesidade grau III";
        }

        $resultado = "Seu IMC é: " . number_format($imc, 2, ",", ".")
            . "<br>Classificação: " . $classificacao;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>

<body>

    <?php if ($resultado == "") { ?>

        <h1>Calculadora de IMC</h1>

        <form method="post">

            <label>Peso:</label>
            <input type="number" step="0.01" name="peso" required>

            <br><br>

            <label>Altura:</label>
            <input type="number" step="0.01" name="altura" required>

            <br><br>

            <button type="submit">Calcular IMC</button>

        </form>

        <br>

        <a href="index.php">Voltar ao menu</a>

    <?php } else { ?>

        <h2><?php echo $resultado; ?></h2>

        <br>

        <a href="index.php">Voltar ao menu</a>

    <?php } ?>

</body>

</html>