<div class="container">
    <div class="conntainer">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
        ?> 
        <br>
        <?php echo validation_errors(); ?>
        <div class='card'>
            <div class="card-header">
                <h2 id="label-form"><i class="fas fa-edit"></i>Lista de Usuários</h2>
            </div>
            <div class='card-body'>
                <div class="table-responsive">
                    <table class="table table-bordered table-dark">
                        <thead  class="thead-dark">
                            <tr>
                                <th scope="col"> Nome</th>        
                                <th scope="col"> Email</th>
                                <th scope="col"> Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($usuario as $us) {
                                echo '<tr>';
                                echo '<td>' . $us->nome . '</td>';
                                echo '<td>' . $us->email . '</td>';
                                echo '<td>' . $us->status . '</td>';
                                echo '<td>'
                                . '<a class="btn btn-outline-light" href="' . base_url('usuario/alterar/' . $us->id_usuario) . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                                . '<a class="btn btn-danger" href="' . base_url('usuario/deletar/' . $us->id_usuario) . '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
                                . '</td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
