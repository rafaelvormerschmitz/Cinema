<div class="container">
    <div class="container">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
        ?> 
        <br>
        <div class='card'>
            <div class="card-header">
                <h2 id="label-form"><i class="fas fa-edit"></i>Lista de Promoções</h2>
            </div>
            <div class='card-body'>
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead  class="thead-dark">
                            <tr>
                                <th scope="col"><i class="fas fa-anchor"></i> Descrição da Promoção</th>
                                <th scope="col"> Imagem</th>
                                <th scope="col"><i class="fas fa-location-arrow"></i> Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($promocao as $pr) {
                                echo '<tr>';
                                echo '<td>' . $pr->descricao . '</td>';
                                 echo '<td> <img src="' . base_url('uploads/' . $pr->imagem) . '" height="50"></td>';
                                echo '<td>'
                                . '<a class="btn btn-outline-light" href="' . $this->config->base_url() . 'promocao/alterar/' . $pr->id_promocao . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                                . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'promocao/deletar/' . $pr->id_promocao . '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
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

