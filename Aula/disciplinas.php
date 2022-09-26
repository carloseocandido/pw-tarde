<?php include "./cabecalho.php"; ?>

<h1 class="text-center mt-3">Disciplinas</h1>

<?php

if (isset($_GET["pesquisa"]) && !empty($_GET["pesquisa"])) {
    $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas/busca/".urlencode($_GET["pesquisa"])); // Pega o conteudo do site (no caso json)
    $dados = json_decode($dados, true); // Decodifica o json para virar array
} else {
    $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas"); // Pega o conteudo do site (no caso json)
    $dados = json_decode($dados, true); // Decodifica o json para virar array
}
// echo "<pre>";
// print_r($dados);
// echo "</pre>";
?>

<div class="row">
    <div class="col-10 offset-1">
        <div class="card mt-3 card text-white bg-dark mb-3">
            <div class="card-header">Pesquisar Disciplinas</div>
            <div class="card-body">
                <form action="./disciplinas.php" method="get">
                    <div class="row">
                        <!-- Abertura da row -->
                        <div class="col-2">
                            <a href="" class="btn btn-success">
                                Nova Disciplina
                            </a>
                        </div>
                        <div class="col-4">
                            <input type="text" name="pesquisa" class="form-control" placeholder="Digite aqui">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary">Pesquisar</button>
                        </div>
                    </div> <!-- Fechamento row -->
                </form>
            </div>
        </div>

        <table class="table table-dark table-striped text-center table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Sigla</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php
                for ($i = 0; $i < count($dados); $i++) {
                ?>

                    <tr>
                        <td><?php echo $dados[$i]["disciplinaId"]; ?></td>
                        <td><?php echo $dados[$i]["nome"]; ?></td>
                        <td><?php echo $dados[$i]["disciplinaId"]; ?></td>
                        <td><?php echo $dados[$i]["sigla"]; ?></td>
                        <td>
                            <a href="./editar_disciplina.php?id=<?php echo $dados[$i]["disciplinaId"]; ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</div>

<?php include "./rodape.php"; ?>