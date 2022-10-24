<?php include "./cabecalho.php"; ?>

    <h1>Lista de Produtos</h1>

    <table class="table table-dark table-hover table-borderless text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>UN.</th>
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
                <td>Descrição <?php echo $i; ?></td>
                <td>Quantidade<?php echo $i; ?></td>
                <td>Preço<?php echo $i; ?></td>
                <td>Tipo de Unidade<?php echo $i; ?></td>
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