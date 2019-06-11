<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-light navbar-expand-md">
                <a class="navbar-brand" href="<?= $this->config->base_url(); ?>">
                    <i class="fas fa-home"></i>
                    Cinema
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">                
                        <li class="nav-item dropdown">
                            <a href="#" id="menuFilme" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Filmes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menuFilme">
                                <a href="<?= $this->config->base_url() . 'administracao/listar'; ?>" class="dropdown-item">Listar</a>
                                <a href="<?= $this->config->base_url() . 'administracao/cadastrar'; ?>" class="dropdown-item">Cadastrar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" id="menuIngresso" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Ingressos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menuingresso">
                                <a href="<?= $this->config->base_url() . 'ingresso/listar'; ?>" class="dropdown-item">Listar</a>
                                <a href="<?= $this->config->base_url() . 'ingresso/cadastrar'; ?>" class="dropdown-item">Cadastrar</a>
                            </div>
                        </li>             
                        <li class="nav-item dropdown">
                            <a href="#" id="menuCliente" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Clientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menuCliente">
                                <a href="<?= $this->config->base_url() . 'clientes/listar'; ?>" class="dropdown-item">Listar</a>
                                <a href="<?= $this->config->base_url() . 'clientes/cadastrar'; ?>" class="dropdown-item">Cadastrar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <br>