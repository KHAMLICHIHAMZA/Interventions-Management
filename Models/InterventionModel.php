<?php
require_once "C:/wamp64/www/Interventions-Management/DATABASE/DB.php";
//require_once "./DATABASE/DB.php";
class interventionsModel {
    public function construct(){}




    public  function getinterventionrapport($id){
        $sql="select * from rapport where Numero_intervention=:id";
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public  function ajoutcommentaire($id,$contenu){
        $sql="INSERT into  commentaire(id_rapport,contenu) value('$id','$contenu') ;";
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $res=$stmt->execute();
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public  function validationrapport($etat,$id){
        $sql='UPDATE rapport SET statut=:etat where id_rapport=:id ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":etat",$etat);
            $stmt->bindParam(":id",$id);
            $res=$stmt->execute();
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public  function listeAllRapportresponsable(){
        $sql='SELECT * FROM rapport ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
/*
    public function listeAllRapportresponsablebylogin($P_CODE)
    {
        $sql = 'SELECT R.* FROM rapport as R ,intervention as I ,responsable as RE where
                        R.Numero_intervention = I.Numero_Intervention and I.Responsable_idResponsable = RE.idResponsable and RE.P_CODE=:pcode   ';
        try {
            $db = DB::connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(":pcode",$P_CODE);
            $res = ($stmt->execute()) ? $stmt->fetchAll(PDO::FETCH_OBJ) : null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
*/
    public  function listeIRapportnonredigerlogin($P_CODE){
        $sql='SELECT I.* FROM intervention as I 
            left join rapport as R on I.Numero_Intervention = R.Numero_intervention
             inner join responsable as RE on I.Responsable_idResponsable = RE.idResponsable and RE.P_CODE=:pcode where R.Numero_intervention is null  ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":pcode",$P_CODE);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public  function listeIRapportnonrediger(){
        $sql='SELECT I.* FROM intervention as I 
            left join rapport as R on I.Numero_Intervention = R.Numero_intervention where R.Numero_intervention is null  ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public  function listeAllRapport(){
        $sql="SELECT * FROM rapport as R where R.statut is null or R.statut ='rejete' ";
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public  function ajoutrapport($rapport,$numero_intervention){
        $sql="Insert into rapport (contenu,Numero_intervention ) value ('$rapport','$numero_intervention')" ;
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $res=$stmt->execute();
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public  function getall(){
        $sql='SELECT * FROM intervention  ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";

            die();
        }
    }

    public  function getallbyLogin(){
        $sql="SELECT I.* FROM intervention as I,engins_personnel as E,Personnel as P where I.Numero_Intervention = E.Intervention_Numero_intervention
                    and E.Personnel_idPersonnel = P.idPersonnel and P.P_CODE =:pcode  GROUP by I.Numero_Intervention ";
        try {

            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":pcode",$_SESSION['username']);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";

            die();
        }
    }
    public  function getallbyLogin2(){
        $sql='SELECT I.* FROM intervention as I left join engins_personnel as E on I.Numero_Intervention = E.Intervention_Numero_intervention
                    left join  Personnel as P on P.idPersonnel = E.Personnel_idPersonnel where P.P_CODE=:pcode  GROUP by I.Numero_Intervention   ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":pcode",$_SESSION['username']);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";

            die();
        }
    }


    public  function getbyinterventionid($id){
        $sql='SELECT * FROM intervention where intervention.Numero_Intervention=:id ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return current($res);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public  function ispersonnel($id){
        $sql='SELECT * FROM personnel as P where P.P_CODE=:id ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public  function isresponsable($id){
        $sql='SELECT * FROM responsable as R where R.P_CODE=:id ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public  function getenginbyinterventionID($id){
        $sql='SELECT E.* FROM intervention as I, intervention_engins as IE , engins as E where I.Numero_Intervention =IE.Intervention_Numero_Intervention 
                  and IE.Engins_idEngins=E.idEngins and I.Numero_Intervention=:id ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public  function getpersonnelbyenginID($id,$interventionid){
       /* $sql1='SELECT engins FROM intervention as I, engins_personnel as EP , engins as E where I.Numero_Intervention =IE.Intervention_Numero_Intervention
                  and IE.Engins_idEngins=E.idEngins and intervention.Numero_Intervention=:id ';*/

         $sql='SELECT P.* FROM engins_personnel as EP , engins as E,personnel as P 
 where  E.idEngins = EP.Engins_idEngins and EP.Personnel_idPersonnel =P.idPersonnel 
 and E.idEngins=:id and EP.Intervention_Numero_intervention =:interventionid ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $stmt->bindParam(":interventionid",$interventionid);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public  function getResponsableIntervention($id){
         $sql='SELECT R.* FROM responsable as R,intervention as I
                        where I.Responsable_idResponsable = R.idResponsable and I.Numero_Intervention=:id   ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public  function getinterventionby($adresse, $typeintervention , $date , $responsable , $vehicule , $membre){
        $sql='SELECT * FROM intervention';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    static public function AddResponsable($Resp){
        //die(var_dump($Resp));
        $stmt=DB::connect()->prepare('INSERT INTO responsable (Nom) VALUES ("'.$Resp.'")');
        $stmt->execute();
        //die(var_dump($stmt));
        $stmt->closeCursor();
        $stmt=null;
        
    }
    static public function AddEnginIntervention($Nom_Engin,$Date_Heur_Depart,$Date_Heure_Arriver,$Date_Heure_Retour){
        

        $stmt=DB::connect()->prepare('INSERT INTO engins(Nom_Engin, Date_Heur_Depart, Date_Heure_Arriver, Date_Heure_Retour) VALUES ("'.$Nom_Engin.'","'.$Date_Heur_Depart.'","'.$Date_Heure_Arriver.'","'.$Date_Heure_Retour.'")');
        $stmt->execute();
        $stmt->closeCursor();
        $stmt=null;



    }

    static public function AddPersonnel($Personnel){
        $LastLine=DB::connect()->prepare('SELECT idResponsable from Responsable order by idResponsable DESC LIMIT 1');
        $LastLine->execute();
        $data=$LastLine->fetch();
        $stmt=DB::connect()->prepare('INSERT INTO personnel(Nom ,Responsable_idResponsable) VALUES ("'.$Personnel.'","'.$data['idResponsable'].'")');
        //die(var_dump($stmt));
        $stmt->execute();
        $LastLine->closeCursor();
        $stmt->closeCursor();
        $LastLine=null;
        $stmt=null;

        $LastLine1=DB::connect()->prepare('SELECT Numero_Intervention from intervention order by Numero_Intervention DESC LIMIT 1');
        $LastLine1->execute();
        $data1=$LastLine1->fetch();
        $LastLine2=DB::connect()->prepare('SELECT idEngins from engins order by idEngins DESC LIMIT 1');
        $LastLine2->execute();
        $data2=$LastLine2->fetch();
        $LastLine3=DB::connect()->prepare('SELECT idPersonnel from personnel order by idPersonnel DESC LIMIT 1');
        $LastLine3->execute();
        $data3=$LastLine3->fetch();

        $Final=DB::connect()->prepare('INSERT INTO engins_personnel(Engins_idEngins, Personnel_idPersonnel , Intervention_Numero_intervention) VALUES ("'.$data2['idEngins'].'","'.$data3['idPersonnel'].'","'.$data1['Numero_Intervention'].'")');
        $Final->execute();

        $LastLine1->closeCursor();
        $LastLine2->closeCursor();
        $LastLine3->closeCursor();

        $LastLine1=null;
        $LastLine2=null;
        $LastLine3=null;

    }
    static public function AddIntervention($Commune,$Adresse,$Type_interv,$Date_Heure_Debut,$Date_Heure_Fin,$Important,$Opm){
        $LastLine=DB::connect()->prepare('SELECT idEngins from engins order by idEngins DESC LIMIT 1');
        $LastLine->execute();
        $data=$LastLine->fetch();
        $stmt=DB::connect()->prepare('INSERT INTO intervention (Commune, Adresse, Type_interv, Opm, Important, Date_Heure_Debut, Date_Heure_Fin, Responsable_idResponsable) VALUES ("'.$Commune.'","'.$Adresse.'","'.$Type_interv.'","'.$Opm.'","'.$Important.'","'.$Date_Heure_Debut.'","'.$Date_Heure_Fin.'","'.$data['idEngins'].'")');
        //die(var_dump($stmt));
        $stmt->execute();
        $stmt->closeCursor();
        $stmt=null;
        
        $LastLine1=DB::connect()->prepare('SELECT Numero_Intervention from intervention order by Numero_Intervention DESC LIMIT 1');
        $LastLine1->execute();
        $data1=$LastLine1->fetch();
        $LastLine2=DB::connect()->prepare('SELECT idEngins from engins order by idEngins DESC LIMIT 1');
        $LastLine2->execute();
        $data2=$LastLine2->fetch();
        
        $stmt1=DB::connect()->prepare('INSERT INTO intervention_engins (Intervention_Numero_Intervention, Engins_idEngins) VALUES ("'.$data1['Numero_Intervention'].'","'.$data2['idEngins'].'")');
        //die(var_dump($stmt1));
        $stmt1->execute();
        $stmt1->closeCursor();
        $stmt1=null;
        $LastLine1->closeCursor();
        $LastLine1=null;
        $LastLine2->closeCursor();
        $LastLine2=null;
        
    }
}

?>

