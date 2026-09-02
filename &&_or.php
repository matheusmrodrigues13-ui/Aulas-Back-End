<?php
$a = true;
$b = false;
if ($a && $b) {
    echo "Uma das variáveis é verdadeira";
} else {
    echo "Uma das variáveis é falsa";
}

if ($a || $b) {
    echo "<br>Uma das variáveis é verdadeira";
} else {
    echo "<br>As duas variáveis são falsas";
}
