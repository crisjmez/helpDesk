<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>
<body>
   <div id="m-info">
        <nav>
            <ul>         
            

            </ul>
        </nav>
    </div>
    <iframe src="./bienvenida.php" frameborder="0" width="100%" height="100%"></iframe>
    <section id = "notification">
        <button id="btn-nuevo-tickets">Nuevos Tickets</button>
        <span id="no-tickets"></span>
    </section>
    <section class="tickets-nuevos">
    </section>
    <section id="moreDetails"></section>
    <script type="module" src="../js/ticketsNotification.js"></script>
    <script type="module" src="../js/nav.js"></script>
</body>
</html>