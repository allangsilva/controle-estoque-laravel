<html>
<head>
    
    <title>Controle de estoque</title>
    <?php include __DIR__.'/../layout/cabecalho.php'?>
</head>
<body>
    <div class="container">
        <?php include __DIR__.'/../layout/menu.php' ?>
    
        <h1>Detalhes do produto: <?= $p->nome ?> </h1>
        <ul>
            <li>
              <b>Valor:</b> R$ <?= $p->valor ?>
            </li>
            <li>
              <b>Descrição:</b> <?= $p->descricao ?>
            </li>
            <li>
              <b>Quantidade em estoque:</b> <?= $p->quantidade ?>
            </li>
        </ul>
    
        <?php include __DIR__.'/../layout/rodape.php' ?>
    </div>
</body>
</html>