<?php include "./cabecalho.php"; ?>

<div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">Usuários</div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <button type="button" class="btn btn-success">Novo Usuário</button>
            </div>
            <div class="col-2">
                <select name="opcao" id="" class="form-control">
                    <option selected ="selected" value="0">Todos</option>
                    <option value="1">Por Nome</option>
                    <option value="2">Por Código</option>
                </select>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" name="pesquisar">
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-secondary">Pesquisar</button>
            </div>
        </div>
    </div>
</div>

<table class="table table-dark table-hover table-borderless text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Editar/Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 0; $i < 10; $i++) {
        ?>
            <tr>
                <td><?php echo $i; ?></th>
                <td>Nome <?php echo $i; ?></td>
                <td>email.<?php echo $i; ?>@fatec.sp.gov.br</td>
                <td>
                    <a class="btn btn-warning me-12" href="#" role="button">Editar</a> 
                    <a class="btn btn-danger" href="#" role="button">Excluir</a>
                </td>
                
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>

<?php include "./rodape.php"; ?>