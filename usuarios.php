<?php
$titulo = "Novo Usuário";
include "./cabecalho.php";

include "./conexao.php";
$query = "select idusuarios, nome, login, ativo from usuarios";
$resultado = mysqli_query($conexao, $query);
?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Ativo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($resultado) ) {
        ?>
            <tr>
                <td><?php echo $linha["idusuarios"]; ?></td>
                <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["login"]; ?></td>
                <td>
                    <?php 
                        if($linha["ativo"] == 1){
                           ?>
                            <input type="text" disabled placeholder="Ativo" style="text-align: center;" style="width: 50px;">
                            <?php
                        } else {
                            ?>
                            <input type="text" disabled placeholder="Inativo" style="width: 50px;">
                            <?php
                        }
                    ?>
                    </td>
                <td>
                    <a href="./usuariosEdit.php" class="btn btn-warning">Editar</a>
                    <a href="./usuariosDelete" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
include "./rodape.php";
?>