<?php

class Conexion {
   
    private $conn; 
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "help_desk";
    private $port = "3307";

    function get_conexion(){

        try{
            $this->conn = new PDO("mysql:host=$this->servername;port=$this->port;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->conn;
    }

    function cerrar_conexion(){
        $this->conn = NULL;
    }
    
}
?> 