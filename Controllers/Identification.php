<?php

include_once ('connexion.php');
global $bdd;
     
 function login($email, $mdp)
{     
    $requete = DB::connect()->prepare('SELECT * FROM user WHERE log = ? and password = ?');
    $ligne = $requete->execute();
    return $ligne; 
}

function verification_email($email)
{
    //verification de la presence d'un seul @.
    if (@!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
        return false;
    }
    $email_array = explode("@", $email);
    $local_array = explode(".", $email_array[0]);
    //verification de la presence d'aucun caractere special apres le point.
    for ($i = 0; $i < sizeof($local_array); $i++) {
         if (@!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
            return false;
        }
    }    
    if (@!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
        $domain_array = explode(".", $email_array[1]);
        if (sizeof($domain_array) < 2) {
                return false;
        }
        for ($i = 0; $i < sizeof($domain_array); $i++) {
            if (@!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
                return false;
            }
        }
    }
    return true;
}

$nbr_tentative=0;
if (isset($_POST['email']) && $_POST['mdp'])
{
    include ('modele/TestConnexion.php');
    $ligne = login($_POST['email'],$_POST['mdp'] );
    if(ligne == 1)
    { 
        //si ligne ==1 alors l'utilisateur a rentré un bon identifiant et mot de passe
        if(verification_email($_POST['email'])){
            require_once ('vue/Index.php');
        }
        else{
            require_once ('View/IndexError.php');
        }

    }  
elseif($nbr_tentative >= 2){
    require_once ('View/IndexError.php');
} 
}else{
    $nbr_tentative++;
    require_once ('View/Index.php');
}

?>