<?php
if(isset($_GET["id"]) && !empty($_GET["id"])){
    include "conexao.php";
    $query = "delete from usuarios where idusuarios = ".$_GET['id'];
    $resultado = mysqli_query($conexao, $query);
    if($resultado){
        header("location: usuarios.php?sucesso=Excluido com sucesso");
        exit();
    } else {
        header("location: usuarios.php?erro=Ocorreu algum erro ao excluir");
        exit();
    }
} else {
    header("location: usuarios.php?erro=Selecione o usuario para excluir");
    exit();
}
?>