<?php
    session_start();
    require_once('../models/user.php');
    require_once('../models/userDAO.php');

    $user = new Usuario( $_POST['nombre'],  $_POST['apellido'], $_POST['departamento'], $_POST['puesto'], $_POST['rol'], $_POST['usuario'], $_POST['pass']);

    $userDAO = new usuarioDAO();

    
    if(!empty($_POST)and isset($_POST['btn-editar'])){
        $userDAO->actualizar($user, $_SESSION['id']);
        header("location: ../views/bienvenida.php"); 
    }
    


?>