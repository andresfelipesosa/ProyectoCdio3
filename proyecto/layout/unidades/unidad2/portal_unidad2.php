<?php
include('../../../app/config/config.php');
include('../../../app/config/conexion.php');

session_start();
if(isset($_SESSION['sesion_username'])){

    $username = $_SESSION['sesion_username'];

    $query_login = $pdo->prepare("SELECT * FROM tb_usuarios WHERE username = '$username'");
    $query_login->execute();

    $usuarios = $query_login->fetchAll(PDO::FETCH_ASSOC);

    foreach ($usuarios as $usuario){
        $nombres = $usuario['nombres'];
        $apellido1 = $usuario['apellido_pri'];
        $apellido2 = $usuario['apellido_sec'];
        $name_complete = $nombres. " ". $apellido1. " ". $apellido2;
    }

}else {
    echo "no existe sesión";
    header('Location: '.$URL.'/login/index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Unidad 2 | Mantenimiento del Cultivo - Platanopedia</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $URL?>/public/css/master_unidad2.css">
        <link rel="icon" href="<?php echo $URL?>/public/images/platanopedia_logo-1.png">
    </head>

    <body>
        <a>Unidad 2 | Mantenimiento del Cultivo - Platanopedia</a>
        <div class="head">
            <a href="<?php echo $URL?>/layout/unidades/portal_principal.php">
                <img src="<?php echo $URL?>/public/images/platanopedia_nombre-2.png" width="400">
            </a>
        </div>

        <div class="infouser">
            <img src="<?php echo $URL?>/public/images/platanopedia_user.png" width="50">
            <?php echo $name_complete;?>
        </div>

        <div>

            <div class="gallery">
                <a href="tema1/mantenimiento_cultivo.php">
                    <img src="<?php echo $URL?>/public/images/platanopedia_contenido_u2.png" width="100"
                </a><br>
                <a>Contenido</a>
            </div>

            <div class="gallery">
                <a href="quiz2/quiz2.php">
                    <img src="<?php echo $URL?>/public/images/platanopedia_quiz.png" width="100"
                </a><br>
                <a>Cuestionario</a>
            </div>
        </div>

        <div class="footer">
            <img src="<?php echo $URL?>/public/images/trabuko_logo.png" width="70">
        </div>
    </body>
</html>