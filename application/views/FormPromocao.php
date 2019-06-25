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
                    <h2 id="label-form"><i class="fas fa-edit"></i>Cadastro de Promoções</h2>
                </div>
                <div class='card-body'>
                    <form action=""method="post" enctype="multipart/form-data"> 
                        <input type="hidden" name="id" value="<?= (isset($promocao->id_promocao)) ? $promocao->id_promocao : ''; ?>">

                        <div class="form-group">
                            <label for="descricao"> Descrição da Promoção:</label>
                            <input type="text" name="descricao"  class="form-control" id="descricao" value="<?= (isset($promocao->descricao)) ? $promocao->descricao : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="valor"> Valor da Promoção:</label>
                            <input type="text" name="valor"  class="form-control" id="valor" value="<?= (isset($promocao->valor)) ? $promocao->valor : ''; ?>">
                        </div>

                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                        <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo"></i> Limpar</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  