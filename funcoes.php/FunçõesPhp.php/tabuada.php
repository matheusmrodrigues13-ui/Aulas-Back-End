<?php

require_once "funcao.php";

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = (int) $_POST["numero"];

    ob_start();

    tabuada($numero);

    $resultado = ob_get_clean();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>

<body>

    <?php if ($resultado == "") { ?>

        <form method="post">

            <label>Digite um número:</label>
            <input type="number" name="numero" required>

            <br><br>

            <button type="submit">Calcular Tabuada</button>

        </form>

    <?php } else { ?>

        <h2>Tabuada do número</h2>

        <?php echo $resultado; ?>

    <?php } ?>
    <br><br>
    <a href="index.php">Voltar ao menu</a>

</body>

</html>