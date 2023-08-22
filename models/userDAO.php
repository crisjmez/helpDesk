<?php

    require_once('../config/connection.php');   
    require_once('user.php');
    
    class usuarioDAO{
        
        private $conn;
 
         function __construct(){
             $this->conn = new Conexion();
         }
 
         function registrarNuevoUsuario($usuario){
 
             $stmt = $this->conn->get_conexion()->prepare("INSERT INTO usuarios (nombre, apellido , username, pass, departamento, puesto, rol) VALUES (:nombre, :apellido, :username, :pass, :departamento,:puesto, :rol)");
 
             $stmt->bindParam(":nombre", $nombre); 
             $stmt->bindParam(':apellido', $apellido);
             $stmt->bindParam(':username', $username);
             $stmt->bindParam(':pass', $pass);
             $stmt->bindParam(':departamento', $departamento);
             $stmt->bindParam(':puesto', $puesto);
             $stmt->bindParam(':rol', $rol);
 
             $nombre = $usuario->get_nombre(); 
             $apellido = $usuario->get_apellido(); 
             $username = $usuario->get_username(); 
             $pass = password_hash($usuario->get_pass(), PASSWORD_DEFAULT); 
             $departamento = $usuario->get_departamento(); 
             $puesto = $usuario->get_puesto(); 
             $rol = $usuario->get_rol(); 
 
             $stmt->execute();
   
             $this->conn->cerrar_conexion();
 
         }
 
         function buscarUsuario($id){
            
            $stmt = $this->conn->get_conexion()->prepare("SELECT id_usuario, nombre, apellido,pass,  d.nombre_departamento as departamento , p.nombre_puesto as puesto ,rol from usuarios u 
            inner join departamentos d on d.id_departamento = u.departamento
            inner join puestos p on p.id_puesto = u.puesto WHERE username = :username");
 
             $stmt->bindParam(':username', $username);
 
             $username =$id;              
             $stmt->execute();
 
             $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
             $registro = $stmt->fetch();  
             $this->conn->cerrar_conexion();
 
             return $registro;
 
         }
 
         function actualizar($usuario, $id){
 
            $stmt = $this->conn->get_conexion()->prepare("update usuarios set nombre = :nombre, apellido = :apellido , username = :username, pass = :pass, departamento = :departamento, puesto = :puesto, rol = :rol WHERE id_usuario = :id");
        
            $stmt->bindParam(":id", $id_p);  
            $stmt->bindParam(":nombre", $nombre); 
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':pass', $pass);
            $stmt->bindParam(':departamento', $departamento);
            $stmt->bindParam(':puesto', $puesto);
            $stmt->bindParam(':rol', $rol);

            $nombre = $usuario->get_nombre(); 
            $apellido = $usuario->get_apellido(); 
            $username = $usuario->get_username(); 
            $pass = password_hash($usuario->get_pass(), PASSWORD_DEFAULT); 
            $departamento = $usuario->get_departamento(); 
            $puesto = $usuario->get_puesto(); 
            $rol = $usuario->get_rol(); 
            $id_p = $id;

            $stmt->execute();
  
            $this->conn->cerrar_conexion();
 
 
         }

    }
?>