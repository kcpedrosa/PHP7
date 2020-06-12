<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 500px;
        height: 400px;
        margin: 0 auto;
        /*class not applied, was located bellow col-6*/
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark" aria-label="breadcrumb">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ol class="breadcrumb">
      <li class="breadcrumb-item active" ><a href="#">Principal</a></li>
      <li class="breadcrumb-item"><a href="#">Contato</a></li>
      <li class="breadcrumb-item"><a href="#">Arquivo</a></li>
    </ol>
    </nav>

    <div class="container">    
      <div class="row">
        <div class="col-6">
        <div class="">
          <div class="card" style="margin-top: 25px;">
                <div class="card-header">
                  Login
                </div>
                <div class="card-body">
                  <form action="direciona_valida_login.php" method="post">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                      <input name="senha" type="password" class="form-control" placeholder="Senha">
                    </div>
                    
                    <?php
                    //manda um warning caso o usuario tenha digitado user ou senha errados
                    if (isset($_GET['login']) && $_GET['login'] == 'erro') {
                      
                      ?>

                      <div class="text-danger">
                        Usuário ou senha inválido(s)
                      </div>

                    <?php }

                    ?>
                     <?php
                    if (isset($_GET['login']) && $_GET['login'] == 'erro2') {
                      
                      ?>

                      <div class="text-danger">
                        Faça login para acessar as páginas solicitadas
                      </div>

                    <?php }

                    ?>


                    <button class="btn btn-sm btn-info btn-block" type="submit">Entrar</button>
                  </form>
                </div>
          </div>
        </div>
        </div>

        <div class="col-6">
        <div class="">
          <div class="card" style="margin-top: 25px;">
                <div class="card-header">
                  Centre d'appel
                </div>
                <div class="card-body">
                  <p>Ces derniers temps, une alternative au centre d'appel traditionnel prend de l'ampleur sur le web. Il s'agit de plateformes de téléprospection qui mettent en relation des téléprospecteurs indépendants et des entreprises.</p>
                  <button class="btn btn-sm btn-info btn-block" type="button">Lire plus</button>
                </div>
          </div>
        </div>
        

      </div>
    </div>

    <div class="container">    
      <div class="row">

        

      </div>
    </div>

  </body>
</html>