<?Php
    class Ticket{

        private $id_ticket;
        private $id_usuario;
        private $fecha;
        private $problema;
        private $descrpcion;
        private $estado;
        
        function __construct($id_ticket, $id_usuario, $fecha, $problema, $descripcion, $estado){
            $this->$id_ticket= $id_ticket;
            $this->id_usuario= $id_usuario;
            $this->$fecha= $fecha;
            $this->$problema= $problema;
            $this->$descripcion= $descripcion;
            $this->$estado= $estado;
        }

        function get_id_ticket(){
            return $this->$id_ticket;
        }

        function get_id_usuario(){

            return $this->id_usuario;

        } function get_fecha(){

            return  $this->$fecha;

        } function get_problema(){

            return  $this->$problema;

        } function get_descripcion(){

            return $this->$descripcion;

        } function get_estado(){

            return $this->$estado;

        } 
    }
?>