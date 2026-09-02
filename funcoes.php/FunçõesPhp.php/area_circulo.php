<?php

require_once "funcao.php";

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $raio = (float) $_POST["raio"];

    if ($raio <= 0) {

        $resultado = "Digite um raio válido.";

    } else {

        $area = AreaDoCirculo($raio);

        $resultado = "A área do círculo é: "
            . number_format($area, 2, ",", ".");
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Área do Círculo</title>
</head>

<body>

    <?php if ($resultado == "") { ?>

        <form method="post">

            <label>Digite o raio do círculo:</label>

            <input type="number" step="0.01" name="raio" min="0" required>

            <br><br>

            <button type="submit">Calcular Área</button>

        </form>

    <?php } else { ?>

        <h2><?php echo $resultado; ?></h2>

    <?php } ?>
    <br><br>
    <a href="index.php">Voltar ao menu</a>

</body>

</html>