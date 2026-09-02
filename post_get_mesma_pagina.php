<form method="post" action="post_get_mesma_pagina.php">
    cor:<br>
    <input type="text" name="cor" value=""> <br>

    tipo:<br>
    <input type="text" name="tipo" value=""> <br>

    <br> <input type="submit" value="Cadastrar">

</form>

<?php
    $cor= $_POST['cor'] ?? "";
    $tipo= $_POST['tipo'] ?? "";
    $produto = $_GET['produto'] ?? "(Não selecionado)";
    
    if(isset($_POST["cor"]) && !empty($_POST[
        "cor"])){
        echo"A cor do $produto é $cor do tipo $tipo";
    }

?>