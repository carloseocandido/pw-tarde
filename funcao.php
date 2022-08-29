<?php 

    function quebraLinha(){
        echo "<br>";
    }

    function imprimirTexto($texto){
        echo $texto;
        quebraLinha();
    }
    function adicao($numero1,  $numero2){
        imprimirTexto($numero1 + $numero2);
    }
    function media($numero1, $numero2){
        imprimirTexto(adicao($numero1, $numero2)/2);
    }
    adicao(10, 12);

    imprimirTexto("Minha chamada da função");
    imprimirTexto("2º");
    imprimirTexto("Terceira");
    imprimirTexto("Quarta vez que eu chamo");
    imprimirTexto("Ultima chamada");


?>

<body>
    <a href="index.php"><p>VOLTAR<p></a>
</body>