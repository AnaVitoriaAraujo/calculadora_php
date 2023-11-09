<?php

        function baskara($num1, $num2, $num3){
        $delta = ($num2 * $num2) - (4 * $num1 * $num3);
        if($delta < 0){
        echo "\nDelta é menor que 0, portanto não há raízes" . "";
        echo "\nValor do Delta: $delta";
        }
        elseif($delta == 0){
        echo "\nDelta é igual à 0, portanto as raízes são iguais:" . "

        ";
        $x = (-($num2)) / (2 * $num1);
        echo "x': $x
        x'': $x" . "

        ";
        echo "\nValor do Delta: $delta";
        }
        else{ echo "\nDelta é maior que 0, portanto há duas raízes diferentes:" . "

        ";
        $x1 = intval( -($num2) + sqrt($delta) / 2 * $num1);
        $x2 = intval(-($num2) - sqrt($delta) / 2 * $num1);
        echo "x': $x1
        x'': $x2" . "

        ";
        echo "\nValor do Delta: $delta";
        }
        }

?>

