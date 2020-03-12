<?php
require_once "DATABASE/DB.php";
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
        $sql="INSERT into  commentaire(contenu,id_rapport) value('$contenu','$id') ;";
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
        $sql='SELECT * FROM intervention ';
       /* $sql='SELECT I.*, P.Nom as pnom ,R.Nom as rnom FROM intervention as I,
 engins_personnel as EP ,responsable as R,engins as E,intervention_engins as IE,personnel as P
 where I.Numero_Intervention =IE.Intervention_Numero_Intervention and IE.Engins_idEngins=E.idEngins and E.idEngins = EP.Engins_idEngins and EP.Personnel_idPersonnel =P.idPersonnel
 and P.Responsable_idResponsable = R.idResponsable   ';*/
       /* $sql='SELECT I.*, P.Nom as pnom ,R.Nom as rnom FROM intervention as I,
 engins_personnel as EP ,responsable as R,intervention_engins as IE,personnel as P
 where  EP.Personnel_idPersonnel =P.idPersonnel
 and P.Responsable_idResponsable = R.idResponsable and I.Numero_Intervention =IE.Intervention_Numero_Intervention ';*/
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


    public  function getbyinterventionid($id){
        $sql='SELECT * FROM intervention where intervention.Numero_Intervention=:id ';
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
         $sql='SELECT R.* FROM responsable as R,personnel as P
                        where P.Responsable_idResponsable = R.idResponsable and P.idPersonnel=:id   ';
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
}



?>