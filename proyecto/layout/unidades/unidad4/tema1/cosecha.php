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
<html lang = "en">

    <head>

        <meta charset="UTF-8">

        <title>
            Unidad 4 - Cosecha del Plátano | Platanopedia
        </title>
        <link rel="icon" href="<?php echo $URL?>/public/images/platanopedia_logo-1.png">
        <link rel = "stylesheet" href="master_tema1.css">
        <meta name = "viewport" content = "width = device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0">

    </head>

    <body>

        <a>Unidad 4 | Cosecha del Plátano - Platanopedia</a>
        <div class="head">
            <img src="<?php echo $URL?>/public/images/platanopedia_nombre-2.png" width="400">
        </div>

        <div class="infouser">
            <img src="<?php echo $URL?>/public/images/platanopedia_user.png" width="50">
            <?php echo $name_complete;?>
        </div>

        <div class="regresar">
            <a href="<?php echo $URL?>/layout/unidades/unidad4/portal_unidad4.php">
                <img src="<?php echo $URL?>/public/images/platanopedia_boton_regresar.png" width="150">
            </a>
        </div>

        <div>
            <header>
                <div class="imgcabecera"> <img id="platanopedia_unidad4" src="images/platanopedia_contenido_u4.png" alt=""> </div> <!--IMAGEN CABECERA-->
                <h1 id="Subtitulo"> Cosecha</h1>
            </header>

            <div class = "content">

                <!-- INTRODUCCIÓN - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="intro">
                    <h2> Introducción </h2>

                    <p class = "Texto"> Cuando se está realizando la cultivación de plátano se
                        lleva un un proceso completo desde el estudio del terreno de la finca
                        donde se cultiva, hasta cuando el plátano ya ha madurado lo suficiente
                        para su corte y cosecha para una distribución final. Para que el
                        producto final del plátano sea de excelente calidad y la producción a
                        su misma vez, tenga grandes cantidades, se deben llevar a cabo procesos
                        que permitan llevar una cultivación de la mata de plátano de manera
                        tecnificada, con el objetivo de tener un aumento y control de la producción.
                        En el presente artículo investigativo se compila información respaldada por
                        fuentes bibliográficas, que abren el panorama hacia la cosecha de plátano y
                        algunos de los métodos y procedimientos que se pueden llevar a cabo en este
                        último bloque tan importante de la fase de producción y cultivo del plátano
                        enfocado en el departamento del Quindío, Colombia. <br><br>

                        La cosecha del plátano se debe realizar cuando el fruto de esta planta
                        llega a la maduración necesaria para la comercialización, venta y distribución
                        ya sea en mercados locales o en su defecto, mercados internacionales.
                        Para esto, tradicionalmente el campesino o cultivador ha empleado herramientas
                        como el simple sentido de la vista para que a criterio propio se decida sobre cuándo
                        se requiere cortar el fruto de la mata.

                    </p>

                    <div> <img class="imagenes" id = "Partes" src = "images/calibre-banano-procesos-iq.jpg" alt=""> </div>     <!-- IMAGEN 2-->

                    <button class="sig" onclick="introS()"> Siguiente </button>

                </div>
                <!-- DETERMINACIÓN - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="determinación">
                    <h2> Determinación para la cosecha: </h2>     <!-- SEGUNDA PARTE DE LA PÁGINA-->

                    <p>
                        Se sabe que en un cultivo platanero se realizan labores de
                        mantenimiento cada 15 o 20 días con el objetivo de llevar un
                        control de limpieza de las plantas. Desde un punto de vista
                        lógico supondremos que  en uno de estos intervalos de tiempo
                        el racimo estaría listo para ser cortado, pero esto no ocurre
                        así de fácil. <br><br>

                        La cosecha es un tanto incierta en razón al tiempo de sembrado,
                        he aquí el porqué durante el embolsado se marca con colores cada
                        uno de los racimos con el objetivo de llevar un control en el tiempo
                        de cultivo. Por esta razón es que en un cultivo no existen temporadas
                        para recolección del fruto del plátano. <br><br>

                        Ahora bien, con fines comerciales y de calidad en el producto final,
                        es necesario que el plátano tenga el tamaño adecuado para su respectivo
                        cultivo o corte. En términos generales y no locales
                        (departamento del Quindío), el proceso de maduración tarda entre 14 y
                        dieciséis semanas y media; tiempo en el cual el racimo ha alcanzado
                        el óptimo tamaño para su comercialización.<br><br>

                        En la tabla se evidencia algunas de las características que debe cumplir el plátano a la hora de la cosecha.
                    </p>
                    <div> <img class="imagenes" id = "frutoplatano" src = "images/tabla.JPG" alt=""> </div>     <!-- IMAGEN 3-->


                    <section class="preguntas" id="po1">  <!-- Pregunta Opcional 2  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> ¿Cada cuanto se realizan labores de mantenimiento en el cultivo? </h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>    <input type="radio" value="1" name="po1" onclick="respuesta(1,this)"> 1 día  </label>

                        <label>    <input type="radio" value="2" name="po1" onclick="respuesta(1,this)"> 10 días           </label>

                        <label>    <input type="radio" value="3" name="po1" onclick="respuesta(1,this)"> 15 días     </label>

                        <label>    <input type="radio" value="4" name="po1" onclick="respuesta(1,this)"> 21 días </label>

                        <button class="botoncomprobar" onclick="comprobar(1)"> COMPROBAR </button>  <!--  BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>

                    <p>
                        Como lo que se requiere es una mayor calidad de fruto y aumento en el
                        tamaño en la producción, es sumamente importante que durante el proceso
                        de maduración del racimo del plátano le lleguen los suficientes nutrientes
                        para cumplir con las características de la tabla , además de un tamaño considerable.<br><br>

                        La bellota es la flor que acompaña al racimo de plátano y cuelga de
                        él en su parte inferior y consume parte de los nutrientes que absorbe
                        la planta resultado de los procesos de fertilización y  abonado.
                        En consecuencia, se debe realizar un corte de esta bellota con el objetivo
                        de que la mayoría de nutrientes lleguen al fruto y le permita tener mayores
                        suplementos nutricionales para su crecimiento. <br><br>

                        En la Figura se puede observar como la bellota cuelga
                        de la mata de plátano en forma de flor. Por otra parte, en la figura 3 se evidencia
                        el racimo con esta bellota cortada.
                    </p>
                    <div> <img class="imagenes" id = "frutoplatano" src = "images/bellota.JPG" alt=""> </div>

                    <p>
                        Entonces el corte de esta bellota debe realizarse cuando el racimo
                        completa su llenado, es decir, cuando todos los frutos han terminado
                        de emerger. Este corte se debe realizar de manera horizontal.
                    </p>

                    <button class="sig" onclick="determinaciónA()"> Anterior </button>
                    <button class="sig" onclick="determinaciónS()"> Siguiente </button>
                </div>
                <!-- MOMENTO DE COSECHA - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="momento">
                    <h2> Plagas y enfermedades: </h2>
                    <p>
                        Como se había explicado en el departamento del
                        Quindío el momento de cosecha es un tanto incierto,
                        pero por motivos de la investigación y tecnificación de este
                        proceso se estipularon posibles intervalos de tiempo en los cuales
                        el racimo pudiera estar listo para su recolección. Para no encasillar
                        netamente en este intervalo de tiempo es necesario tomar en cuenta otros
                        factores tales como la demanda en el mercado, el color de la
                        etiqueta del embolsado y una característica sumamente importante como
                        lo es el grosor de los dedos en el racimo.<br><br>

                        Cuando se cumple el tamaño deseado se realiza el corte
                        del racimo de forma estrictamente cuidadosa con el objetivo de no
                        destruir o maltratar la fruta del cultivo platanero.
                    </p>
                    <div> <img class="imagenes" id = "frutoplatano" src = "images/corte.JPG" alt=""> </div>
                    <p>
                        Posteriormente, se debe realizar un lavado del plátano con agua
                        totalmente limpia por aproximadamente 15 minutos; tiempo el cual
                        puede variar dependiendo del gusto del agricultor, el cual permite
                        la remoción de impurezas como el polvo y suciedades no deseadas para
                        el procesamiento final. <br><br>

                        Por último se realiza el corte del tallo de la planta en forma de
                        número 1 a un metro de altura para permitir el crecimiento de los nuevos
                        hijuelos. Posterior a esto el ciclo se repite.<br><br>
                    </p>


                    <section class="preguntas" id="po2">  <!-- Pregunta Opcional 2  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> ¿En que dirección se debe realizar el corte de la bellota? </h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>    <input type="radio" value="1" name="po2" onclick="respuesta(2,this)"> Hacia abajo </label>

                        <label>    <input type="radio" value="2" name="po2" onclick="respuesta(2,this)"> Hacia arriba            </label>

                        <label>    <input type="radio" value="3" name="po2" onclick="respuesta(2,this)"> Horizontal         </label>

                        <label>    <input type="radio" value="4" name="po2" onclick="respuesta(2,this)"> Vertical </label>

                        <button class="botoncomprobar" onclick="comprobar(2)"> COMPROBAR </button>  <!--  BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>

                    <button class="sig" onclick="momentoA()"> Anterior </button>
                    <button class="sig" onclick="momentoS()"> Siguiente </button>

                </div>
                <!-- APROVECHAMIENTO DE RESIDUOS - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="aprovechamiento">
                    <h2> Aprovechamiento de residuos:</h2>
                    <p>
                        Se sabe que al final de la cosecha del plátano
                        quedan muchos residuos de características orgánicas que pueden ser
                        usados para incentivar la reutilización del contenido nutricional
                        que se podría perder a la hora del corte.<br><br>

                        Por último se realiza el corte del tallo de la
                        planta en forma de número 1 a un metro de altura para permitir
                        el crecimiento de los nuevos hijuelos. Posterior a esto el ciclo se repite.<br><br>

                        Se sabe que al final de la cosecha del plátano
                        quedan muchos residuos de características orgánicas que
                        pueden ser usados para incentivar la reutilización del contenido
                        nutricional que se podría perder a la hora del corte. <br><br>

                        Entre estos usos de residuos del cultivo, pueden estar el
                        aprovechamiento del almidón que son propias de la planta
                        además del uso de estos como materia prima para la elaboración de
                        plástico biodegradables mediante la extracción de la celulosa de la
                        planta.<br><br>

                        Estos residuos pueden ser la cáscara, el pseudotallo y la raquis del mismo.<br><br>

                        Cuando se aprovechan estos residuos se abre una oportunidad para aumentar la producción
                        de plátano y fortalecer el propio sector.<br><br>
                    </p>

                    <section class="preguntas" id="po3">  <!-- Pregunta Opcional 2  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> ¿En que forma se debe cortar el tallo del plátano? </h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>    <input type="radio" value="1" name="po3" onclick="respuesta(3,this)"> Se corta el tallo completo </label>

                        <label>    <input type="radio" value="2" name="po3" onclick="respuesta(3,this)"> En forma de uno          </label>

                        <label>    <input type="radio" value="3" name="po3" onclick="respuesta(3,this)"> No se corta      </label>

                        <label>    <input type="radio" value="4" name="po3" onclick="respuesta(3,this)"> En pedasitos </label>

                        <button class="botoncomprobar" onclick="comprobar(3)"> COMPROBAR </button>  <!--  BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>

                    <button class="sig" onclick="aprovechamientoA()"> Anterior </button>
                    <button class="sig" onclick="aprovechamientoS()"> Siguiente </button>

                </div>

            </div> <!-- DIV PRINCIPAL -->

            <!-- SE VINCULA CON EL JAVA SCRIPT PARA LA PREGUNTA -->
            <script src = "log_tema4.js">    </script>
        </div>

        <div class="footer">
            <img src="<?php echo $URL?>/public/images/trabuko_logo.png" width="70">
        </div>

    </body>
</html>
