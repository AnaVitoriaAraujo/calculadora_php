<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="POST">
        <?php include 'funcoes.php';?>
        <?php include 'bhaskara.php';?>

    <label>Número 01: </label>
    <input type="number" id="num1" name="num1"/> <br><br>

    <label>Número 02: </label>
    <input type="number" id="num2" name="num2"/>
    <br>
    <label>Número 03: </label>
    <input type="number" id="num3" name="num3"/>
    <br>
    <button> calcular
        <?php 
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num2 = $_POST['num3'];
        ?>
    
    </button> <br>
    
    <br><br>
    <!-- Area de texto -->
    <textArea rows="15" cols="70" readonly fixed>

    <?php
        echo somar($num1, $num2);
        echo subtrair($num1, $num2);
        echo divisao($num1 , $num2);
        echo multiplicacao($num1 , $num2);
        echo raiz($num1, $num2);
        echo potencia($num1, $num2);
        echo tabuada($num1, $num2);
        echo baskara ($num1, $num2);

    ?>
    </textArea>
    </form>


</body>
</html>