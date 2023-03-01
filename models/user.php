<?php

    class Usuario{

        private $nombre;
        private $apellido;
        private $departamento;
        private $puesto;
        private $rol;
        private $username;
        private $pass;
        
        function __construct($nombre, $apellido, $departamento, $puesto, $rol, $username, $pass){
            $this->nombre= $nombre;
            $this->apellido= $apellido;
            $this->departamento= $departamento;
            $this->puesto= $puesto;
            $this->rol= $rol;
            $this->username= $username;
            $this->pass= $pass;
        }

        function get_nombre(){
            return $this->nombre;
        }

        function get_apellido(){

            return $this->apellido;

        } function get_departamento(){

            return  $this->departamento;

        } function get_puesto(){

            return  $this->puesto;

        } function get_rol(){

            return $this->rol;

        } function get_username(){

            return $this->username;

        } function get_pass(){

            return $this->pass;

        }
    }
?>