<?php

//require_once './Api.php';
require_once './autoload.php';
require_once './Controllers/HomeController.php ';
require_once './Controllers/UsersController.php ';


$home = new HomeController();


$pages = ['interventionAdd','add','home','update','delete','liste'];

if (true)
 {
    include_once './Views/includes/header.php';
    include_once './Views/includes/navebar.php';

    include_once './Views/includes/sidebar.php' ;
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


?>

    