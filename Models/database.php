<?php

class DataBase{
    const server="localhost";
    const user="root";
    const password ="";
    const dbname= "comercio";

    public static function Conect()
    {
        try
        {
            $conection= new PDO("mysql:host=".self::server.";
            dbname=".self::dbname.";charset=utf8",self::user,self::password);

            $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conection;


        }
        catch(PDOException $e)
        {
            return "fallo".$e->getMessage();

        }

    }


}

?>