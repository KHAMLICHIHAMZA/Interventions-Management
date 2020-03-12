<?php 
if(isset($_POST['recup_submit'],$_POST['recup_mail']))
{
if (!empty($_POST['recup_mail'])) {

    $mail=htmlspecialchars($_POST['recup_mail']);

    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo'ok';

    } 
    else 
    
    {
      $error="Adress mail invalide";
    }

}

else

{

  $error="veuillez entrer votre adresse mail";

}

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>mot de pass oublié</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page card-body">
<div class="login-box">
  <div class="login-logo">
  <a href="http://localhost/Interventions-Management/">

  <img    class=img-responsive src=../dist/img/sdis68g.png style="max-width : 100%; heigth: auto; "/>
  <a href=""><b>récupération du motdepasse </b></a>

</div>  
  <div class="card">
    <div class="card-body login-card-body">

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="recup_mail">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="submit" class="btn btn-primary btn-block" name="recup_submit">demander un nouveau mot de passe</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php if(isset($error)) { echo '<span style="color:red">'.$error.'</span>';}?>

 
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
