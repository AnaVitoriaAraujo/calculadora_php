    <?php
           function somar($num1, $num2){
            $se = "\nA soma de é ";
            $soma = $num1 + $num2;
            return $se.$soma;
        }
       
        function subtrair($num1, $num2){
            $subi = "\nA subtração é de ";
            $sub = $num1 - $num2;
            return $subi.$sub;
        }

        function divisao($num1, $num2){
            $di="\nA divisao é ";
            if($num2 != 0){
                $divi = $num1 / $num2;
            }else{
                $divi = "Impossivel dividir por zero";
            }
            return $di.$divi;
        }

        function multiplicacao($num1, $num2){
            $mu="\nA multiplicação é de ";
            $mult = $num1 * $num2;
            return $mu.$mult;
        }

        function potencia($num1 , $num2){
           return "\nA potencia de $num1 elevado a $num2 é:" .pow($num1, $num2);
        }

        function raiz($num1){
            return "\nA raiz de $num1 é: ".sqrt($num1);
        }

        function tabuada($num1){
            $su="\nA tabuada é de: ";
            $msg="";
            for($i=0; $i <=10; $i++){
                $msg.="\n$i * $num1 = ".($i + $num1);
            }//fim do for
            return $su.$msg;
        }//fim da tabuada

    ?>

