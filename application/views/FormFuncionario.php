<div class="container mt-3">
    <div class="row">
        <div class="col-md-5 col-xs-12">
            <?php
            $mensagem = $this->session->flashdata('mensagem');
            echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
            ?>  
            <?php echo validation_errors(); ?>
            <form action = "" method = "post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= (isset($funcionario)) ? $funcionario->id_funcionario: ''; ?>">

                <div class="form-group">
                    <label for="tx_nome"> Nome:</label>
                    <input type="text" name="tx_nome"  class="form-control" id="tx_nome" value="<?= (isset($funcionario)) ? $funcionario->tx_nome : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="sr_salario"> Salário:</label>
                    <input type="text" name="sr_salario"  class="form-control" id="sr_salario" value="<?= (isset($funcionario)) ? $funcionario->sr_salario : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="tx_periodo"> Período:</label>
                    <input type="text" name="tx_periodo"  class="form-control" id="tx_periodo" value="<?= (isset($funcionario)) ? $funcionario->tx_periodo : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="tx_horario"> Horário:</label>
                    <input type="time" name="tx_horario"  class="form-control" id="tx_horario" value="<?= (isset($funcionario)) ? $funcionario->tx_horario : ''; ?>">
                </div>

                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo"></i> Limpar</button> 
            </form>
        </div>
    </div>
</div>