<?php include "./cabecalho.php"; ?>

    <h1>Editar</h1>

    <?php
        $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas/byId/".$_GET["id"]); // Pega o conteudo do site (no caso json)
        $dados = json_decode($dados, true); // Decodifica o json para virar array
        // echo "<pre>";
        // print_r($dados);
        // echo "</pre>";
    ?>

    <div class="row">
        <div class="col-4 offset-4">
            <form action="">
                <div class="form-group">
                    <label for="">ID da Disciplina</label>
                    <input type="text" name="id" class="form-control" value="<?php echo $dados["disciplinaId"];?>" readonly/>
                </div>
                <div class="form-group">
                    <label for="">Nome da Disciplina</label>
                    <input type="text" name="nome" class="form-control" value="<?php echo $dados["nome"];?>"/>
                </div>
                <div class="form-group">
                    <label for="">Apelido da Disciplina</label>
                    <input type="text" name="apelido" class="form-control" value="<?php echo $dados["apelido"];?>"/>
                </div>
                <div class="form-group">
                    <label for="">Sigla da Disciplina</label>
                    <input type="text" name="sigla" class="form-control" value="<?php echo $dados["sigla"];?>"/>
                </div>
            </form>
        </div>
    </div>

<?php include "./rodape.php"; ?>