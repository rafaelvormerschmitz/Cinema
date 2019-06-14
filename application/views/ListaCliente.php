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
                <h2 id="label-form"><i class="fas fa-edit"></i>Lista de Clientes</h2>
            </div>
            <div class='card-body'>
                <div class="table-responsive">
                    <table class="table table-bordered table-dark">
                        <thead  class="thead-dark">
                            <tr>
                                <th scope="col"> Nome</th>
                                <th scope="col"> Sobrenome</th>
                                <th scope="col"> CPF</th>
                                <th scope="col"> Sexo</th>
                                <th scope="col"> Estado</th>
                                <th scope="col"> Cidade</th>
                                <th scope="col"> Endereço</th>
                                <th scope="col"> Telefone</th>        
                                <th scope="col"> Email</th>
                                <th scope="col"> Nascimento</th>
                                <th scope="col"> Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($cliente as $cn) {
                                echo '<tr>';
                                echo '<td>' . $cn->nome . '</td>';
                                echo '<td>' . $cn->sobrenome . '</td>';
                                echo '<td>' . $cn->CPF . '</td>';
                                echo '<td>' . $cn->sexo . '</td>';
                                echo '<td>' . $cn->estado . '</td>';
                                echo '<td>' . $cn->cidade . '</td>';
                                echo '<td>' . $cn->endereco . '</td>';
                                echo '<td>' . $cn->telefone . '</td>';
                                echo '<td>' . $cn->email . '</td>';
                                echo '<td>' . $cn->nascimento . '</td>';
                                echo '<td>'
                                . '<a class="btn btn-outline-light" href="' . base_url('cliente/alterar/' . $cn->id_cliente) . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                                . '<a class="btn btn-danger" href="' . base_url('cliente/deletar/' . $cn->id_cliente) . '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
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
