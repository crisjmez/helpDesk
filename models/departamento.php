<?php

    require_once('../../config/connection.php');

    function departamentosDB(){

        $connection = new Conexion();
        $stmt = $connection->get_conexion()->prepare("Select * from departamentos");

        $stmt->execute();
        
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 
        $registro = $stmt->fetchAll();  
        $connection ->cerrar_conexion();

        return $registro;
    }
?>