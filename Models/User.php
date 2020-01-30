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

}
?>