<?php

require_once "funcao.php";

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = (int) $_POST["numero"];

    $resultadoFatorial = fatorial($numero);

    $resultado = "O fatorial de $numero é: $resultadoFatorial";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Fatorial</title>
</head>

<body>

    <?php if ($resultado == "") { ?>

        <form method="post">

            <label>Digite um número:</label>

            <input type="number" name="numero" min="0" required>

            <br><br>

            <button type="submit">Calcular Fatorial</button>

        </form>

    <?php } else { ?>

        <h2><?php echo $resultado; ?></h2>

    <?php } ?>
    <br><br>
    <a href="index.php">Voltar ao menu</a>

</body>

</html>