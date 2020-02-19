<!DOCTYPE html>


<?php if(true)
{
$user= new UsersController;
$user->auth();


}
else
{
echo "ererur";


}?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Connexion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<img class=img-responsive src=./dist/img/sdis68g.png style="max-width : 80%;
heigth: auto;
display: block;"/>
<body class="hold-transition login-page">



<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Connexion</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="votre code pompier" name="username" id="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="votre mot de passe" name="password" id =password>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
  
          </div>

        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p></p>
        <a href="http://localhost/Interventions-Management/home" class="btn btn-block btn-primary">
          <button type="submit" class="btn btn-primary btn-block"  name="submit">Connexion </button>

        </a>

      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="./Views/motdepasse.php"> mot de passe oublié </a>
      </p>
      <p class="mb-0">
      </p>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>

</body>
</html>
