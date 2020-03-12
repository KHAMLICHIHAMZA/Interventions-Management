<?php
class Filtre
{
   

    public function filtrepar($nameBD)
    {
        $sql = "SELECT Numero_Intervention,$nameBD FROM intervention ORDER BY $nameBD";
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