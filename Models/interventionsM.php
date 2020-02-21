<?php
require_once "DATABASE/DB.php";
class interventionsModel {
    public function construct(){}
    public  function getall(){
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