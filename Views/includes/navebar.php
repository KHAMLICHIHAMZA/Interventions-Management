<div class="wrapper">

<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/Interventions-Management/home" class="nav-link">Home</a>
      </li>
     
    </ul>



    
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
        
    <script type="text/javascript">

function googleTranslateElementInit() 
{
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<a class=" form-control form-control-navbar text-muted " href=""><div   id="google_translate_element"></div>
 </a>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/Interventions-Management/home"  onclick="myFunction2()"class="nav-link"><i
            class="fas fa-door-open"></i></a></a>
            
            <script>
function myFunction2() {
  var txt;
  if (confirm("vous étes sure de vous deconecter !")) {
    <?php 
     require_once '././Controllers/UsersController.php ';
//UsersController::logout()    
//window.open('http://localhost/Interventions-Management/login2');
    ?>

  } else {
    window.location.href;
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
      </li>

      

      <li class="nav-item d-none d-sm-inline-block">
      <!--       <a href="index.php?c=userscontroller&m=getAllUsers" class="nav-link"><i
-->
        <a href="http://localhost/Interventions-Management/liste" class="nav-link"><i
            class="far fa-user"></i></a></a>
            
      </li>

     

   
    </ul>
  </nav>
  <!-- /.navbar -->