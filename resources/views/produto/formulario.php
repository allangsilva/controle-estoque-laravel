<html>
<head>
    
    <title>Novo Estoque</title>
    <?php include __DIR__.'/../layout/cabecalho.php'?>
</head>
<body>
    <div class="container">
        <?php include __DIR__.'/../layout/menu.php' ?>
    
        <h1>Novo produto</h1>
        <?php if( count($errors) > 0 ): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach( $errors->all() as $error ): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="/produtos/adiciona" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input name="nome" value="<?= old('nome') ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Descricao</label>
                <input name="descricao" value="<?= old('descricao') ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input name="valor" value="<?= old('valor') ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" value="<?= old('number') ?>" class="form-control"/>
            </div>
            <input type="hidden" name="_token" value="<?= csrf_token() ?>"/>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    
        <?php include __DIR__.'/../layout/rodape.php' ?>
    </div>
</body>
</html>