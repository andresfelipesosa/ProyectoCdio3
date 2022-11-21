<?php
include('../app/config/config.php');
include('../app/config/conexion.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Incio de Sesión - Platanopedia</title>
        <link rel="stylesheet" href="<?php echo $URL?>/public/css/master_login.css">
        <link rel="icon" href="<?php echo $URL?>/public/images/platanopedia_logo-1.png">
    </head>
    <body>

        <div class="login-box">
            <img class="avatar" src="<?php echo $URL?>/public/images/platanopedia_logo-1.png" alt="Logo de Platanopedia">
            <h1>Inicio de Sesión</h1>
            <form autocomplete="off" action="controller_login.php" method="POST">
                <!-- NOMBRE DE USUARIO -->
                <label for="username">Nombre de Usuario</label>
                <input type="text" id="username" name="username" placeholder="Escriba su usuario" required autofocus>

                <!-- CONTRASEÑA -->
                <label for="contraseña">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Escriba su contraseña" required>

                <input type="submit" value="Ingresar">

                <a href="#">¿Ha olvidado su contraseña?</a><br>
                <a href="<?php echo $URL?>/register/index.php">Registrarse</a>
            </form>
        </div>
    </body>
</html>
