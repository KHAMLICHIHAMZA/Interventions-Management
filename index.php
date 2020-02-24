<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('CONTROLLERS', ROOT.DS.'controllers');
define('VIEWS', ROOT.DS.'views');
define('MODELS', ROOT.DS.'models');
define('VENDORS', ROOT.DS.'vendors');
define('CLASSES', ROOT.DS.'classes');

//require_once './Api.php';
require_once './autoload.php';
require_once './Controllers/HomeController.php ';
require_once './Controllers/UsersController.php ';



// ********************************************************************************************************.
if (isset($_GET['c']) && isset($_GET['m'])){
    //Il y a un paramètre de précisé: c'est le nom du controleur demandé.
    $controller=$_GET['c'];
    $method=$_GET['m'];
$controllerfilename=$controller.'.php';
//On inclut les fichiers nécessaires
include CONTROLLERS.DS.$controllerfilename;
$c=new $controller();
//On appelle la méthode demandée (ou la méthode par défaut)
//id,title,firstname,middlename,lastname,nationalidnumber,birthday,hireday,maritialstatus,gender,heurevacance,heuremaladie,email,telephone,poste,idmanager
if (isset($_GET['id']))
    $c->$method($_GET['id']);
else
    $c->$method();
}
else{

// **********************************************************************************************************.


$home = new HomeController();
$pages = ['interventionAdd','add','home','update','delete','liste'];

if (true)
 {
    include_once './Views/includes/header.php';
    include_once './Views/includes/navebar.php';

    include_once './Views/includes/sidebar.php';



    include_once './Views/includes/divs.php';

    if(isset($_GET['page']))
    {
        if(in_array($_GET['page'],$pages))
        {
            $page = $_GET['page'];
            $home->index($page);
        }else{
            include ('Views/includes/404.php');
        }

        }else
        {
        $home->index('home');
        }
        include_once './Views/includes/footer.php';

}else 

{

$home->index('login');

}

}
?>

    