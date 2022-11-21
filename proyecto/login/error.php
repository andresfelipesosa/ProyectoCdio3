<?php
include('../app/config/config.php');
include('../app/config/conexion.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Error Inicio de Sesión - Platanopedia</title>
        <link rel="stylesheet" href="<?php echo $URL?>/public/css/master_home.css">
        <link rel="icon" href="<?php echo $URL?>/public/images/platanopedia_logo-1.png">
    </head>
    <body>

    <div class="login-box">
        <img class="avatar" src="<?php echo $URL?>/public/images/platanopedia_logo-1.png" alt="Logo de Platanopedia">
        <h1>Error de Inicio</h1>
        <div>
            <p>Error al acceder a su cuenta, intente de nuevo</p>
        </div>

        <a href="<?php echo $URL?>/login/index.php">
            <img src="<?php echo $URL?>/public/images/platanopedia_boton_regresar.png" width="260">
        </a>
    </div>

    </body>
</html>

