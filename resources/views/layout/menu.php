<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/produtos">
                        Estoque Laravel
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= action('ProdutoController@lista') ?>">Listagem</a></li>
                    <li><a href="<?= action('ProdutoController@novo') ?>">Novo</a></li>
                </ul>
            </div>
        </nav>