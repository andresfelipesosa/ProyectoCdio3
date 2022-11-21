<?php
include('../app/config/config.php');
include('../app/config/conexion.php');
?>

<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <title>Registro - Platanopedia</title>
            <link rel="stylesheet" href="<?php echo $URL?>/public/css/master_register.css">
            <link rel="icon" href="<?php echo $URL?>/public/images/platanopedia_logo-1.png">
        </head>
    <body>

        <div class="register-box">
            <img class="avatar" src="<?php echo $URL?>/public/images/platanopedia_logo-1.png" alt="Logo de Platanopedia">
            <h1>Registro</h1>
            <form autocomplete="off" action="controller_register.php" method="POST">

                <!-- NOMBRES -->
                <label for="name">Nombres</label>
                <input type="text" id="names" name="names" placeholder="Escriba sus Nombres" required autofocus>

                <!-- APELLIDOS -->
                <label for="lastname1">Apellido Paterno</label>
                <input type="text" id="lastname1" name="lastname1" placeholder="Escriba su 1er Apellidos" required autofocus>

                <label for="lastname2">Apellido Materno</label>
                <input type="text" id="lastname2" name="lastname2" placeholder="Escriba su 2do Apellido" required autofocus>

                <!-- NOMBRE DE USUARIO -->
                <label for="username">Nombre de Usuario</label>
                <input type="text" id="username" name="username" placeholder="Escriba su usuario" required autofocus>

                <!-- CONTRASEÑA -->
                <label for="contraseña">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Elija su contraseña" required>

                <input type="submit" value="Registrarse">

            </form>
        </div>
    </body>
</html>