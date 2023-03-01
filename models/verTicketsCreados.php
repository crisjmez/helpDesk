<?php
     require_once('../../config/connection.php'); 
    function buscar_tickets(){

       
         $conn = new Conexion();

        $stmt = $conn->get_conexion()->prepare("SELECT * FROM tickets t inner join usuarios u where t.id_usuario = u.id_usuario");
    
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

        $registro = $stmt->fetchAll();  
       $conn->cerrar_conexion();

        return $registro;
    }

    function actualizarEstado($estate, $id){
 
        $conn = new Conexion();

        $stmt = $conn->get_conexion()->prepare("UPDATE tickets set estado = :estado where id_ticket = :id_P");
        $stmt->bindParam(":estado", $estado); 
        $stmt->bindParam(":id_P", $id_P); 

        $estado = $estate;
        $id_P = $id;
    
        $stmt->execute();

       $conn->cerrar_conexion();

    }

    function mis_tickets($id_P){

       
        $conn = new Conexion();

       $stmt = $conn->get_conexion()->prepare("SELECT * FROM tickets t inner join usuarios u where t.id_usuario = u.id_usuario and u.id_usuario = :id");
       $stmt->bindParam(":id", $id); 
       $id = $id_P;

       $stmt->execute();

       $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

       $registro = $stmt->fetchAll();  
      $conn->cerrar_conexion();

       return $registro;
   }

?>