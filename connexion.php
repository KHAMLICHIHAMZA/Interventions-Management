<?php

require 'db-config.php';
try{

    $bdd = new PDO($DB_DSN, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// ce ci est un test de la base de donnes
/*
$reponse = $bdd->query('SELECT * FROM equipe');


while ($donnees = $reponse->fetch())
{
	echo $donnees['EQ_ID'] ;
}

$reponse->closeCursor();
*/

?>