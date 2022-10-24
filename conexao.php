<?php
    $servidor = "";
    $usuario = "root";
    $senha = "";
    $DB= "pwtarde";

    $conexao = mysqli_connect($servidor) or die("Erro na Conexão");

    mysqli_select_db($conexao, $DB);
?>