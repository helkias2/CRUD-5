<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?>">
</head>
<body> -->

    <div class="container">
        <h1>Cadastro de Produtos</h1>

        
        <?php
    echo form_open("produtos/novo");

        echo form_label("Nome", "nome");
        echo form_input(array(
            "name" => "nome",
            "id" => "nome",
            "class" => "form-control",
            "maxlength" => "255",
            "value" => set_value("nome", "")
        ));
        echo form_error("nome");
        
        echo form_label("Preco", "preco");
        echo form_input(array(
            "name" => "preco",
            "id" => "preco",
            "type" => "number",
            "class" => "form-control",
            "maxlengt" => "20",
            "value" => set_value("preco","")
        ));
        echo form_error("preco");

        echo form_label("Descricao", "descricao");
        echo form_textarea(array(
            "name" => "descricao",
            "class" => "form-control",
            "id" => "descricao",
            "value" => set_value("descricao", "")
        ));
        echo form_error("descricao");

        echo form_button(array(
            "class" => "btn btn-primary",
            "content" => "Cadastrar",
            "type" => "submit"
        ));

echo form_close();
?>

    <!-- </div>
</body>
</html> -->
