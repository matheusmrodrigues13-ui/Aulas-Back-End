<?php

require_once "funcao.php";

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = (float) $_POST["numero1"];
    $numero2 = (float) $_POST["numero2"];

    $soma = Soma($numero1, $numero2);

    $resultado = "A soma é: " . $soma;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Soma</title>
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

            <button type="submit">Somar</button>

        </form>

    <?php } else { ?>

        <h2><?php echo $resultado; ?></h2>

    <?php } ?>
    <br><br>
    <a href="index.php">Voltar ao menu</a>

</body>

</html>