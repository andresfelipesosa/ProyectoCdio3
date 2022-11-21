<?php
include('app/config/config.php');
include('app/config/conexion.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home - Platanopedia</title>
        <link rel="stylesheet" href="<?php echo $URL?>/public/css/master_home.css">
        <link rel="icon" href="<?php echo $URL?>/public/images/platanopedia_logo-1.png">
    </head>
    <body>

        <div class="login-box">
            <img class="avatar" src="<?php echo $URL?>/public/images/platanopedia_logo-1.png" alt="Logo de Platanopedia">
            <h1>Home</h1>
            <div>
                <a href="<?php echo $URL?>/login/index.php">
                    <img src="<?php echo $URL?>/public/images/platanopedia_boton_inicio.png" width="260">
                </a><br>
                <a href="<?php echo $URL?>/register/index.php">
                    <img src="<?php echo $URL?>/public/images/platanopedia_boton_registro.png" width="260">
                </a>
            </div>
        </div>
    </body>
</html>
