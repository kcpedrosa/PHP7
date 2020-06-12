<?php
  require_once("validador_acesso.php");
  //print bellow is for debugging
  //print_r($_SESSION);

  //open calls
  $chamados = array();

  //open the file just for read it[parmt 'r']
  $arquivo = fopen('../../app_help_desk2/arquivo.hd', 'r');

  //read every line, feof returns true when finds end of line, otherwise false, hence the !
  while (!feof($arquivo)) {
    $registro = fgets($arquivo);
    $chamados[] = $registro;
    //each registro will be added to chamados with a numeric key strt from 0
    //this method will generate an final array element wich will be empty
    //because of the mechanic of the function fgets plus the behaviour of feof+while
  }

  
  echo "<pre>";
  echo var_dump($chamados);
  echo "</pre>";
  
  //we must close the file
  fclose($arquivo);



?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="navbar-item">
          <a class="btn btn-outline-success my-2 my-sm-0" href="logoff.php">Sair (Logoff)</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <?php
              foreach ($chamados as $chamado) { ?>
                <?php
                $chamado_dados = explode('#', $chamado);
                //will separate into an array with numerical keys
                //the explode will find 3 elements, except in the  last itertn, hence the following if count etc
                //the var_dump bellow show us the structure of each array in each iteration
                /*
                echo "<pre>";
                echo var_dump($chamado_dados);
                echo "</pre>";
                */

                if ($_SESSION['perfil_id'] == 2) {
                  //so it means it is a common user
                  if($_SESSION['id'] != $chamado_dados[0]){
                    continue;
                    //it it is diff, that means that the logged user didnt created the call
                    //that call will not be displayed
                  }
                  
                }

                if (count($chamado_dados) < 3) {
                  //since the last iterat will find an empty array, it will continue
                  continue;
                  //this will make a jump in the last iteration to avoid show empty card
                }
                ?>
            
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
                  <p class="card-text"><?= $chamado_dados[3] ?></p>

                </div>
              </div>

              <?php }?>

           

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>