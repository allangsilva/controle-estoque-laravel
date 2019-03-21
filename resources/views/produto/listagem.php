<html>
<head>
    
    <title>Controle de estoque</title>
    <?php include __DIR__.'/../layout/cabecalho.php'?>
</head>
<body>
    <div class="container">
        <?php include __DIR__.'/../layout/menu.php' ?>
    
        <h1>Listagem de produtos</h1>
        <table class="table table-bordered table-hover">
            <?php foreach ($produtos as $p): ?>
            <?php
                $classe = "";
                if( $p->quantidade <= 1) $classe = "alert alert-danger";
            ?>
            <tr class="<?= $classe ?>">
                <td><?= $p->nome ?> </td>
                <td><?= $p->valor ?> </td>
                <td><?= $p->descricao ?> </td>
                <td><?= $p->quantidade ?> </td>
                <td>
                    <a href="<?= action('ProdutoController@mostra', $p->id) ?>"><b>Visualizar</b></a>
                    <a href="<?= action('ProdutoController@editar', $p->id) ?>"><b>Editar</b></a>
                    <a href="<?= action('ProdutoController@remove', $p->id) ?>"><b>Deletar</b></a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>

        <?php if( old('nome') !== null ): ?>
            <div class="alert alert-success">
                <strong>Sucesso!</strong> O produto <?= old('nome') ?> foi adicionado!
            </div>
        <?php endif ?>
    
        <?php include __DIR__.'/../layout/rodape.php' ?>
    </div>
</body>
</html>
