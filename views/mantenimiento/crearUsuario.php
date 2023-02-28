<?php 
    require_once('../../models/departamento.php');
    require_once('../../models/puesto.php');
    require_once('../../models/roles.php');

    $roles = rolesDB();
    $puestos = puestosDB();
    $departamentos = departamentosDB();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index.css">
    <title>Registrar Nuevo Usaurio</title>
</head>
<body>
    <div>
        <h1 class="ticket-h1">Registro de Nuevo Usuario</h1>
        <form action="../../controllers/registrarUsuario.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido">
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario">
            <label for="pass">Contraseña</label>
            <input type="pass" id="pass" name="pass">
            <label for="departamento">Departamento o Divsion</label>
            <select name="departamento" id="departamento">
                <?php 
                    foreach($departamentos as $departamento){
                        echo "<option value='${departamento['id_departamento']}'>${departamento['nombre_departamento']}</option>";
                    }
                ?>
            </select>
            <label for="puesto">Puesto</label>
            <select name="puesto" id="puesto">
                <?php
                    foreach($puestos as $puesto){
                        echo "<option value='${puesto['id_puesto']}'>${puesto['nombre_puesto']}</option>";
                    }
                ?>
            </select>
            <label for="rol">Rol</label>
            <select name="rol" id="rol">
                <?php
                    foreach($roles as $rol){
                        echo "<option value='${rol['id_rol']}'>${rol['nombre_roles']}</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Crear Usuario">
        </form>
    </div>
</body>
</html>