<div class="container">
    <div class="conntainer">
        
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
        ?> 
        <br>
        <div class='card'>
            <div class="card-header">
                <h2 id="label-form"><i class="fas fa-edit"></i>Lista de Filmes</h2>
            </div>
            <div class='card-body '>
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead  class="thead-dark">
                            <tr>
                                <th scope="col"> Nome</th>
                                <th scope="col"> Sinopse</th>
                                <th scope="col"> Duração</th>
                                <th scope="col"> Classificação</th>
                                <th scope="col"> Companhia</th>
                                <th scope="col"> Gênero</th>
                                <th scope="col"> Status</th>
                                <th scope="col"> Diretor</th>        
                                <th scope="col"> Atores</th>
                                <th scope="col"> Imagem</th>
                                <th scope="col"> Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($filme as $fm) {
                                echo '<tr>';
                                echo '<td>' . $fm->tx_nome . '</td>';
                                echo '<td>' . $fm->sp_sinopse . '</td>';
                                echo '<td>' . $fm->tx_duracao . '</td>';
                                echo '<td>' . $fm->classificacao . '</td>';
                                echo '<td>' . $fm->tx_companhia . '</td>';
                                echo '<td>' . $fm->tx_genero . '</td>';
                                echo '<td>' . $fm->tx_status . '</td>';
                                echo '<td>' . $fm->tx_diretor . '</td>';
                                echo '<td>' . $fm->atores . '</td>';
                                echo '<td> <img src="' . base_url('uploads/' . $fm->imagem) . '" height="50"></td>';
                                echo '<td>'
                                . '<a class="btn btn-outline-light" href="' . base_url('administracao/alterar/' . $fm->id_filme) . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                                . '<a class="btn btn-danger" href="' . base_url('administracao/deletar/' . $fm->id_filme) . '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
                                . '</td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
</div>
</body>
</html>
