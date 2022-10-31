<?php
$titulo = "Editar Usuário";
include "./cabecalho.php";
include "./conexao.php";

if(isset($_POST) && !empty($_POST)){
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha =  hash("sha512", $_POST["senha"]);
    if(isset($_POST["ativo"]) && $_POST["ativo"] == "on"){
        $ativo = 1;
    } else {
        $ativo = 0;
    }

    $query = "update usuarios set nome = '$nome', login= '$login', ativo = $ativo where idusuarios = $id";
    $resultado = mysqli_query($conexao, $query);
    if($resultado){
        header("Location: usuarios.php?sucesso=Editado com sucesso");
    } else {
        ?>
        <div class="alert alert-danger">
            Ocorreu algum erro ao editar!
        </div>
        <?php
    }
}

if(isset($_GET["id"]) && !empty($_GET["id"])){
    $query = "select idusuarios, nome, login, ativo from usuarios where idusuarios=".$_GET["id"];
    $resultado = mysqli_query($conexao, $query);
    $dados = mysqli_fetch_array($resultado);

    // echo "<pre>";
    // print_r($dados);
    // echo "</pre>";
$id = $dados["idusuarios"];
$nome = $dados["nome"];
$login = $dados["login"];
$ativo = $dados["ativo"];
}

?>

<div class="row">
    <div class="offset-4 col-md-4">
        <h2>Cadastro de usuário</h2>
        <form action="./usuarioEditar.php?id=<?php echo $id; ?>" method="post">

              <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" readonly value="<?php echo $id; ?>"/>
            </div>
            

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>"/>
            </div>
            
            <div class="form-group">
                <label>Login</label>
                <input type="text" name="login" class="form-control" value="<?php echo $login; ?>"/>
            </div>

            <div class="form-group">
                Ativo 
                <?php
                    if($ativo == 1){
                        ?>
                        <input type="checkbox" name="ativo" class="form-check" checked >
                        <?php
                    } else {
                        ?>
                        <input type="checkbox" name="ativo" class="form-check" >
                        <?php
                    }
                ?>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    Salvar Usuário
                </button>
            </div>

        </form>
    </div>
</div>



<?php include "./rodape.php"; ?>