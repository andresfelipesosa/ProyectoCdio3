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
            Unidad 2 - Mantenimiento del Cultivo | Platanopedia
        </title>
        <link rel="icon" href="<?php echo $URL?>/public/images/platanopedia_logo-1.png">
        <link rel = "stylesheet" href="master_tema1.css">
        <meta name = "viewport" content = "width = device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0">

    </head>

    <body>

        <a>Unidad 2 | Mantenimiento del Cultivo - Platanopedia</a>
        <div class="head">
            <img src="<?php echo $URL?>/public/images/platanopedia_nombre-2.png" width="400">
        </div>

        <div class="infouser">
            <img src="<?php echo $URL?>/public/images/platanopedia_user.png" width="50">
            <?php echo $name_complete;?>
        </div>

        <div class="regresar">
            <a href="<?php echo $URL?>/layout/unidades/unidad2/portal_unidad2.php">
                <img src="<?php echo $URL?>/public/images/platanopedia_boton_regresar.png" width="150">
            </a>
        </div>

        <div>
            <header>
                <div> <img id="platanopedia_unidad2-1" src="images/platanopedia_contenido_u2.png" alt=""> </div> <!--IMAGEN CABECERA-->
                <h1 id="Subtitulo"> Mantenimiento del cultivo </h1>
            </header>

            <div class = "content">     <!-- DIV PRINCIPAL -->

                <!-- INTRO - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="intro">
                    <h2> Introducción </h2>

                    <p class = "Texto">
                        En Colombia el cultivo del plátano representa gran parte de las exportaciones
                        agrícolas generando aproximadamente 63 millones de dólares como ingresos para el país, por lo tanto,
                        la necesidad de obtener una producción de buena calidad en un cultivo de plátano, es primordial para
                        seguir generando este tipo de utilidades tan valiosas para el producto interno bruto, el campesinado
                        y empresariado colombiano. La cadena productiva del plátano entra entonces a jugar como parte fundamental
                        para la elaboración y cultivo de plantaciones sanas y de primera, que permitan que nuestros
                        productos entren a competir tanto en los mercados locales como internacionales. <br> <br>

                        Para lograr este objetivo, es necesario llevar a cabo procesos adecuados a la hora de la producción
                        en cada cultivo y así supervisar el crecimiento de cada plantación. En este artículo investigativo,
                        se encuentra información respaldada por fuentes bibliográficas que permite abrir un panorama nuevo
                        acerca de mantenimiento del plátano a conciencia en el cultivo y de manera que se acerque a una
                        tecnificación con el fin de solucionar esta carencia que se tiene en el departamento del Quindío y
                        en Colombia en general.
                    </p>

                    <button class="sig" onclick="introS()"> Siguiente </button>

                </div>

                <!-- DESARROLLO - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="desarrollo">
                    <h2> Desarrollo </h2>

                    <p class = "Texto" >
                        En el departamento del Quindío la tecnificación de los cultivos se ha
                        convertido en una necesidad tanto para el control de enfermedades en el
                        plátano como para emplear actividades agrícolas en base a estudios y estándares
                        que no solo le permite al agricultor aumentar su producción, sino que también llevar
                        un control de su cultivo. <br>

                        Inicialmente es muy importante hablar del paso a seguir después de haber sembrado
                        la mata de plátano con 3 kilos de guano de ovino y 200 gramos de roca fosfórica;
                        este consiste en llevar a cabo labores de mantenimiento en cada planta en intervalos
                        de a 15-20 días con el fin de supervisar el crecimiento y estado de esta. <br>

                        Lo primero que se debe hacer es una labor de limpieza del suelo en un radio de un metro y medio
                        desde la base (tallo) del plátano hacia afuera, en esta limpieza se deben remover residuos de los
                        diferentes materiales orgánicos que se pueden desprender de la planta, en específico:
                        Hierba como maleza, basura, hojas caídas, y tallos de la base del plátano.

                        En el mismo periodo de tiempo es importante verificar si la enfermedad de Sigatoka amarilla ha dañado
                        más del 50% de la hoja y eliminarla por completo. Si el porcentaje es menor no es necesaria la
                        poda de la misma. Como se observa en la siguiente figura.

                    </p>


                    <div> <img class="imagenes" id = "Sigatoka" src = "images/sigatoka.png" alt=""> </div>     <!-- IMAGEN 2-->


                    <section class="preguntas" id="po1">  <!-- Pregunta Opcional 1  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> ¿Cuántos kilos de guamo de ovino y gramos de roca fosfórica para sembrar? </h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>     <input type="radio" value="1" name="po1" onclick="respuesta(1,this)"> 4 kilos de guamo y 200 kilos de roca  </label>

                        <label>     <input type="radio" value="2" name="po1" onclick="respuesta(1,this)"> 10 kilos de ambos             </label>

                        <label>     <input type="radio" value="3" name="po1" onclick="respuesta(1,this)"> 200 gramos de guamo y 4 kilos de roca         </label>

                        <label>     <input type="radio" value="4" name="po1" onclick="respuesta(1,this)"> 4 kilos de guamo y 200 gramos de roca </label>

                        <button class="botoncomprobar" onclick="comprobar(1)"> COMPROBAR </button>    <!-- BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>

                    <p>
                        En la figura 2 se puede observar cómo se realiza esta labor de limpieza y “barrido” de
                        residuos orgánicos de la base de la planta  respetando el espaciado previamente establecido. <br>

                        El procedimiento anterior tiene como objetivo el permitir el tener un cuidado
                        con el crecimiento de la planta sin ningún tipo de obstáculo e impurezas.
                    </p>

                    <div> <img class="imagenes" id = "Radiolimpieza" src = "images/radiolimpieza.png" alt=""> </div>

                    <button class="sig" onclick="desarrolloA()"> Anterior </button>
                    <button class="sig" onclick="desarrolloS()"> Siguiente </button>

                </div>

                <!-- FERTILIZACIÓN  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="fertilizacion">
                    <h2> Fertilización </h2>     <!-- SEGUNDA PARTE DE LA PÁGINA-->

                    <p>
                        Este paso es sumamente importante para que la planta de plátano tenga los suficientes nutrientes
                        para el crecimiento y desarrollo del fruto como tal, por eso es importante la implementación de
                        este paso durante el mantenimiento del cultivo de plátano. <br> <br>

                        Existe el uso de productos orgánicos e inorgánicos en el cultivo del plátano para la fertilización
                        del este, sin embargo, es importante aclarar que el uso que se le da y el impacto recaen en las veces
                        que anualmente se usa en una sola plantación. <br> <br>

                        Lo esencial es tener una alta frecuencia en la aplicación de estos productos sea el tipo que sea por
                        lo que, entre dos y cinco aplicaciones por año. Ahora bien, en la tabla 1 se presenta la gran variedad
                        de productos que existen en el mercado Quindiano tanto para productos orgánicos como inorgánicos. <br>
                    </p>

                    <div> <img class="imagenes" id = "tablafer" src = "images/tablafer.png" alt=""> </div>

                    <p>
                        La facilidad del uso de los fertilizantes orgánicos radica en que estos se pueden fabricar y procesar por
                        los mismos agricultores, permitiendo así utilizar materia orgánica residual abundante en todas las
                        fincas e implementarla como fertilizante. <br> <br>

                        Un punto importante es el estudio del suelo, ya que este permite escoger el tipo de producto fertilizante
                        necesario para la implementación en el cultivo, debido a que muchas veces algunos de los nutrientes y elementos
                        que traen los productos no se aprovechan correctamente a causa de la composición natural del suelo en donde se siembra.
                        En la figura que sigue se puede observar el procedimiento para llevar a cabo la fertilización de una planta de plátano, roseando
                        con el producto alrededor del tallo de la misma en un diámetro de aproximadamente 1.5 metros; distancia similar a la de
                        limpieza de residuos. <br>
                    </p>

                    <div> <img class="imagenes" id = "fertilizar" src = "images/fertilizar.png" alt=""> </div>

                    <h3 id="sefertilizacon"> Se fertiliza con...</h3>
                    <ol>                                    <!-- VIÑETAS PARTES DEL PLÁTANO. ol es la Parent list -->
                        <h3> <li> Nitgrógeno: </li> </h3>
                        <p>
                            En suelos de menos del 3% de materia orgánica (La urea en dosis bajas de 40g, 4 veces por año) <br>
                        </p>

                        <h3> <li> Fósforo: </li> </h3>
                        <p>
                            No es el caso quindiano, pero si se llega a tener un déficit en
                            este elemento es bueno aplicar 100 g de roca fosfórica. <br>
                        </p>

                        <h3> <li> Potasio: </li> </h3>
                        <p>
                            Cuando hay menos de 0.35 meq de concentración de potasio por 100 gramos de suelo. <br>
                        </p>

                        <h3> <li> Magnesio: </li> </h3>
                        <p>
                            Es uno de los elementos más críticos de la zona.
                            Se requiere su aplicación si hay menos de 1.0 me por 100 gramos de suelo o existe desequilibrio con el potasio
                            (K: Mg = 50) . Se sugiere aplicar de 15 a 30 gramos de MgO por sitio-año fraccionados en 2 o 3 aplicaciones.<br>
                        </p>

                    </ol>


                    <p>
                        En cuanto al tema de Aplicación de agroquímicos o en otras palabras plaguicidas, se tiene que en el Quindío se
                        usa principalmente el lorsban y furadan y la cal como desinfectante, además del engeo y otros
                        productos como el Hipoclorito, yodo, SPE, formol y cloro que funcionan nuevamente como desinfectantes
                        para la prevención de plagas y enfermedades.

                        Cuando hablamos de las cantidades podemos encontrar que el uso de plaguicidas
                        por planta es de entre 30 y 100 gramos.
                    </p>

                    <section class="preguntas" id="po2">  <!-- Pregunta Opcional 2  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> Uno de los siguientes es un fertilizante inorgánico </h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>    <input type="radio" value="1" name="po2" onclick="respuesta(2,this)"> Compostaje  </label>

                        <label>    <input type="radio" value="2" name="po2" onclick="respuesta(2,this)">Urea           </label>

                        <label>    <input type="radio" value="3" name="po2" onclick="respuesta(2,this)"> Bocashi       </label>

                        <label>    <input type="radio" value="4" name="po2" onclick="respuesta(2,this)"> Crotolamo </label>

                        <button class="botoncomprobar" onclick="comprobar(2)"> COMPROBAR </button>  <!--  BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>

                    <button class="sig" onclick="fertilizacionA()"> Anterior </button>
                    <button class="sig" onclick="fertilizacionS()"> Siguiente </button>

                </div>

                <!-- CULTIVO DEL PLÁTANO - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="embolsado">
                    <h2> Embolsado: </h2>

                    <p>
                        En el departamento del Quindío está activa una plaga relacionada con el ataque de insectos como avispas
                        al fruto del plátano, este puede ser contrarrestado con el el cubrimiento por medio de una bolsa plástica
                        de el racimo en crecimiento de plátano, lo cual funciona como barra protectora del mismo. <br> <br>

                        Estas bolsas suelen marcarse con colores representando el tiempo de embolsado que  lleva cada una de las plantas,
                        con el objetivo común de llevar un control a la hora de la cosecha, los colores regularmente se cambian cada 15 días
                        en un cultivo.<br> <br>

                        Otro de los beneficios que trae este procedimiento es que mejora la calidad del fruto, además de acelerar
                        el crecimiento del mismo, que son de los objetivos planteados al inicio de este artículo y a su vez permite
                        llevar un control tecnificado del cultivo.
                    </p>

                    <div> <img class="imagenes" id = "bolsaplatano" src = "images/bolsaplatano.jpg" alt=""> </div>   <!-- IMAGEN 4-->

                    <section class="preguntas" id="po3">  <!-- Pregunta Opcional 2  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> Las bolsas que cubren el plátano suelen marcarse con... </h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>    <input type="radio" value="1" name="po3" onclick="respuesta(3,this)"> Letras del abecedario  </label>

                        <label>    <input type="radio" value="2" name="po3" onclick="respuesta(3,this)"> Números del 1 al 100           </label>

                        <label>    <input type="radio" value="3" name="po3" onclick="respuesta(3,this)"> Depende, no siempre se usan bolsas       </label>

                        <label>    <input type="radio" value="4" name="po3" onclick="respuesta(3,this)"> Colores que indican el tiempo de cosecha </label>

                        <button class="botoncomprobar" onclick="comprobar(3)"> COMPROBAR </button>  <!--  BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>

                    <button class="sig" onclick="embolsadoA()"> Anterior </button>
                    <button class="sig" onclick="embolsadoS()"> Introducción </button>

                </div>
                <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


            </div> <!-- DIV PRINCIPAL-->

            <!-- SE VINCULA CON EL JAVA SCRIPT PARA LA PREGUNTA -->
            <script src = "log_tema2.js">    </script>
        </div>

        <div class="footer">
            <img src="<?php echo $URL?>/public/images/trabuko_logo.png" width="70">
        </div>

    </body>
</html>
