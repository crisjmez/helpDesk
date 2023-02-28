<?php
       require_once('../models/ticketDAO.php');

      $id = $_GET['id'];
      $estado= $_GET['estado'];
      $ticketDAO = new TicketDAO();
      $ticketDAO->actualizar_estado($id, $estado);
      header("location: ../views/tickets/administrarTickets.php")
?>