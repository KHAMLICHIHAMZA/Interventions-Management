<?php
require_once "DATABASE/DB.php";
class rapportsModel
{
    public function construct()
    {
    }
    public  function listerapportcommentaire($id){
        $sql="select * from commentaire where id_rapport=:id";
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

    public function listeAllRapportresponsable()
    {
        $sql = 'SELECT * FROM rapport ';
        try {
            $db = DB::connect();
            $stmt = $db->prepare($sql);
            $res = ($stmt->execute()) ? $stmt->fetchAll(PDO::FETCH_OBJ) : null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function modificationrapport($id,$contenu)
    {
        $sql = 'UPDATE rapport set contenu=:contenu , statut = NULL where id_rapport=:id ';
        try {
            $db = DB::connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(":contenu",$contenu);
            $stmt->bindParam(":id",$id);
            $res = $stmt->execute() ;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}

?>