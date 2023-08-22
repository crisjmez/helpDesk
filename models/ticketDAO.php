<?php

require_once('../config/connection.php'); 

    class TicketDAO {

        private $conn;
 
        function __construct(){
            $this->conn = new Conexion();
        }

        function crear_ticket($id_user, $prom, $descripcion){

            $stmt = $this->conn->get_conexion()->prepare("INSERT INTO tickets (id_usuario, problema, descripcion) VALUES (:id_usuario, :problema, :descripcion)");
 
            $stmt->bindParam(":id_usuario", $id_usuario); 
            $stmt->bindParam(':problema', $problema);
            $stmt->bindParam(':descripcion', $desc);

            $id_usuario = $id_user;
            $problema= $prom;
            $desc= $descripcion;

            $stmt->execute();
  
            $this->conn->cerrar_conexion();
        }

        function actualizar_estado($id_P, $estado_P){
            $stmt = $this->conn->get_conexion()->prepare("UPDATE tickets SET estado = :estado, fecha_cerrado = now() where id_ticket = :id");
 
            $stmt->bindParam(":estado", $estado); 
            $stmt->bindParam(':id', $id);

            $id = $id_P;
            $estado= $estado_P;

            $stmt->execute();
  
            $this->conn->cerrar_conexion();
        }

        function buscar_tickets(){

           $stmt = $this->conn->get_conexion()->prepare("SELECT t.id_ticket, t.problema, t.descripcion, 
           u.nombre, u.apellido, d.nombre_departamento FROM tickets t inner join usuarios u on t.id_usuario = u.id_usuario 
           inner join departamentos d on d.id_departamento = u.departamento
           where t.estado = 1");
       
           $stmt->execute();
   
           $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
   
           $registro = $stmt->fetchAll();  
           $this->conn->cerrar_conexion();
   
           return $registro;
       }

    }

?>