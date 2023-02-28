<?php
    session_start();
    require_once('../../models/verTicketsCreados.php');

    function misTickets(){return mis_tickets($_SESSION['id']);}
?>