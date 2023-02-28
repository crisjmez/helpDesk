<?php

    require_once('../../config/connection.php');

    function puestosDB(){

        $connection = new Conexion();
        $stmt = $connection->get_conexion()->prepare("Select * from puestos");
        $stmt->execute();
        
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 
        $registro = $stmt->fetchAll();  
        $connection ->cerrar_conexion();

        return $registro;

    }
?>