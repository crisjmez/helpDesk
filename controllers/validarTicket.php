<?php
     session_start();
     require_once('../models/ticketDAO.php');

    $ticketDAO = new TicketDAO();
    $user_id = $_SESSION['id'];
    $problema = $_POST['problema'];
    $desc = $_POST['descripcion'];

    if(!empty($user_id) && !empty($problema) && !empty($desc)){
    
        $ticketDAO-> crear_ticket($user_id, $problema, $desc);
        header("location: ../views/bienvenida.php");
    }
?>