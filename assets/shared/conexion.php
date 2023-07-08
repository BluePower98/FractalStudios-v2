<?php

 class Conexion{

    function ConexionBD(){
        $host='149.56.28.83';
        $dbname='CodeplexWeb_2020';
        $username='admin';
        $password='P@2codeplex';
        $puerto=1433;

        try{
            $conn = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname",$username,$password);
            echo "Se conecto Correctamente a la base de datos";
        }
        catch(PDOException $exp){
            echo ("No se logo conectar correctamente con la Base de Datos: $dbname, error: $exp");
        }

        return $conn;
    }
 }
?>