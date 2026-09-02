<?php

require_once "funcao.php";

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $celsius = (float) $_POST["celsius"];

    $fahrenheit = CelsiusParaFahrenheit($celsius);

    $resultado = "A temperatura em Fahrenheit é: "
        . number_format($fahrenheit, 2, ",", ".");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Conversor de Temperatura</title>
</head>

<body>

<?php if ($resultado == "") { ?>

    <h1>Conversor de Temperatura</h1>

    <form method="post">

        <label>Digite a temperatura em Celsius:</label>

        <br><br>

        <input type="number" step="0.01" name="celsius" required>

        <br><br>

        <button type="submit">Converter</button>

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