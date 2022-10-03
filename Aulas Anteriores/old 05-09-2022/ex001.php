
<?php
/*
-)Crie uma variável e atribua um array com os seguintes itens : 20, 15, 30, 17, 8 

-)Faça uma função que imprima o array do primeiro exercício.

-)Crie uma função que some todos os itens do array do exercício 1;

-)Utilizando o For imprima a tabuada do 144.

-)Exiba na tela todos os itens pares de 251 de 544.

-) Adicione 3 novos itens no array do exercício 1 usando a função rand(-10,10).

-)Faça uma função que receba a porcentagem e um numero e calcule a porcentagem desse numero.

-)Exiba na tela a quantidade de pares, impares, negativos e positivos do array do exercício 1

-)Calcule a média do array do exercício 1
*/

    //EX1
    $numeros = array(20, 15, 30, 17, 8);
    echo "Nuemros <ul>";
    
    echo "</ul>";

    //EX2
    function ex2($numeros){
        echo "<pre>";
        print_r($numeros);
        echo "</pre>";
        }

    ex2($numeros);

    //EX3
    function ex3($numeros){
        $aux = 0;
        for($i=0; $i < count($numeros); $i++){
            $aux = $aux+$numeros[$i];
            
        }
        return $aux;
    }
    echo ex3($numeros);
    echo '<br>';
    //Ex4
    $tabuada = 0;
    for($i=0; $i < 11; $i++){
        $tabuada = 144*$i;
        echo "144 x ".$i.": ".$tabuada."<br>";
    }

    //EX5
    for($i=251; $i <= 544; $i++){
        if($i % 2 == 0){
            echo ' '.$i;
        }
    }

    //EX6
    $numeros[5] = rand(-10, 10);
    $numeros[6] = rand(-10, 10);
    $numeros[7] = rand(-10, 10);
    ex2($numeros);

    //EX7
    $num1 = 0;
    $num2 = 0;
    function porc($num1, $num2){
        return $num1 = $num1 * ($num2/100);
    }
    echo porc(50, 50);

    //8
    $pares = 0;
    $inpares = 0;
    $negativos = 0;
    $positivos = 0;
    for($i=0; $i < count($numeros); $i++){
        if($numeros[$i] % 2 == 0){
            $pares++;
        } else {
            $inpares++;
        }
        if($numeros[$i] < 0){
            $negativos++;
        }
        if($numeros[$i] > 0){
            $positivos++;
        }
    }

    echo '<br>'.$pares.'pares<br>';
    echo $inpares.'inpares<br>';
    echo $negativos.'negativos<br>';
    echo $positivos.'positivos<br>';

    //9
    $aux = 0;
    $res = 0;
    for($i=0; $i < count($numeros); $i++){
        $aux = $aux + $numeros[$i];
    }
    $res = $aux/8;
    echo 'Resultado da média é: '.$res;
?>
<body>
    <br>
    <a href="exercicios.php"><strong>VOLTAR</strong></a>
</body>
