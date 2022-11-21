<?php
include('../../../../app/config/config.php');
include('../../../../app/config/conexion.php');

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
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="master_quiz3.css">
        <title>Unidad 3 - Quiz | Platanopedia</title>
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

        <div class="regresar">
            <a href="<?php echo $URL?>/layout/unidades/unidad3/portal_unidad3.php">
                <img src="<?php echo $URL?>/public/images/platanopedia_boton_regresar.png" width="150">
            </a>
        </div>

        <h1>Cuestionario Unidad 3</h1>

        <!-- Pantalla inicial -->
        <div id="pantalla-inicial">
            <p>Plagas y enfermedades</p>
            <button class="btn" onclick="comenzarJuego()">Iniciar prueba</button>
            <div class="ImgInicial"> <img src="img/platanopedia_unidad3-1.png" alt="" id="ImgUnidad1"> </div>
        </div>

        <!-- Pantalla juego -->
        <div class="pantalla-juego" id="pantalla-juego">

            <img src="img/pregunta1U3.svg" alt="" id="imgBandera">

            <div class="opciones">
                <div class="opcion" id="op0" onclick="comprobarRespuesta(0)">
                    <div class="letra" id="l0">A</div>
                    <div class="nombre" id="n0">OPCION A</div>
                </div>
                <div class="opcion" id="op1" onclick="comprobarRespuesta(1)">
                    <div class="letra" id="l1">B</div>
                    <div class="nombre" id="n1">OPCION B</div>
                </div>
                <div class="opcion" id="op2" onclick="comprobarRespuesta(2)">
                    <div class="letra" id="l2">C</div>
                    <div class="nombre" id="n2">OPCION C</div>
                </div>
                <div class="opcion" id="op3" onclick="comprobarRespuesta(3)">
                    <div class="letra" id="l3">D</div>
                    <div class="nombre" id="n3">OPCION D</div>
                </div>
            </div>
        </div>
        <!-- Pantalla final -->
        <div id="pantalla-final">
            <h2>CORRECTAS: <span id="numCorrectas">3</span></h2>
            <h2>INCORRECTAS: <span id="numIncorrectas">2</span></h2>
            <button class="btn" onclick="volverAlInicio()">VOLVER AL INICIO</button>
        </div>

        <div class="footer">
            <img src="<?php echo $URL?>/public/images/trabuko_logo.png" width="70">
        </div>

        <script src="log_quiz3.js"></script>
    </body>
</html>

