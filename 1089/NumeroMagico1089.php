<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
    <title>Número Mágico 1089</title>
</head>
<body>
    <header>
        <div id="cabeca">
            <h1>Números Mágicos</h1>
            <h2>Número 1089</h2>
        </div>
    </header>
    <div id="back"></div>
    <?php
        echo "
            <div id='exibeResult'>
                <p>Digite um número de 3 dígitos não repetidos em sequência</p>
                ".//Formulário para executar comando de entrada do programa
                "
                <form method='get'>
                    <p>Informe o número:
                    <input type='text' name='result' id='result'/>
                    <input type='submit' value='Verificar'>
                    </p>
                </form>
                <p>";
        $num = isset($_GET['result'])?$_GET['result']:null;
        //__________________________________________________________________
        //Validação da condição do número digitado para execução do programa 
        //__________________________________________________________________
        $num2 = str_split($num);//Função cria um array, em que cada posição deve conter um dígito do número
        if( $num2[0] == $num2[1] || $num2[1] == $num2[2]){//Valida o número para executar o programa
            //Verifica se existe números repetidos de forma sequencial
            echo "Informe um número válido";
        }elseif(count($num2) <= 2 || count($num2) > 3){//Valida o número para executar o programa
            //Verifica se o número foi digitado com 2 dígitos, ou mais de 3
            echo "Informe um número válido";
            //______________________________________________
            //Após validação do número, execução do programa
            //______________________________________________
        }elseif(count($num2) == 3){//Valida o número para executar o programa
            krsort($num2);//Ordenação das chaves mantendo a relação com os valores, de forma decrescente
            $num2 = implode($num2);//Junta todos os elementos do array em um único número
            echo "<p>Número digitado: $num, número invertido: $num2</p>";
            //Execução do passo 3
            $res = $num2 - $num;
            $res = str_split($res);
            if(count($res) == 2){//Verica se a quantidade de elementos do array é igual a 2
                array_unshift($res, '0');//Insere um ZERO no começo do array
                $res = implode($res);
            }elseif(count($res) == 1){
                array_unshift($res, '0', '0');
                $res = implode($res);
            }else{
                $res = implode($res);
            }
            echo "<p>Resultado da subtração: $num2 - $num = $res</p>";
            if($res < 0){//Caso o resultado seja negativo, converte o número para positivo
                $res = - ($res); 
            }
            //Execução do passo 4
            $res2 = str_split($res);
            krsort($res2);
            //Execução do passo 5
            $res2 = implode($res2);
            $res3 = $res2 + $res;
            //Execução do passo 6
            echo "<p>Resultado da soma entre $res e $res2 = $res3</p>";
        }
        echo "
            </p>
            </div>
            ";
    ?>
</body>
</html>

   