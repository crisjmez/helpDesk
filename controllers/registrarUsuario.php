<?php

    require_once('../models/user.php');
    //require_once('../models/userDAO.php');

    $user = new Usuario( $_POST['nombre'],  $_POST['apellido'], $_POST['departamento'], $_POST['puesto'], $_POST['rol'], $_POST['usuario'], $_POST['pass']);
    var_dump($user);
    /* $userDAO = new usuarioDAO();

    $usuario->registrarNuevoUsuario($user);

    header("location: ../views/bienvenida.php"); */


?>