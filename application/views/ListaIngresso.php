<div class="container">
    <div class="conntainer">
        <h1>Lista de Ingressos</h1>
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
        ?> 
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead  class="thead-dark">
                    <tr>
                        <th scope="col"><i class="fas fa-anchor"></i> Status do Ingreso</th>
                        <th scope="col"> Valor do Ingresso</th>
                        <th scope="col"><i class="fas fa-location-arrow"></i> Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($ingresso as $ig) {
                        echo '<tr>';
                        echo '<td>' . $ig->tx_status . '</td>';
                        echo '<td>' . $ig->vl_ingresso . '</td>';
                        echo '<td>'
                        . '<a class="btn btn-outline-light" href="' . $this->config->base_url() . 'ingresso/alterar/' . $ig->id_ingresso . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                        . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'ingresso/deletar/' . $ig->id_ingresso . '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
                        . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
