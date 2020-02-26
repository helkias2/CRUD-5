

        <h3 class="alert-success"><?= $this->session->flashdata('success')?></h3>
        <h3 class="alert-danger"><?= $this->session->flashdata('danger')?></h3>

      <center> <h1>Mercado</h1></center>
        <table class="table table-responsabli">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Preco</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produtos as $produto): ?>
                <tr>
                    <td>#</td>
                    <td><?= $produto['nome']?></td>
                    <td><?= character_limiter($produto['descricao'], 10); ?></td>
                    <td><?= numeroEmReais($produto['preco'])?></td>
                    <td><?= anchor("produtos/{$produto['Id']}", "Visualizar Produtos", array('class' => 'btn btn-primary'))?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
               
        <?php if($this->session->userdata('usuario_logado')): ?>
            <?= anchor('produtos/formulario', 'Novo Produto', array("class" => "btn btn-primary"))?>
            <?= anchor('login/logout', 'Logout', array("class" => "btn btn-primary"))?>
        <?php else: ?>
            <h1>Login</h1>
            <?php
             echo form_open("login/autenticar");
                  echo form_label("Email", "email");
                  echo form_input(array(
                      "name" => "email",
                      "id" => "email",
                      "class" => "form-control",
                      "maxlength" => "255"
                  ));
  
                  echo form_label("Senha", "senha");
                  echo form_password(array(
                      "name" => "password",
                      "id" => "password",
                      "class" => "form-control",
                      "maxlength" => "255"
                  ));
  
                  echo form_button(array(
                      "class" => "btn btn-primary",
                      "content" => "Login",
                      "type" => "submit"
                  ));
                
                echo form_close();
            
            ?>
     
            <h1>Cadastro</h1>
            <?php
                echo form_open("usuarios/novo");

                echo form_label("Nome", "nome");
                echo form_input(array(
                        "name" => "nome",
                        "id" => "nome",
                        "class" => "form-control",
                        "maxlength" => "255"
                ));

                echo form_label("Email", "email");
                echo form_input(array(
                    "name" => "email",
                    "id" => "email",
                    "class" => "form-control",
                    "maxlength" => "255"
                ));

                echo form_label("Senha", "senha");
                echo form_password(array(
                    "name" => "password",
                    "id" => "password",
                    "class" => "form-control",
                    "maxlength" => "255"
                ));

                echo form_button(array(
                    "class" => "btn btn-primary",
                    "content" => "Cadastrar",
                    "type" => "submit"
                ));

                echo form_close();
            
            ?>
                
            <?php endif; ?>
