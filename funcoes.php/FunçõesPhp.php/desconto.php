<?php

require_once "funcao.php";

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $preco = (float) $_POST["preco"];
    $desconto = (float) $_POST["desconto"];

    $valorFinal = calcularDesconto($preco, $desconto);

    $resultado = "O valor final com desconto é: R$ "
        . number_format($valorFinal, 2, ",", ".");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Desconto</title>
</head>

<body>

    <?php if ($resultado == "") { ?>

        <form method="post">

            <label>Preço do produto:</label>
            <input type="number" step="0.01" name="preco" min="0" required>

            <br><br>

            <label>Desconto (%):</label>
            <input type="number" step="0.01" name="desconto" min="0" max="100" required>

            <br><br>

            <button type="submit">Calcular Desconto</button>

        </form>

    <?php } else { ?>

        <h2><?php echo $resultado; ?></h2>

    <?php } ?>
    <br><br>
    <a href="index.php">Voltar ao menu</a>

</body>

</html>