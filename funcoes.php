<?php
    $num1 = 0;
    $num  = 0;

    function somar($num1, $num2){
        return $num1 + $num2;
    }//fim do método

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fimmdo método 
    
    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fimmdo método 

    function dividir($num1, $num2){
        if($num2 > 0){
            return $num1 / $num2;
        }else{
            return "Impossivel dividir por zero!";
        }
        
    }//fimmdo método 

    function mostrarNumeros($num1, $num2){
        $resultado ="";
        for($i=$num1; $i <= $num2; $i++){
            $resultado .= "\n". $i;
        }//Fim do for 
        return $resultado;

    }//Fim do método  

    function verificarNumeros($num){
        if($num < 0){
            return "O ".$num." é Negativo";
        }else if($num > 0){
            return "O ".$num." é Positivo";
        }else{
            return "O ".$num." é zero";            
        }        
    }//Fim do metodo 

    function tabuada($num){
        $resultado = "";
        for($i = 0; $i <= 10; $i++){
            $resultado .= "\n" .$num1." * ".$i." = ".($num1 * $i);
        }
        return $resultado;
         
    }

    function fatorial($num1){
        $resultado = 1;

        if ($num1 < 0){
            return "Impossivel calcular fatorial negativo ";

        }

        for ($i = 1; $i <= $num1; $i++){
            $resultado *= $i;
        }
        return $resultado;
    }

    function potenciaRaiz($num1){
        $resultado = 1;
        if($num1 < 0){
            return "Impossivel calcular fatorial negativo";
        }

        for($i= 1; $i <= $num1; $i ++ ){
            $resultado *= $i;
        }
        return $resultado
    }

    function parimpar($num1){
        if ($num1 %2 == 0){
            return "par";
           
        }else{
            return "impar";
        }
 
    }

    function crescente($num1,$num2){
        if($num1 > $num2){
            return "$num2,$num1";
        }else{
            return "$num1,$num2";
            }
               
    }

    function vogais($str){
        $cont = strlen($str);
        $contar = 0;
        $verificar = "";
        for($i=0;$i<$cont;$i++){
            $verificar = substr($str, $i, 1);
            if(($verificar == 'a') || ($verificar == 'e') ||($verificar == 'i') || ($verificar == '0') || ($verificar == 'u')){
                $contar++;
            }
        }//fim do for
        return "\nExistem " .$contar." vogais na palavra!";
    }//fim do metodo 


        


?>