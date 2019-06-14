<div $cliente class="container mt-3">
    <div class="row">
        <div class="col-md-5 col-xs-12">
            <?php
            $mensagem = $this->session->flashdata('mensagem');
            echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
            ?>  
            <?php echo validation_errors(); ?>
            <form action = "" method = "post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= (isset($cliente)) ? $cliente->id_cliente : ''; ?>">

                <div class="form-group">
                    <label for="nome"> Nome:</label>
                    <input type="text" name="nome"  class="form-control" id="nome" value="<?= (isset($cliente)) ? $cliente->nome : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="sobrenome"> Sobrenome:</label>
                    <input type="text" name="sobrenome"  class="form-control" id="sobrenome" value="<?= (isset($cliente)) ? $cliente->sobrenome : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="CPF"> CPF:</label>
                    <input type="text" name="CPF" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" id="CPF"  value="<?= (isset($cliente)) ? $cliente->CPF : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="sexo"> Sexo:</label>
                    <input type="text" name="sexo"  class="form-control" id="sexo" value="<?= (isset($cliente)) ? $cliente->sexo : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="estado"> Estado:</label>
                    <input type="text" name="estado"  class="form-control" id="estado" value="<?= (isset($cliente)) ? $cliente->estado : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="cidade"> Cidade:</label>
                    <input type="text" name="cidade"  class="form-control" id="cidade" value="<?= (isset($cliente)) ? $cliente->cidade : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="endereco"> Endereço:</label>
                    <input type="text" name="endereco"  class="form-control" placeholder="Ex.: Bairro,rua,número" id="endereco" value="<?= (isset($cliente)) ? $cliente->endereco : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="telefone"> Telefone:</label>
                    <input type="text" name="telefone" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" id="telefone" value="<?= (isset($cliente)) ? $cliente->telefone : ''; ?>">  
                </div>

                <div class="form-group">
                    <label for="email"> Email:</label>
                    <input type="text" name="email"  class="form-control" id="email" placeholder="Ex.: $cliente@$cliente.com" value="<?= (isset($cliente)) ? $cliente->email : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="nascimento"> Nascimento:</label>
                    <input type="date" name="nascimento"  class="form-control" placeholder="Ex.: dd/mm/aaaa" id="nascimento" value="<?= (isset($cliente)) ? $cliente->nascimento : ''; ?>">
                </div>

                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo"></i> Limpar</button> 
            </form>
        </div>
    </div>
</div>