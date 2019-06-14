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
                <h2 id="label-form"><i class="fas fa-edit"></i>Lista de Funcionário</h2>
            </div>
            <div class='card-body'>
                <div class="table-responsive">
                    <table class="table table-bordered table-dark">
                        <thead  class="thead-dark">
                            <tr>
                                <th scope="col"> Nome</th>
                                <th scope="col"> Salário</th>
                                <th scope="col"> Período</th>
                                <th scope="col"> Horário</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($funcionario as $fn) {
                                echo '<tr>';
                                echo '<td>' . $fn->tx_nome . '</td>';
                                echo '<td>' . $fn->sr_salario . '</td>';
                                echo '<td>' . $fn->tx_periodo . '</td>';
                                echo '<td>' . $fn->tx_horario . '</td>';
                                echo '<td>'
                                . '<a class="btn btn-outline-light" href="' . base_url('funcionario/alterar/' . $fn->id_funcionario) . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                                . '<a class="btn btn-danger" href="' . base_url('funcionario/deletar/' . $fn->id_funcionario) . '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
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

