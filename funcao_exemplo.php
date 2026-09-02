<?php 
function nomeDafuncao($parametro1, $parametro2){
    $resultado = $parametro1 + $parametro2;
    return $resultado;
}

$soma = nomeDafuncao(5, 10);
echo "O resultado da soma é: $soma";
?>
