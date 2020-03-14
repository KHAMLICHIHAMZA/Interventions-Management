<?php

    //var_dump($_SESSION);

//die(print_r($_SESSION));
require_once './Controllers/UsersController.php ';
require_once './index.php';


if(isset($_POST['submit']))
{

$users= UsersController::test();

}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <style>
    .custom-margin {
        margin-top: 20vh;
    }

    body {
        background-image: url('dist/img/loginsdis68.jpg');
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
    }
    </style>
    <title>Connexion</title>

</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center custom-margin">
            <div class="col-sm-6 col-md-4">
                <!-- Add bg-primary in form tag if want form background color-->
                <!--text-white if want text color white-->
                <form method="post" action="home" class="shadow-xl p-4 text-white">
                    <div class="form-group">
                        <i class="fas fa-user"></i><label for="email" class="pl-2 shadow-xl">Email</label>
                        <input type="text" class="form-control" placeholder="votre code pompier" name="username"
                            id="username">
                        <!--Add text-white below if want text color white-->
                        <small class="form-text"></small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="pass" class="pl-2 shadow-xl">Password</label>
                        <input type="password" class="form-control" placeholder="votre mot de passe" name="password"
                            id=password>
                    </div>
                    <div class="form-check">

                        <label class="form-check-label" for="exampleCheck1">
                            <a href="http://localhost/Interventions-Management/motdepass">
                                Mot de passe oublié ?</label>
                    </div>
                    <button type="submit" class="btn btn-outline-success mt-3 btn-block shadow-sm font-weight-bold"
                        name="submit" id="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- JQuery Popper Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>