<?php 
    // Declarar duas variáveis numéricas

    $x = 10;
    $y = 0;

    // Realizar operações com variáveis

    $soma = $x + $y;
    $sub = $x - $y;
    $mult = $x * $y;
    if($y != 0)
        $div = $x / $y;
    else
        $div = "Não existe divisão por zero";

    // Exibir os resultados

    echo "<p>X = " . $x;
    echo "<p>Y = " . $y;
    echo "<p>Soma = " . $soma;
    echo "<p>Diferença = " . $sub;
    echo "<p>Multiplicação = " . $mult;
    echo "<p>Divisão = " . $div;

?>