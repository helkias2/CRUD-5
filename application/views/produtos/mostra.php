
    <h1><?= $title?></h1>
    <table class="table table-response">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Preco</th>
        </tr>
        <tr>
            <td><?= $produtos['Id']?></td>
            <td><?= $produtos['nome']?></td>
            <td><?= auto_typography(html_escape($produtos['descricao'])) ?></td>
            <td><?= $produtos['preco']?></td>
        </tr>
    </table>
    <br>
        <h2>Compre agora mesmo!</h2>
        <?php
           echo form_open("vendas/nova");

                echo form_hidden("produto_id",$produtos['Id']);

                echo form_label("Data de Entrega", "data_de_entrega");
                echo form_input(array(
                    "name" => 'data_de_entrega',
                    "type" => "text",
                    "id" => "data_de_entrega",
                    "class" => "form-control",
                    "value" => ""
                ));
                echo form_button(array(
                    "type" => "submit",
                    "class" => "btn btn-primary",
                    "content" => "Comprar"
                ));

            echo form_close();
        
        ?>
