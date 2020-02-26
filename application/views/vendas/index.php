
        <h1></h1>
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Data entrega</th>
            </tr>
            
            <?php foreach($produtosVendidos as $itens): ?>
            <tr>
                <td><?= $itens['nome']?></td>
                <td><?= data_para_pt($itens['data_entrega'])?></td>
            
            </tr>
            <?php endforeach; ?>

        </table>

  