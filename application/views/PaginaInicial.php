<div class="col-md-3">
    <div class="card-deck">
        <div class="card" style="height: 550px;">
            <img src="../../uploads/MIB Homens de Preto.jpg" alt="" class="imagem"/>
            <div class="card-body">
                <h4 class="card-title"> Em breve</h4>
                <?php
                foreach ($filme as $fm) {
                    echo '<h5 class="card-text">' . $fm->tx_nome . '</h5>';
                    echo '<h5 class="card-text">' . $fm->sp_sinopse . '</h5>';
                    echo '<h5 class="card-text">' . $fm->tx_duracao . '</h5>';
                    echo '<h5 class="card-text">' . $fm->tx_companhia . '</h5>';
                    echo '<h5 class="card-text">' . $fm->tx_genero . '</h5>';
                    echo '<h5 class="card-text">' . $fm->tx_diretor . '</h5>';
                    echo '<h5 class="card-text">' . $fm->atores . '</h5>';
                    echo '<td> <img src="' . base_url('uploads/' . $fm->imagem) . '" height="50"></td>';
                    echo '<h5 class="card-text">' . $fm->classificacao . '</h5>';
                    echo '<h5 class="card-text">' . $fm->trailer . '</h5>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
