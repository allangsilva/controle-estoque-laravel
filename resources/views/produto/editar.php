<html>
<head>
    
    <title>Editar Produto</title>
    <?php include __DIR__.'/../layout/cabecalho.php'?>
</head>
<body>
    <div class="container">
        <?php include __DIR__.'/../layout/menu.php' ?>
    
        <h1>Editar</h1>
        <form action="/produtos/salvar" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input name="nome" value="<?= $p->nome ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Descricao</label>
                <input name="descricao" value="<?= $p->descricao ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input name="valor" value="<?= $p->valor ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" value="<?= $p->quantidade ?>" class="form-control"/>
            </div>
            <input type="hidden" name="_token" value="<?= csrf_token() ?>"/>
            <input type="hidden" name="id" value="<?= $p->id ?>"/>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    
        <?php include __DIR__.'/../layout/rodape.php' ?>
    </div>
</body>
</html>