<?php

class User
{




    static public function getAll()
    {

        $stmt=DB::connect()->prepare('SELECT * FROM pompier');
        $stmt->execute();

        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;



    }
    static public function add($data)
    {

        $stmt=DB::connect()->prepare('INSERT INTO pompier(P_NOM) VALUES (:Nom)');
        $stmt->bindParam(':Nom',$data['P_NOM']);
        
        if($stmt->execute())
        {
            return 'ok';

        }
        else{

            return 'NOTOK';

        }
    }



    static public function getUser($data)
    {
        $id =$data['P_ID'];
        try
        {
            $query='SELECT * FROM pompier WHERE P_ID=:P_ID';
            $stmt= DB::connect()->prepare($query);
            $stmt->execute(array(":P_ID" => $id));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;


        } catch(PDOException $ex){

                    echo'erer' . $ex->getMessage();
        }



    }

}
?>