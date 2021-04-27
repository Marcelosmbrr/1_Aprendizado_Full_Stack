<?php

  session_set_cookie_params(2,"/"); //duração da session
  session_start();

  require __DIR__."/Conexao/conexão.php";
  require __DIR__."/Classes/PessoaClass.php";

  $obj = new Pessoa($pdo);
                 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Display/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Display/reset.css">
    <link rel="stylesheet" href="Display/display.css">
    <script src="https://kit.fontawesome.com/49b7b83709.js" crossorigin="anonymous"></script>
    <title>CRUD</title>
</head>
<body>

    <header>

        <h1 style="color: #fff;"><i class="fas fa-database" style="color: #DD8A00;"></i> CRUD COM MYSQL</h1>

    </header>

    <main>

        <section class = "main_form-side">

            <div class = "form_header">
                <h6 style="color: #fff;"> Cadastrar Pessoa <i class="fas fa-user-plus" style="color: #DD8A00; cursor: pointer;"></i></h6>
            </div>
            <div class = "form_body fb_1">

                <form class="row g-3" style="display: grid;" action = "Cadastro_script/cadastro_verifica.php" method = "POST">
                    <div class="col-md-6">
                      <label for="nome" class="form-label">Nome</label>
                      <input style = "width: max-content;" type = "text" class="form-control" id="nome" placeholder="Nome completo" name = "cadastro_nome">
                    </div>
                    <div class="col-md-6">
                      <label style = "width: max-content;" for="telefone" class="form-label">Telefone</label>
                      <input type="text" class="form-control" id="telefone" placeholder="Insira o DDD" style="width: max-content;" name = "cadastro_telefone">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" style="width: max-content;" placeholder="usuário@exemplo.com" name = "cadastro_email">
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary" style="background: #dd8a00; border: 0;" name = "btn_cadastrar">Insert</button>
                    </div>
                  </form>

            </div>

        </section>

        <section class = "main_table-side">

            <div class = "alert_row">

              <?php 

                if(isset($_SESSION["erro_msg"])){

                  echo "
                  <div class='alert alert-danger' role='alert'>
                    {$_SESSION['erro_msg']}
                  </div> ";

                }else if(isset($_SESSION["sucesso"])){

                  echo "
                  <div class='alert alert-success' role='alert'>
                    {$_SESSION['sucesso']}
                  </div> ";

                }

              ?>

            </div>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Editar</th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                    //TABELA DINÂMICA///////////////

                    $get_type = "select_all";
                    $registros = $obj->getPessoas($get_type, null);

                    if($registros){ //Se a variável não for false

                      $num_registros = count($registros);

                      if($num_registros > 0){ 

                        //O for serve para escolher uma linha da matriz
                        for($linha = 0; $linha < $num_registros; $linha ++ ){

                          //Escolhida a linha, abrimos uma tag de linha de tabela
                          echo "<tr>";

                          //O foreach serve para percorrer a linha, coluna por coluna, recuperando o valor existente dinâmicamente
                          foreach($registros[$linha] as $coluna => $valor){
                            
                            //Passando coluna por coluna, abrimos uma tag de coluna de tabela, e inserimos o valor
                            echo "<td scope='row' style= 'text-align:center' >$valor</td>";

                          }
                  
                  //Esta tag <td> é criada ao final de toda linha
                  //Diferente das outras colunas, cujo valor é dinâmicamente inserido com foreach, é criada dentro do laço for
                  //Portanto, é criada dinâmicamente, na linha, por ainda estar dentro do for, e com formato fixo por ser escrita em HTML puro
                  ?>
                  <td style= "text-align:center">
                      <!-- O botão editar redireciona o usuário para o script php de edição, com o valor da coluna ID passada pela URL  -->
                      <a href="Update_script/select_verifica.php?id_up=<?php echo $registros[$linha]['id'] ?>"><button type='button' class='btn btn-primary btn-sm' style = "background: #DD8A00; border: 0">Editar</button></a>
                  </td>
                  <?php

                      //Após criado o Botão editar, fechamos a linha
                      echo "</tr>";

                      //Se for a última linha, o processo termina definitivamente
                      //Se não for a última linha, o processo reinicia a partir do for
                      
                    }
                      
                  }

                }

                  ?>

                </tbody>
              </table>

        </section>

        <section class = "main_delete-side">

            <div class = "form_header">
                <h6 style="color: #fff;"> Excluir Pessoa <i class="fas fa-user-minus" style="color: #DD8A00; cursor: pointer;"></i></h6>
            </div>
            <div class = "form_body fb_2">

                <form class="row g-3" style="display: grid;" action = "Delete_script/delete_verifica.php" method = "POST">
                    <div class="col-md-6">
                      <label for="nome" class="form-label">ID</label>
                      <input style = "width: max-content;" type = "text" class="form-control" id="nome" placeholder="ID do registro" name = "delete_id">
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary" style="background: #dd8a00; border: 0;" name = "btn_delete">Delete</button>
                    </div>
                  </form>

            </div>

        </section>

    </main>

    <?php 

    if(isset($_SESSION["update_registro"])){

      echo "<style>.update_form {display:block}</style>";

    }

    ?>

    <div class = "update_form">
    
      <form class="row g-3" style="display: grid;" action = "Update_script/update_verifica.php" method = "POST">
          <div class="col-md-6">
            <label for="nome" class="form-label">ID</label>
            <input style = "width: max-content;" type = "text" class="form-control" id="nome" placeholder="Nome completo" name = "update_id" value = "<?php if(isset($_SESSION['update_registro'])){ echo $_SESSION['update_registro']['id']; } ?>">
          </div>
          <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input style = "width: max-content;" type = "text" class="form-control" id="nome" placeholder="Nome completo" name = "update_nome" value = "<?php if(isset($_SESSION['update_registro'])){ echo $_SESSION['update_registro']['nome']; } ?>">
          </div>
          <div class="col-md-6">
            <label style = "width: max-content;" for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" placeholder="Insira o DDD" style="width: max-content;" name = "update_telefone" value = "<?php if(isset($_SESSION['update_registro'])){ echo $_SESSION['update_registro']['telefone']; } ?>">
          </div>
          <div class="col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" style="width: max-content;" placeholder="usuário@exemplo.com" name = "update_email" value = "<?php if(isset($_SESSION['update_registro'])){ echo $_SESSION['update_registro']['email']; } ?>">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary" style="background: #dd8a00; border: 0;" name = "btn_update">Update</button>
          </div>
        </form>

    </div>

    <script src="Javascript/jquery/jquery-3.5.1.js"></script>
    <script src="Javascript/scripts.js"></script>

</body>

</html>