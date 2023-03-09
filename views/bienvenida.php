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
    <title>Home</title>
</head>
<body>
    <div id="p-info">
        <h1>
            <?php
                echo $_SESSION['nombre'] ." " .  $_SESSION['apellido'];
                ?>
        </h1>
        <h2>
            <?php
                echo $_SESSION['puesto'];
            ?>
        </h2>
        <h3>
            <?php
                 echo $_SESSION['departamento'];
            ?>
        </h3>
    </div>
    <iframe class="tickets-nuevos">
    </iframe>
    <script type="module" src="../js/ticketsNotification.js"></script>
</body>
</html>

