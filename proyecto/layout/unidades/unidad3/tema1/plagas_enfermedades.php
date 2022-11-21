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
            Unidad 3 - Control de Plagas y Enfermedades | Platanopedia
        </title>
        <link rel="icon" href="<?php echo $URL?>/public/images/platanopedia_logo-1.png">
        <link rel = "stylesheet" href="master_tema1.css">
        <meta name = "viewport" content = "width = device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0">

    </head>

    <body>

        <a>Unidad 3 | Control de Plagas y Enfermedades - Platanopedia</a>
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

        <div>
            <header>
                <div> <img id="platanopedia_unidad3-1" src="images/platanopedia_contenido_u3.png" alt=""> </div> <!--IMAGEN CABECERA-->
                <h1 id="Subtitulo"> Plagas y enfermedades </h1>
            </header>

            <div class = "content">     <!-- DIV PRINCIPAL -->

                <!-- INTRO - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="intro">
                    <h2> Introducción </h2>

                    <p class = "Texto">
                        El Quindío presenta una climatología casi utópica, propicia para el cultivo de muchos tipos de productos
                        agrícolas, entre ellos el plátano. Sin embargo, no se encuentra exento de contraer enfermedades o plagas
                        que afecten su cultivo. En este artículo se exponen las plagas más frecuentes que presenta el cultivo de
                        este producto y el tratamiento adecuado que se puede dar para combatirlas.
                    </p>


                    <div> <img class="imagenes" id = "intro1" src = "images/bananos.jpg" alt=""> </div> <!-- IMAGEN 1-->


                    <button class="sig" onclick="introS()"> Siguiente </button>

                </div>

                <!-- Moko - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="moko">
                    <h2> Moko del plátano: </h2>

                    <p class = "Texto" >
                        Se trata de una marchitez bacteriana que está tomando cada vez más preponderancia en los cultivos de plátano.
                        ¿Agente causal? La enfermedad la causa la bacteria Ralstonia Solanacearum 2.
                        Este patógeno ataca a todas las variedades de plátanos. <br> <br>
                    </p>


                    <div> <img class="imagenes" id = "moko" src = "images/moko.png" alt=""> </div>     <!-- IMAGEN 2-->

                    <h3> Sintomatología... </h3>
                    <p class="sintomas">
                        “El síntoma inicia en la hoja central o bandera hacia hojas de mayor edad. Las hojas infectadas se marchitan,
                        se doblan y quedan adheridas a la planta. La enfermedad tapona los conductos dando lugar al amarillamiento y
                        marchitez, semejantes a los que la planta manifiesta por sequía.”
                    </p>

                    <p>
                        Los frutos infectados por esta enfermedad tienen la pulpa podrida y los tejidos vasculares del mismo descoloridos.<br><br>

                        Los racimos desarrollan zonas necróticas (maduración prematura y parcial de cada uno de los frutos).
                        El raquis presenta una decoloración y / o tonalidad oscura en los haces vasculares de la planta.
                        El centro se torna rojizo o marrón y se crea una consistencia viscosa. Las hojas jóvenes se tornan
                        verde-pálidas o amarillas. Semanas después todas las hojas se pueden colapsar.
                        Los dobles de las hojas se dan entre la base de la lámina foliar y el extremo apical del peciolo.
                        Exudados bacterianos en la base de las brácteas. <br>
                    </p>

                    <div> <img class="imagenes" id = "mokos" src = "images/masmokos.png" alt=""> </div>

                    <section class="preguntas" id="po1">  <!-- Pregunta Opcional 1  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> ¿Cuál es el agente causal del Moko?</h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>     <input type="radio" value="1" name="po1" onclick="respuesta(1,this)"> El aire  </label>

                        <label>     <input type="radio" value="2" name="po1" onclick="respuesta(1,this)"> Un insecto llamado Picudo   </label>

                        <label>     <input type="radio" value="3" name="po1" onclick="respuesta(1,this)"> Una bacteria llamada Ralstonia Solanacearum     </label>

                        <label>     <input type="radio" value="4" name="po1" onclick="respuesta(1,this)"> No se sabe </label>

                        <button class="botoncomprobar" onclick="comprobar(1)"> COMPROBAR </button>    <!-- BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>


                    <h3> Propagación...</h3>
                    <p>
                        Se propaga por insectos, movilización del material vegetal, lluvia, riego y drenaje,
                        contacto entre raíces de plantas enfermas con sanas, herramientas de trabajo contaminadas y
                        transporte de suelo contaminado por personas. <br> <br>
                    </p>

                    <h3> Control / tratamiento...</h3>
                    <p>
                        Una vez el Moko se involucra en un cultivo, no hay manera de erradicarlo.
                        Las acciones preventivas van enfocadas a tratarlo para que abarque el menor número posible de plantas,
                        pero como tal la enfermedad no se puede combatir para su eliminación.
                        A continuación se presentan algunas recomendaciones:
                    </p>

                    <ol>
                        <li> <h4> Control químico: </h4>
                            Se recomienda la pulverización de aceites minerales después del corte de los rizomas expuestos.
                        </li>

                        <li> <h4> Propagación de material sano. </h4> </li>

                        <li> <h4> Eliminar todo material infestado. </h4>
                            (Frutos, hijuelos, hojas, tallos)
                        </li>

                        <li> <h4> Evitar presencia de heliconias cerca al campo de cultivo: </h4>
                            Para empezar una nueva plantación eliminar las malezas, pues son hospedantes de la enfermedad.
                            Eliminar las flores masculinas, pues allí se acumula una alta cantidad de inóculo.
                        </li>

                    </ol>

                    <button class="sig" onclick="mokoA()"> Anterior </button>
                    <button class="sig" onclick="mokoS()"> Siguiente </button>

                </div>

                <!-- SIGATOKA  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="sigatoka">
                    <h2> Sigatoka: </h2>     <!-- TERCERA PARTE DE LA PÁGINA-->

                    <div> <img class="imagenes" id = "sigatoka" src = "images/sigatoka.png" alt=""> </div>

                    <p>
                        Nombre científico: Mycosphaerella fijiensis var. Difformis (sigatoka negra), Mycosphaerella musicola (sigatoka amarilla). <br>

                        Dentro de las enfermedades fúngicas (hongos) que atacan al plátano, la Sigatoka (especialmente la negra)
                        es de las más serias a nivel mundial, causando pérdidas a nivel mundial de más de $2500USD por año. <br> <br>

                        Se trata de una pigmentación por lo general de color amarilla o negra, que aparece en las hojas y se va esparciendo
                        hasta alcanzar la totalidad de estas, marchitando la planta finalmente.
                        Fue reportada por primera vez en Latinoamérica en Guatemala en el año 1963, aunque existen dataciones más antiguas
                        en Hawai, y por primera vez en el mundo, en el Valle de Sigatoka de las islas Fiyi, de ahí el nombre de la enfermedad.
                        <br><br>
                    </p>


                    <h3> Sintomatología... </h3>

                    <p>
                        Manchas longitudinales en la hoja, de color marrón o amarillo dependiendo del caso de la sigatoka. (Negra o amarilla).<br><br>

                        Para ambos casos puede darse coalescencia de manchas, con destrucción de grandes áreas del limbo.
                        La sigatoka negra es más peligrosa porque ataca hojas jóvenes fotosintetizadoras,
                        con lo que disminuye el rendimiento y la calidad de la cosecha.<br><br>

                        Inicialmente aparece un punto blanquecino que corresponde al sitio donde la espora (conidia o ascospora)
                        de la enfermedad comienza a atacar las células de la hoja.
                        Posteriormente se forman manchas que consisten en un punto muerto, rodeado de un color amarillo que comienzan a
                        crecer y se van uniendo hasta formarse grandes segmentos de tejido muerto esto debido a la pérdida de clorofila.
                        El efecto de la enfermedad sobre la planta consiste en que al destruirse las hojas la calidad del
                        racimo disminuye notoriamente. <br><br>

                        El tiempo que transcurre entre la aparición de la primera espora y la propagación de nuevas es
                        aproximadamente de 30 días. <br><br>
                    </p>

                    <h3> Propagación... </h3>
                    <p>
                        Según los estudios en torno a este hongo, la Sigatoka se propaga por el mismo aire.
                        Lo que significa que la Sigatoka puede presentarse ineluctablemente en cualquier cultivo.
                    </p>

                    <h3> Control y tratamiento... </h3>

                    <ul>                                    <!-- VIÑETAS PARTES DEL PLÁTANO. ol es la Parent list -->
                        <li> Deshojado continuo, sobre todo si se tiene el problema. </li> <br><br>

                        <li> Eliminación rápida de plantas cosechadas. </li>  <br><br>

                        <li> Incrementar el vigor de la planta: fertilización, aplicación de materia orgánica,
                            control de nematodos, etc.</li> <br><br>

                        <li> Aplicación de fungicidas de contacto (mancozeb) o sistémicos (tebuconazole),
                            la idea es llegar con el máximo número de hojas a la cosecha.
                        </li> <br><br>

                        <li> Densidad de plantación y deshije. </li>  <br><br>

                    </ul>

                    <div> <img class="imagenes" id = "deshije" src = "images/deshije.png" alt=""> </div>     <!-- IMAGEN 3-->


                    <section class="preguntas" id="po2">  <!-- Pregunta Opcional 2  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> Recomendación principal para prevenir el Moko en un cultivo: </h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>    <input type="radio" value="1" name="po2" onclick="respuesta(2,this)"> Mantener heliconias alejadas del cultivo  </label>

                        <label>    <input type="radio" value="2" name="po2" onclick="respuesta(2,this)"> Deshojado continuo           </label>

                        <label>    <input type="radio" value="3" name="po2" onclick="respuesta(2,this)"> Aplicación de fungicidas      </label>

                        <label>    <input type="radio" value="4" name="po2" onclick="respuesta(2,this)"> Llamar a la policía </label>

                        <button class="botoncomprobar" onclick="comprobar(2)"> COMPROBAR </button>  <!--  BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>

                    <button class="sig" onclick="sigatokaA()"> Anterior </button>
                    <button class="sig" onclick="sigatokaS()"> Siguiente </button>

                </div>

                <!-- ELEFANTIASIS - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="elefantiasis">
                    <h2> Elefantiasis: </h2>

                    <p>
                        Es una alteración que se presenta en diferentes zonas del país,
                        este problema produce disminución en las cosechas y reducción de los ingresos del productor.
                        No se conoce aún el agente que lo causa. La Elefantiasis o Pie Gigantesco se transmite cuando
                        se emplea semilla obtenida de plantaciones afectadas.
                        Hasta el momento no se conoce de casos en el que el disturbio haya sido transmitido por
                        herramientas contaminadas o Infectadas.
                    </p>

                    <h3> Sintomatología... </h3>
                    <p>
                        Exagerado crecimiento de la cepa y  rompimiento de los calcetos en la base de la planta,
                        quedando la cepa  al descubierto. <br><br>

                        Después del total descubrimiento de la cepa, esta toma la forma del pie de un elefante.<br><br>

                        Se produce un embalconamiento acompañado de la destrucción de los colinos.<br><br>

                        Los tejidos de la planta se vuelven quebradizos y las plantas
                        adultos o con racimo se vuelcan fácilmente.<br><br>

                        Si se llega a producir racimo, es muy pequeño y sus frutos muy anormales.<br><br>
                    </p>


                    <div> <img class="imagenes" id = "elefantiasis" src = "images/elefantiasis.png" alt=""> </div>   <!-- IMAGEN 4-->

                    <h3> Control y tratamiento...</h3>
                    <p>
                        Aunque no se conoce el agente causal de la elefantiasis,
                        la experiencia ha demostrado  que esta alteración puede manejarse si se realizan las siguientes recomendaciones:
                    </p>

                    <ul>
                        <li>
                            Haga analizar el suelo con el fin de elaborar un plan de aplicación de Cal y Fertilización adecuadas.
                        </li>

                        <li>
                            Destruya todo el material vegetal en el sitio donde se encuentren plantas afectadas por Elefantiasis.
                        </li>

                        <li>
                            Aplique Cal Agrícola en los sitios que presentan problemas de Elefantiasis antes de ser  resembrados.
                        </li>

                        <li>
                            Revise mensualmente cada sitio del nuevo cultivo y erradique las plantas que encuentre afectadas.
                        </li>

                        <li>
                            Dé al cultivo un adecuado manejo agronómico.
                        </li>
                    </ul>

                    <div> <img class="imagenes" id = "elefantes" src = "images/elefantes.png" alt=""> </div>   <!-- IMAGEN 4-->

                    <section class="preguntas" id="po3">  <!-- Pregunta Opcional 2  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> Aproximadamente ¿cuánto tiempo hay entre la primera espora y la propagación de la sigatoka? </h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>    <input type="radio" value="1" name="po3" onclick="respuesta(3,this)"> La sigatoka no usa esporas  </label>

                        <label>    <input type="radio" value="2" name="po3" onclick="respuesta(3,this)"> No es la sigatoka, es la elefantiasis            </label>

                        <label>    <input type="radio" value="3" name="po3" onclick="respuesta(3,this)"> Exactamente 2 meses      </label>

                        <label>    <input type="radio" value="4" name="po3" onclick="respuesta(3,this)"> 30 días aproximadamente </label>

                        <button class="botoncomprobar" onclick="comprobar(3)"> COMPROBAR </button>  <!--  BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>

                    <button class="sig" onclick="elefantiasisA()"> Anterior </button>
                    <button class="sig" onclick="elefantiasisS()"> Introducción </button>

                </div>
                <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


            </div> <!-- DIV PRINCIPAL-->

            <!-- SE VINCULA CON EL JAVA SCRIPT PARA LA PREGUNTA -->
            <script src = "log_tema3.js">    </script>
        </div>

        <div class="footer">
            <img src="<?php echo $URL?>/public/images/trabuko_logo.png" width="70">
        </div>

    </body>
</html>
