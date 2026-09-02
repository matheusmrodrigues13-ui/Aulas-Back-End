<?php

function Soma($a, $b)
{
    return $a + $b;
}

function AreaDoCirculo($raio)
{
    return pi() * ($raio * $raio);
}

function CelsiusParaFahrenheit($celsius)
{
    return ($celsius * 9 / 5) + 32;
}

function tabuada($numero)
{
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
}

function calcularDesconto($preco, $desconto)
{
    return $preco - ($preco * ($desconto / 100));
}

function calcularIMC($peso, $altura)
{
    return $peso / ($altura * $altura);
}

function maiorEMenor($num1, $num2)
{
    if ($num1 > $num2) {
        return "$num1 é maior que $num2";
    } elseif ($num1 < $num2) {
        return "$num2 é maior que $num1";
    } else {
        return "Os números são iguais.";
    }
}

function parOUimpar($num)
{
    if ($num % 2 == 0) {
        return "par";
    } else {
        return "ímpar";
    }
}

function mediaAritmetica($num1, $num2, $num3)
{
    return ($num1 + $num2 + $num3) / 3;
}

function fatorial($num)
{
    if ($num < 0) {
        return "Número não pode ser negativo.";
    } elseif ($num == 0 || $num == 1) {
        return 1;
    } else {
        $resultado = 1;

        for ($i = 2; $i <= $num; $i++) {
            $resultado *= $i;
        }

        return $resultado;
    }
}

?>