<?php

require_once "funcao.php";

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = (int) $_POST["numero"];

    $resultado = "O número $numero é " . parOUimpar($numero) . ".";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Par ou Ímpar</title>
</head>

<body>

    <?php if ($resultado == "") { ?>

        <form method="post">

            <label>Digite um número:</label>

            <input type="number" name="numero" required>

            <br><br>

            <button type="submit">Verificar</button>

        </form>

    <?php } else { ?>

        <h2><?php echo $resultado; ?></h2>

    <?php } ?>
    <br><br>
    <a href="index.php">Voltar ao menu</a>

</body>

</html>