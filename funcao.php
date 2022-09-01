

<?php 
    //função break
    function quebraLinha(){
        echo "<br>";
    }

    //função para imprimir na tela
    function imprimirTexto($texto){
        echo $texto;
        quebraLinha();
    }

    //função adição
    function adicao($numero1,  $numero2){
        return($numero1 + $numero2);
    }

    //função média
    function media($numero1, $numero2){
        return adicao($numero1, $numero2)/2;
    }

    //função subtração
    function subtracao($numero1, $numero2){
        return $numero1 - $numero2;
    }

    //função divizão
    function divizao($numero1, $numero2){
        return $numero1 / $numero2;
    }

    //função multiplicacao
    function multiplicacao($numero1, $numero2){
        return $numero1 * $numero2;
    }

    //função resto divizão n1 por 2 (par inpar)
    function resto($numero1){
         return $numero1 % 2;
    }

    //função
    $resultado = 0;

    function lendariaCalculadora($numero1, $numero2, $operacao){
        if ($operacao == "+"){
            $resultado = adicao($numero1, $numero2);
        } else if($operacao == "-") {
            $resultado = subtracao($numero1, $numero2);
        } else if($operacao == "/") {
            $resultado = divizao($numero1, $numero2);
        } else if($operacao == "*") {
            $resultado = multiplicacao($numero1, $numero2);
        } else if($operacao == "m") {
            $resultado = resto($numero1, $numero2);
        } else if($operacao == "r") {
            $resultado = media($numero1, $numero2);
        } else {
            $resultado = "Não válido";
        }
        
        imprimirTexto($resultado);
    }
    
    lendariaCalculadora(20, 10, "+");
    lendariaCalculadora(20, 10, "-");
    lendariaCalculadora(20, 10, "/");
    lendariaCalculadora(20, 10, "*");
    lendariaCalculadora(20, 10, "m");
    lendariaCalculadora(20, 10, "r");
    lendariaCalculadora(20, 10, "seilá");

    quebraLinha();

    imprimirTexto(adicao(10, 12));
    imprimirTexto("Média 8 e 7". media(8, 7));
    imprimirTexto(subtracao(10, 5));
    imprimirTexto(divizao(10, 2));
    imprimirTexto(multiplicacao(10, 2));
    imprimirTexto(resto(10, 2));

    imprimirTexto("Minha chamada da função");
    imprimirTexto("2º");
    imprimirTexto("Terceira");
    imprimirTexto("Quarta vez que eu chamo");
    imprimirTexto("Ultima chamada");


?>

<body>
    <a href="index.php"><strong>VOLTAR</strong></a>
</body>