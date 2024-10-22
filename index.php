<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'funcoes.php'; ?>

    <form method="POST">
        <label > Primeiro Número: </label>
        <input type="text" name="num1" id="num1"/><br><br>

        <label>Segundo Número: </label>
        <input type= "text" name="num2"/><br><br>

        <button>calcular
            <?php
                $num1 = $_POST['num1'];//Coletar os Dados
                $num2 = $_POST['num2'];   
            ?> 
        </button><br><br>

        <textarea rows="10" cols="40" readonly fixed>
            <?php
               
                echo "\nA soma de ".$num1."com".$num2."é:".somar($num1,$num2);
                echo "\nA subtração de ".$num1. " com " .$num2." é: " .subtrair($num1,$num2);
                echo "\nA multiplicação de ".$num1. " com " .$num2." é: " .multiplicar($num1,$num2);
                echo "\nA divisão de ".$num1. " com " .$num2." é: " .dividir($num1,$num2);
                echo "\nA sequencia de numeros entre ".$num1. " e ".$num2." é: ".mostrarNumeros($num1,$num2);
                echo "\nA O numero digitado é: ".verificarNumeros($num1);
                echo "\nA tabuada do ".$num1." é:\n ".tabuada($num1);
                echo "\nO fatorial do numero digitado é " .fatorial($num1);
                echo "\nO resultado da potência e raiz do numero é " .pontenciaRaiz($num1); 
                echo "\nA ordem crescente é:" .crescente(num1:$num1,num2:$num2)."<br>";
            ?>
        </textarea>
    </form>
</body>
</html>