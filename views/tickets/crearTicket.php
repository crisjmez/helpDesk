<?php
    session_start();

    $nombre_completo = $_SESSION['nombre'] ." " .  $_SESSION['apellido'];
    $puesto =  $_SESSION['departamento'];
    $departamento = $_SESSION['puesto'];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index.css">
    <title>Crear Tickets</title>
</head>
<body>
    <div id="m-info">
        <nav>
            <ul>         

            </ul>
        </nav>
    </div>
    <div id="grid-div">
        <h1 class="ticket-h1">Ticket</h1>
        <form action="../../controllers/validarTicket.php" class="Form" method="POST">
            <label for="nombre_completo">Nombre</label>
            <input type="text" name="nombre_completo" value='<?php echo "${nombre_completo}"?>' disabled>
            <label for="departamento">Departamento</label>
            <input type="text" name="departamento" value='<?php echo "${puesto}"?>'  disabled>
            <label for="puesto">Puesto</label>
            <input type="text" name="puesto" value='<?php echo "${departamento}"?>'  disabled>
            <label for="problema">Problema</label>
            <select name="problema" id="problema">
                <option value="pc">Computadora</option>
                <option value="telefono">Telefono IP</option>
                <option value="impresora">Impresora</option>
                <option value="correo">Correo</option>
                <option value="internet">Internet</option>
                <option value="firma digital">Firma Digital</option>
                <option value="otro">Otros</option>
            </select>
            <label for="descripcion">Descripcion del problema</label>
            <textarea name="descripcion" id="descripcion" required></textarea>  
            <input type="submit" value="Crear"> 
        </form>
    </div>
</body>
</html>