<?php
  require_once '../Classes/Registration.php';

  $register = new Registration();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CTO Tech - Registro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="../css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.blue.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Registro de usuário</h1>
                  </div>
                  <p></p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="register-form" method="post">
                    <div class="form-group">
                      <input id="register-email" type="email" name="email" required class="input-material">
                      <label for="register-email" class="label-material">Email</label>
                    </div>
                    <div class="form-group">
                      <input id="register-passowrd" type="password" name="password" required class="input-material">
                      <label for="register-passowrd" class="label-material">Senha</label>
                    </div>
                    <div class="form-group">
                      <input id="confirm-passowrd" type="password" name="confirmPassword" required  onchange="validatePass()" class="input-material">
                      <label for="confirm-passowrd" class="label-material">Repetir Senha</label>
                    </div>
                    <div id="alert"></div>
                    <div class="form-group terms-conditions">
                      <input id="license" type="checkbox" class="checkbox-template" required>
                      <label for="license" class="no-margin-bottom">Aceito os termos e politicas da empresa</label>
                    </div>
                    <input id="register" type="submit" value="Registrar" name="register" class="btn btn-primary">
                  </form><small>Já possui uma conta? </small><a href="login" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../js/front.js"></script>
    <script>
      function validatePass(){
        var password = document.getElementById('register-passowrd');
        var passwordAgain = document.getElementById('confirm-passowrd');
        var register = document.getElementById('register');
        var alert = document.getElementById('alert');

        if (password.value == passwordAgain.value) {
          register.disabled = false;
          alert.innerHTML = '';
        } else {
          register.disabled = true;
          alert.innerHTML = '<span class="alert alert-danger">Senhas não conferem!</span>'
        }
      }
    </script>
  </body>
</html>
