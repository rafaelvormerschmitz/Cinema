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
                    Cadastro de Filmes
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">                
                        <li class="nav-item dropdown">
                            <a href="#" id="menuProva" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Filmes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menuadministracao">
                                <a href="<?= $this->config->base_url() . 'administracao/listar'; ?>" class="dropdown-item">Listar</a>
                                <a href="<?= $this->config->base_url() . 'administracao/cadastrar'; ?>" class="dropdown-item">Cadastrar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <br>