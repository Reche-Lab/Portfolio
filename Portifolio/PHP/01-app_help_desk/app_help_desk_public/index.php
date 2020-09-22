<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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
      <a href="../../../../index.html" class="nav-link text-warning">
        <i class="fas fa-user-astronaut"></i> Home
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="http://rechelab.epizy.com/Portifolio/PHP/01-app_help_desk/app_help_desk_public/valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail" value="adm@teste.com.br">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha" value="1234">
                </div>

                <!-- Inicio PHP + HTML -->
                <? if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>

                  <div class="text-danger">Usuário ou senha inválido(s)</div>

                <?php } ?>
                <!-- Fim PHP + HTML -->

                <!-- Inicio PHP + HTML -->
                <? if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>

                  <div class="text-danger">
                    Faça o login antes de acessar.
                  </div>

                <?php } ?>
                <!-- Fim PHP + HTML -->

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>