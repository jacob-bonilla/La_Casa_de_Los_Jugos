<?php

//Conexion a la base de datos

class Cconexion
{

    static function ConexionBD()
    {
        $host = 'localhost';
        $dbname = 'La_Casa_de_los_Jugos';
        $username = 'sa';
        $password = 'yourStrong#Password';
        $puerto = '1433';


        try {
            $conn = new PDO("sqlsrv:Server=$host,$puerto;Database=$dbname", $username, $password);
            echo "Se conecto correctamente a la base de datos";
        } catch (PDOException $exp) {
            echo ("No se logro conectar correctamente con la base de datos: $dbname, error: $exp");
        }

        return $conn;
    }
}
