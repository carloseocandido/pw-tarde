<?php include "./cabecalho.php"; ?>

    <h1>Lista de Clientes</h1>
    <table class="table table-dark table-hover table-borderless text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Telefone</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 0; $i < 10; $i++) {
        ?>
            <tr>
                <td><?php echo $i; ?></th>
                <td>Nome <?php echo $i; ?></td>
                <td>Rua<?php echo $i; ?></td>
                <td>Número<?php echo $i; ?></td>
                <td>Tel<?php echo $i; ?></td>
                <td>
                    <a class="btn btn-warning" href="#" role="button">Editar</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="#" role="button">Excluir</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>

<?php include "./rodape.php"; ?>