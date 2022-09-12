
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Aula 02</title>
</head>

<body>
    <form action="array.php">
        <label for="array"><h3>Array</h3></label>
        <input type="submit" id="array" name="array" value="Abrir array">
    </form>
    <form action="funcao.php">
        <label for="funcao"><h3>Função</h3></label>
        <input type="submit" id="funcao" name="funcao" value="Abrir função">
    </form>
    <form action="ex001.php">
        <label for="ex001"><h3>ex001</h3></label>
        <input type="submit" id="ex001" name="ex001" value="Abrir ex001">
    </form>
    <?php
        #Comentario
        //Cometario
        /*Comentario*/

        //Imprimir na tela com tags html
       echo "<h1>Minha mensagem!</h1><br>";

       //Variavel
        $nome = "Carlos";
        $idade = 24;
        $pobre = true;

        $prova1 = 10;
        $prova2 = 10;
        
       echo "<p>Oi $nome, sua idade é $idade você é <b>$pobre</b>.</p>";

       //Constante 
       const nomeCompleto = "Carlos Emanuel de Oliveira Candido!";

       echo nomeCompleto;

       $nota1 = 5;
       $nota2 = 7.5;
       $resultado = ($nota1+$nota2)/2;


       if($resultado>=6){
           echo "<p>Aprovado</p>";
       } else {
       echo "<p>Reprovado</p>";
       }


       //Repetição While
       $cont = 0;
       do{
           //faça
           $cont++;
           echo $cont."<br>";

       }while($cont<5);

       "<br><br>";

       $cont = 0;
       while($cont<5){
            echo $cont++. "<br>";
       }
        
       //Contatenar variavel e string "."
        echo "<p>".nomeCompleto."</p>";

        //Repetição for

        for($i=0;$i<10;$i++){
            echo "<b>For i:".$i."</b><br>";
        }
        /*
        for($i=1;$i<=5197;$i++){
            if($i%2==0){
                echo "<p>".$i."</p>&nbsp";
            }
        }
        */

    ?>

    
</body>

<script type="text/javascript">
buttonGetElemteById("button")</script>
<footer>

</footer>
</html>