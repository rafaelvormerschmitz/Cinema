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
                    <h2 id="label-form"><i class="fas fa-edit"></i>Cadastro de Ingressos</h2>
                </div>
                <div class='card-body'>
                    <form action=""method="post" enctype="multipart/form-data"> 
                        <input type="hidden" name="id" value="<?= (isset($ingresso->id_ingresso)) ? $ingresso->id_ingresso : ''; ?>">

                        <div class="form-group">
                            <label for="tx_status"> Status do Ingresso:</label>
                            <input type="text" name="tx_status"  class="form-control" id="tx_status" value="<?= (isset($ingresso->tx_status)) ? $ingresso->tx_status : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="vl_ingresso"> Valor do Ingresso:</label>
                            <input type="text" name="vl_ingresso"  class="form-control" id="vl_ingresso" value="<?= (isset($ingresso->vl_ingresso)) ? $ingresso->vl_ingresso : ''; ?>">
                        </div>

                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                        <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo"></i> Limpar</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  