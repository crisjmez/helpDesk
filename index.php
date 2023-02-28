<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Inicio</title>
</head>
<body>
<div id="divForm">
            <form class="Form" action="./controllers/validador.php" method="post">
                <h1>Help Desk</h1>
                <a href=""><img src="" id="logo" alt="icon"/></a>     
                <label>Usuario</label>
                <input type="text" id="username" name="username"/>
                <label>Contraseña</label>
                <input type="password" id="pass" name="pass"/>
                <input type="submit" value="Ingresar"/>
            </form>
        </div>
</body>
</html>