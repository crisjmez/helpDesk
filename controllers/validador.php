<?php
    session_start();

    require_once('../models/userDAO.php');

    $userDAO = new usuarioDAO();
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $data = $userDAO->buscarUsuario($username, $pass);

    if(!$data || empty($username)|| empty($pass)){
        header("location: ../index.php");
    }else{
        $_SESSION['id'] = $data['id_usuario']; 
        $_SESSION['nombre'] = $data['nombre']; 
        $_SESSION['apellido'] = $data['apellido'];
        $_SESSION['username'] = $data['username']; 
        $_SESSION['departamento'] = $data['departamento']; 
        $_SESSION['puesto'] = $data['puesto'];
        $_SESSION['rol'] = $data['rol'];      
        header("Location: ../views/home.php");

    }
    
?>