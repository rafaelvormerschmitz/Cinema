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
                    <h2 id="label-form"><i class="fas fa-edit"></i>Cadastro de Usuários</h2>
                </div>
                <div class='card-body'>
                    <form action = "" method = "post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= (isset($usuario)) ? $usuario->id_usuario : ''; ?>">

                        <div class="form-group">
                            <label for="nome"> Nome:</label>
                            <input type="text" name="nome"  class="form-control" id="nome" value="<?= (isset($usuario)) ? $usuario->nome : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="email"> Email:</label>
                            <input type="text" name="email"  class="form-control" id="email" placeholder="Ex.: $usuario@$usuario.com" value="<?= (isset($usuario)) ? $usuario->email : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="senha"> Senha:</label>
                            <input type="password" name="senha" class="form-control" id="senha"  value="<?= (isset($usuario)) ? $usuario->senha : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="status"> Status:</label>
                            <input type="text" name="status"  class="form-control" id="status" value="<?= (isset($usuario)) ? $usuario->status : ''; ?>">
                        </div>

                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                        <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo"></i> Limpar</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
