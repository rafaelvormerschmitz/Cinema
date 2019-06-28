<div class="container mt-3">
    <div class="row">
        <div class="col-md-5 col-xs-12">
            <?php
            $mensagem = $this->session->flashdata('mensagem');
            echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
            ?>  
            <?php echo validation_errors(); ?>
            <div class='card'>
                <div class="card-header">
                    <h2 id="label-form"><i class="fas fa-edit"></i>Cadastro de Filmes</h2>
                </div>
                <div class='card-body'>
                    <form action = "" method = "post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= (isset($administracao)) ? $administracao->id_filme : ''; ?>">

                        <div class="form-group">
                            <label for="tx_nome"> Nome:</label>
                            <input type="text" name="tx_nome"  class="form-control" id="tx_nome" value="<?= (isset($administracao)) ? $administracao->tx_nome : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="sp_sinopse"> Sinopse:</label>
                            <input type="text" name="sp_sinopse"  class="form-control" id="sp_sinopse" value="<?= (isset($administracao)) ? $administracao->sp_sinopse : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="tx_duracao"> Duração:</label>
                            <input type="text" name="tx_duracao"  class="form-control" id="tx_duracao" value="<?= (isset($administracao)) ? $administracao->tx_duracao : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="classificacao"> Classificação:</label>
                            <input type="text" name = "classificacao"  class="form-control" id="classificacao" value="<?= (isset($administracao)) ? $administracao->classificacao : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="tx_companhia"> Companhia:</label>
                            <input type="text" name="tx_companhia"  class="form-control" id="tx_companhia" value="<?= (isset($administracao)) ? $administracao->tx_companhia : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="tx_genero"> Gênero:</label>
                            <input type="text" name="tx_genero"  class="form-control" id="tx_genero" value="<?= (isset($administracao)) ? $administracao->tx_genero : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="tx_status"> Status do Filme:</label>
                            <input type="text" name="tx_status"  class="form-control" id="tx_status" value="<?= (isset($administracao)) ? $administracao->tx_status : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="tx_diretor"> Diretor:</label>
                            <input type="text" name="tx_diretor"  class="form-control" id="tx_diretor" value="<?= (isset($administracao)) ? $administracao->tx_diretor : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="atores"> Atores:</label>
                            <input type="text" name="atores"  class="form-control" id="atores" value="<?= (isset($administracao)) ? $administracao->atores : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for = "imagem"> Imagem:</label>
                            <input type="file" name="imagem"  class="form-control" id="imagem" value="">
                        </div>
                        
                        <div class="form-group">
                            <label for="trailer"> Trailer:</label>
                            <input type="text" name="trailer"  class="form-control" id="trailer" Placeholder="Link do Filme" value="<?= (isset($administracao)) ? $administracao->trailer : ''; ?>">
                        </div>

                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                        <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo"></i> Limpar</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>