<?php
    require_once('../../controllers/misTicket_C.php');    
    $tickets = misTickets();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index.css">
    <title>Adminstracion de Tickets</title>
</head>
<body>
    <div class="tk-buscados">
        <h1 ticket-h1>Mis Tickets</h1>
        <table>
            <tr>
                <th>Numero del ticket</th>
                <th>Fecha de Creacion</th>
                <th>Estado</th>
                <th>Problema</th>
                <th>Descripcion</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Solucion</th>
            </tr>
            <?php foreach($tickets as $key => $val ):?>
                <tr>
                    <td style="font-weight: bold"><?php echo $val['id_ticket'];?></td>
                    <td><?php echo $val['fecha_creacion'];?></td>
                    <td><?php echo $val['estado'];?></td>
                    <td><?php echo $val['problema'];?></td>
                    <td><?php echo $val['descripcion'];?></td>
                    <td><?php echo $val['nombre'];?></td>
                    <td><?php echo $val['apellido'];?></td>
                    <td><?php echo $val['fecha_cerrado'];?></td>
                </tr>
            <?php endforeach;;?>
        </table>
    </div>
    <script src="../../js/tickets.js"></script>
</body>
</html>