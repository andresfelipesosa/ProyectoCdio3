<?php
include('../../app/config/config.php');
include('../../app/config/conexion.php');

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
        $progreso = ($usuario["quiz1"] + $usuario["quiz2"]  + $usuario["quiz3"]  + $usuario["quiz4"] ) * 25;
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
        <title>Portal Principal - Platanopedia</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $URL?>/public/css/master_portalprincipal1.css">
        <link rel="icon" href="<?php echo $URL?>/public/images/platanopedia_logo-1.png">
    </head>
    <body>
    <div class="head">
        <img src="<?php echo $URL?>/public/images/platanopedia_nombre-2.png" width="400">
    </div>

    <div class="infouser">
        <img src="<?php echo $URL?>/public/images/platanopedia_user.png" width="50">
        <?php echo $name_complete;?>
    </div>
    <div class="progress">
        <progress id="userprogress" value="<?php echo $progreso; ?>" max="100"> <?php echo $progreso; ?>% </progress> <?php echo $progreso; ?>%
    </div>

    <div>
        <div class="gallery">
            <a href="<?php echo $URL?>/layout/unidades/unidad1/portal_unidad1.php">
                <img src="<?php echo $URL?>/public/images/platanopedia_unidad1.png" width="100">
            </a>
            <div class="desc">Conceptos básicos de Sembrado</div>
        </div>

        <div class="gallery">
            <a href="<?php echo $URL?>/layout/unidades/unidad2/portal_unidad2.php">
                <img src="<?php echo $URL?>/public/images/platanopedia_unidad2.png" width="100" >
            </a>
            <div class="desc">Mantenimiento del Cultivo</div>
        </div>

        <div class="gallery">
            <a href="<?php echo $URL?>/layout/unidades/unidad3/portal_unidad3.php">
                <img src="<?php echo $URL?>/public/images/platanopedia_unidad3.png" width="100">
            </a>
            <div class="desc">Plagas y Enfermedades</div>
        </div>

        <div class="gallery">
            <a href="<?php echo $URL?>/layout/unidades/unidad4/portal_unidad4.php">
                <img src="<?php echo $URL?>/public/images/platanopedia_unidad4.png" width="100">
            </a>
            <div class="desc">Cosecha</div>
        </div>

        <div class="gallery">
            <a href="<?php echo $URL?>/layout/unidades/unidad5/portal_unidad5.php">
                <img src="<?php echo $URL?>/public/images/platanopedia_unidad5.png" width="100">
            </a>
            <div class="desc">Buenas Prácticas</div>
        </div>
    </div>

    <div class="footer">
        <img src="<?php echo $URL?>/public/images/trabuko_logo.png" width="70">

    </div>

    <div class="close_session">
        <a href="<?php echo $URL?>/login/controller_close_login.php">
            <img src="<?php echo $URL?>/public/images/platanopedia_boton_cerrar.png" width="150">
        </a>
    </div>

    </body>
</html>
