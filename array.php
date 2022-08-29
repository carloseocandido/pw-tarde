<?php
    /*
    //Array
    $carros = array();
    //           0      1        2         3
    $carros = ["BMW", "Gol", "Saveiro", "Hylux"];


    echo $carros[2];

    echo "<ul>";
    for($i = 0; $i < count($carros); $i++){
        echo "<br> $carros[$i]";
    }

    echo "</ul>";

    echo "<pre>";
    print_r($carros);
    echo "</pre>";


    //OUTROS
    $nomes = array("Fernando", "Isabela", "Sabrina", "Renato");
    echo "<pre>";
    print_r($nomes);
    echo "</pre>";

    echo $nomes[3];

    $nomes[567] = "Carlos";

    array_push($nomes, "Bruno");

    echo "<pre>";
    print_r($nomes);
    echo "</pre>";

    $nomes[4] = "Gabriela";
    echo "<pre>>";
    print_r($nomes);
    echo "</pre>";

    array_push($nomes, "Jubileu");
    echo "<pre>";
    print_r($nomes);
    echo "</pre>";

    $carros["Eletricos"] = "Tesla";
    echo "<pre>";
    print_r($carros);
    echo "</pre>";
     */



    //EXEMPLO EM UMA TABELA(DATABASE)
    $cadastro = array();
    $pessoa1 = array("Id" => 1, "Nome" => "Fer", "CPF" => "000.000.000-01");
    $pessoa2 = array("Id" => 2, "Nome" => "Sa", "CPF" => "000.000.000-02");
    $pessoa3 = array("Id" => 3, "Nome" => "Bruno", "CPF" => "000.000.000-03");

    $cadastro["Cliente"] = $pessoa1;
    //array_push($cadastro, $pessoa1);
    array_push($cadastro, $pessoa2);
    array_push($cadastro, $pessoa3);

    echo "<pre>";
    print_r($cadastro);
    echo "</pre>";




?>