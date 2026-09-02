<?php

require_once "funcao.php";

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = (float) $_POST["numero1"];
    $numero2 = (float) $_POST["numero2"];
    $numero3 = (float) $_POST["numero3"];

    $media = mediaAritmetica($numero1, $numero2, $numero3);

    $resultado = "A média é: " . number_format($media, 2, ",", ".");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Média Aritmética</title>
</head>

<body>

    <?php if ($resultado == "") { ?>

        <form method="post">

            <label>Digite o primeiro número:</label>
            <input type="number" step="0.01" name="numero1" required>

            <br><br>

            <label>Digite o segundo número:</label>
            <input type="number" step="0.01" name="numero2" required>

            <br><br>

            <label>Digite o terceiro número:</label>
            <input type="number" step="0.01" name="numero3" required>

            <br><br>

            <button type="submit">Calcular Média</button>

        </form>

    <?php } else { ?>

        <h2><?php echo $resultado; ?></h2>

    <?php } ?>
    <br><br>
    <a href="index.php">Voltar ao menu</a>

</body>

</html>