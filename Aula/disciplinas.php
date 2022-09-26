<?php include "./cabecalho.php"; ?>

    <h1>Disciplinas</h1>

    <?php
        $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas"); // Pega o conteudo do site (no caso json)
        $dados = json_decode($dados, true); // Decodifica o json para virar array
        // echo "<pre>";
        // print_r($dados);
        // echo "</pre>";
    ?>

    <div class="row">
        <div class="col-10 offset-1">
            <table class="table table-dark table-striped text-center">
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
                        for($i = 0; $i < count($dados); $i++){
                    ?>

                        <tr>
                            <td><?php echo $dados[$i]["disciplinaId"]; ?></td>
                            <td><?php echo $dados[$i]["nome"]; ?></td>
                            <td><?php echo $dados[$i]["disciplinaId"]; ?></td>
                            <td><?php echo $dados[$i]["sigla"]; ?></td>
                            <td>
                                <a href="./editar_disciplina.php?id=<?php echo $dados[$i]["disciplinaId"];?>" class="btn btn-warning">
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