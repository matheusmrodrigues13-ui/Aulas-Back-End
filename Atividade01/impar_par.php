<?php
$num1 = $_POST["num1"];
function parOuimpar ($num){
    if ($num % 2 == 0){
        return "Par";
    } else {
        return "Ímpar";
    }
}
echo(parOuImpar($num1));
?>