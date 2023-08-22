<?php 
   require_once('../models/ticketDAO.php');

    $ticketDAO = new TicketDAO();
    $ticketDAO->buscar_tickets();

    echo json_encode($ticketDAO->buscar_tickets());
   
?>