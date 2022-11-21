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
            Unidad 1 - Conceptos Básicos de Sembrado | Platanopedia
        </title>
        <link rel="icon" href="<?php echo $URL?>/public/images/platanopedia_logo-1.png">
        <link rel = "stylesheet" href="master_tema1.css">
        <meta name = "viewport" content = "width = device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0">

    </head>

    <body>

        <a>Unidad 1 | Conceptos básicos de Sembrado - Platanopedia</a>
        <div class="head">
            <img src="<?php echo $URL?>/public/images/platanopedia_nombre-2.png" width="400">
        </div>

        <div class="infouser">
            <img src="<?php echo $URL?>/public/images/platanopedia_user.png" width="50">
            <?php echo $name_complete;?>
        </div>

        <div class="regresar">
            <a href="<?php echo $URL?>/layout/unidades/unidad1/portal_unidad1.php">
                <img src="<?php echo $URL?>/public/images/platanopedia_boton_regresar.png" width="150">
            </a>
        </div>

        <div>
            <header>
                <div> <img id="platanopedia_unidad1-1" src="images/platanopedia_contenido_u1.png" alt=""> </div> <!--IMAGEN CABECERA-->
                <h1 id="Subtitulo"> Conceptos básicos del sembrado </h1>
            </header>

            <div class = "content">     <!-- DIV PRINCIPAL -->

                <!-- INTRO - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="intro">
                    <h2> Introducción </h2>

                    <p class = "Texto"> Hoy en día en Colombia y en el mundo el plátano es una de las
                        delicias que nunca puede faltar en un plato de comida, el
                        Quindío es uno de los departamentos colombianos con mayor
                        producción de este fruto, es por esto que, para el departamento
                        es de suma importancia tener calidad en el producto ofrecido.
                    </p>


                    <div> <img class="imagenes" id = "intro1" src = "images/muchoplatanopai.jpg" alt=""> </div> <!-- IMAGEN 1-->


                    <p class = "Texto" >
                        Existe una gran diversidad de plátanos alrededor del mundo, sin
                        embargo, las variedades comerciales que se consumen hoy día
                        son resultado de un proceso de domesticación, es decir,
                        resultado de la constante selección de características deseables
                        que permitió transformar frutos llenos de semillas, en frutos
                        partenocárpicos (que se forman sin fertilización) carentes de las
                        mismas y que se desarrollan en ausencia de polinización. El
                        inicio de su domesticación tuvo lugar en el cinturón tropical
                        húmedo que se extiende desde la India hasta las Islas Salomón,
                        Nepal, y el norte de Australia, área de distribución natural de
                        las especies silvestres de plátanos que pertenecen al género
                        Musa. La evidencia arqueológica más antigua de plátanos
                        domesticados es de Papúa Nueva Guinea y se ha datado al
                        menos 7,000 años antes del presente. <br>
                        <br>
                    </p>

                    <button class="sig" onclick="introS()"> Siguiente </button>

                </div>

                <!-- COLINO - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="colino">
                    <h2> El colino </h2>

                    <p class = "Texto" >
                        La reproducción de la especie del plátano y de sus derivados, se
                        da a partir del crecimiento de brotes que hacen parte de la
                        misma planta, es decir es como una especia de hijo que nace a
                        raíz de la planta madre. <br>
                        <br>
                        El hijo es un brote lateral que se desarrolla desde el rizoma, y
                        generalmente surge muy cerca de la planta progenitora, también
                        llamada planta madre. En español, se lo conoce como retoño,
                        vástago, brote o colino. <br>
                        <br>
                        Cuando el hijo apenas sale de la superficie del suelo se llama
                        hijuelo. Cuando ya ha crecido y tiene hojas verdaderas (ver
                        abajo) se denomina hijo <br>
                        <br>
                        Morfológicamente hablando, existen dos tipos de hijo: el hijo
                        espada, que tiene hojas estrechas y un rizoma grande, y el hijo
                        de agua, que tiene hojas anchas y un rizoma pequeño. Los hijos
                        de agua tienen una conexión débil con la planta madre y no se
                        desarrollan como una planta fuerte. El número de hijos
                        producidos varía según el tipo de cultivar. El hijo seleccionado
                        para reemplazar a la planta madre después de la fructificación
                        se llama sucesor. <br>
                    </p>


                    <div> <img class="imagenes" id = "Partes" src = "images/458bananero.jpg" alt=""> </div>     <!-- IMAGEN 2-->


                    <section class="preguntas" id="po1">  <!-- Pregunta Opcional 1  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> ¿Qué tan antigua es la primera muestra de plátano domesticado? </h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>     <input type="radio" value="1" name="po1" onclick="respuesta(1,this)"> De hace más de 7000 años  </label>

                        <label>     <input type="radio" value="2" name="po1" onclick="respuesta(1,this)"> Hace 500 años             </label>

                        <label>     <input type="radio" value="3" name="po1" onclick="respuesta(1,this)"> De hace 6000 años         </label>

                        <label>     <input type="radio" value="4" name="po1" onclick="respuesta(1,this)"> Es reciente. Hace 70 años </label>

                        <button class="botoncomprobar" onclick="comprobar(1)"> COMPROBAR </button>    <!-- BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>

                    <button class="sig" onclick="colinoA()"> Anterior </button>
                    <button class="sig" onclick="colinoS()"> Siguiente </button>

                </div>

                <!-- PARTES DE LA PLANTA  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="partesplanta">
                    <h2> Partes de la planta </h2>     <!-- SEGUNDA PARTE DE LA PÁGINA-->

                    <p>
                        La planta del fruto se llama, en términos científicos, herbácea
                        perenne gigante y pertenece a la especie Musa Paradisiaca, esta
                        planta está formada por varias partes que son: la lámina, el
                        peciolo, la planta madre y las hijas, las flores masculinas, el
                        seudotallo, el rizoma original, las raíces y cómo no, el racimo. <br>
                        <br>

                        A continuación, se hablará un poco de algunas de las partes de
                        mencionadas. <br>
                    </p>

                    <ol>                                    <!-- VIÑETAS PARTES DEL PLÁTANO. ol es la Parent list -->
                        <h3> <li> Rizoma o bulbo: </li> </h3>
                        <p>
                            Tallo subterráneo con numerosos puntos de
                            crecimiento (meristemos) que dan origen a pseudotallos, raíces
                            y yemas vegetativas. <br>
                        </p>

                        <h3> <li> Sistema radicular: </li> </h3>
                        <p>
                            Posee raíces superficiales que se
                            distribuyen en una capa de 30-40 cm, concentrándose la mayor
                            parte de ellas en los 15-20 cm. Las raíces son de color blanco,
                            tiernas cuando emergen y amarillentas y duras posteriormente.
                            Su diámetro oscila entre 5 y 8 mm y su longitud puede alcanzar
                            los 2,5-3 m en crecimiento lateral y hasta 1,5 m en profundidad.
                            El poder de penetración de las raíces es débil, por lo que la
                            distribución radicular está relacionada con la textura y
                            estructura del suelo. <br>
                        </p>

                        <h3> <li> Tallo: </li> </h3>
                        <p>
                            El verdadero tallo es un rizoma grande, almidonoso,
                            subterráneo, que está coronado con yemas, las cuales se
                            desarrollan una vez que la planta ha florecido y fructificado. A
                            medida que cada chupón del rizoma alcanza la madurez, su
                            yema terminal se convierte en una inflorescencia al ser
                            empujada hacia arriba desde el interior del suelo por el
                            alargamiento del tallo, hasta que emerge arriba del pseudotallo. <br>
                        </p>

                        <h3> <li> Hojas: </li> </h3>
                        <p>
                            Se originan en el punto central de crecimiento o
                            meristemo terminal, situado en la parte superior del rizoma. Al
                            principio, se observa la formación del pecíolo y la nervadura
                            central terminada en filamento, lo que será la vaina
                            posteriormente. La parte de la nervadura se alarga y el borde
                            izquierdo comienza a cubrir el derecho, creciendo en altura y
                            formando los semilimbos. La hoja se forma en el interior del
                            pseudotallo y emerge enrollada en forma de cigarro. Son hojas
                            grandes, verdes y dispuestas en forma de espiral, de 2-4 m de
                            largo y hasta 1,5 m de ancho, con un peciolo de 1 m o más de
                            longitud y un limbo elíptico alargado, ligeramente decurrente
                            hacia el peciolo, un poco ondulado y glabro. Cuando son viejas
                            se rompen fácilmente de forma transversal por el azote del
                            viento. De la corona de hojas sale, durante la floración, un
                            escapo pubescente de 5-6 cm de diámetro, terminado por un
                            racimo colgante de 1-2 m de largo. Éste lleva una veintena de
                            brácteas ovales alargadas, agudas, de color rojo púrpura,
                            cubiertas de un polvillo blanco harinoso. De las axilas de estas
                            brácteas nacen a su vez las flores. <br>
                        </p>

                        <h3> <li> Flores: </li> </h3>
                        <p>
                            flores amarillentas, irregulares y con seis estambres, de
                            los cuales uno es estéril, reducido a estaminodio petaloideo. El
                            gineceo tiene tres pistilos, con ovario ínfero. El conjunto de la
                            inflorescencia constituye el “régimen” de la platanera. Cada
                            grupo de flores reunidas en cada bráctea forma una reunión de
                            frutos llamada “mano”, que contiene de 3 a 20 frutos. Un
                            régimen no puede llevar más de 4 manos, excepto en las
                            variedades muy fructíferas, que pueden contar con desde 12 a 14. <br>
                        </p>

                        <h3> <li> Fruto: </li></h3>
                        <p>
                            baya oblonga. Durante el desarrollo del fruto éstos se
                            doblan geotrópicamente, según el peso de este, determinando
                            esta reacción la forma del racimo. Los plátanos son
                            polimórficos, pudiendo contener de 5-20 manos, cada una con
                            2-20 frutos, siendo su color amarillo verdoso, amarillo,
                            amarillo-rojizo o rojo. Los plátanos comestibles son de
                            partenocarpia vegetativa, o sea, desarrollan una masa de pulpa
                            comestible sin ser necesaria la polinización. Los óvulos se
                            atrofian pronto, pero pueden reconocerse en la pulpa
                            comestible. La partenocarpia y la esterilidad son mecanismos
                            diferentes, debido a cambios genéticos, que cuando menos son
                            parcialmente independientes. La mayoría de los frutos de la
                            familia de las Musáceas comestibles son estériles, debido a un
                            complejo de causas, entre otras, a genes específicos de
                            esterilidad femenina, triploidía y cambios estructurales
                            cromosómicos, en distintos grados. <br>
                        </p>

                    </ol>

                    <div> <img class="imagenes" id = "frutoplatano" src = "images/frutoplatano.jpg" alt=""> </div>     <!-- IMAGEN 3-->


                    <section class="preguntas" id="po2">  <!-- Pregunta Opcional 2  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> ¿Cuántos frutos puede contener una sola mano de plátano? </h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>    <input type="radio" value="1" name="po2" onclick="respuesta(2,this)"> Entre 5 y 10 frutos  </label>

                        <label>    <input type="radio" value="2" name="po2" onclick="respuesta(2,this)"> La mano no produce frutos            </label>

                        <label>    <input type="radio" value="3" name="po2" onclick="respuesta(2,this)"> Entre 2 y 20 frutos       </label>

                        <label>    <input type="radio" value="4" name="po2" onclick="respuesta(2,this)"> Sólo 1 fruto </label>

                        <button class="botoncomprobar" onclick="comprobar(2)"> COMPROBAR </button>  <!--  BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>

                    <button class="sig" onclick="partesplantaA()"> Anterior </button>
                    <button class="sig" onclick="partesplantaS()"> Siguiente </button>

                </div>

                <!-- CULTIVO DEL PLÁTANO - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div id="cultivoplatano">
                    <h2> Cultivo del plátano: </h2>

                    <ol>
                        <h3> <li> Selección del terreno: </li> </h3>
                        <p>
                            Es uno de los factores de mayor
                            importancia al establecer el cultivo, ya que guarda gran relación
                            con la vida útil y calidad de la plantación, con la posibilidad de
                            mecanización de ciertas labores, facilidad de cosecha y manejo
                            de problemas fitosanitarios. Debe estar cerca a fuentes de agua,
                            con vías de acceso y tener buenos drenajes o posibilidad de
                            realizarlos. <br>
                        </p>

                        <h3> <li> Adecuación del terreno: </li> </h3>
                        <p>
                            La preparación del terreno para la
                            siembra de plátano depende de factores como la Procedencia
                            del lote a sembrar; sólo en el caso de potreros se justifica el
                            empleo de maquinaria agrícola. Propiedades físicas del suelo
                            como textura, estructura y la topografía del terreno. <br>

                            La preparación del terreno debe involucrar el mínimo de
                            labores para evitar disturbar el suelo y no predisponer las
                            plantas al volcamiento se debe realizar controlando mecánica
                            y/o químicamente las malezas dependiendo del estado de éstas. <br>
                        </p>

                        <h3> <li> Drenajes: </li></h3>
                        <p>
                            Los drenajes se deben realizar en regiones húmedas,
                            donde la precipitación anual es alta y los suelos son planos o
                            ligeramente ondulados. Su objetivo es la evacuación del exceso
                            de agua que se encuentre bien sea en la superficie del suelo o a
                            mayor profundidad, propiciando así buenas condiciones de
                            aireación en la zona radicular.
                        </p>

                        <ul> <!-- VIÑETAS -->
                            <li> <h4> Canales primarios: </h4>
                                <p>
                                    Tienen como función recoger y evacuar
                                    rápidamente las aguas provenientes de los canales
                                    secundarios y terciarios. Para su construcción o adecuación
                                    se puede aprovechar la mayor depresión del terreno, ríos,
                                    caños y quebradas.
                                </p>
                            </li>

                            <li> <h4> Canales secundarios: </h4>
                                <p>
                                    constituyen la base del sistema de
                                    drenajes. Su profundidad y frecuencia están determinados
                                    por la topografía y el nivel freático de los suelos.
                                </p>
                            </li>

                            <li> <h4> Canales terciarios: </h4>
                                <p>
                                    depositan sus aguas en los canales
                                    secundarios. Sirven para mantener el nivel freático a una
                                    profundidad adecuada para las raíces, evacuan rápidamente
                                    las aguas superficiales evitando encharcamientos.
                                </p>
                            </li>

                            <li> <h4> Canales cuaternarios o sangrías: </h4>
                                <p>
                                    Se construyen en áreas
                                    pequeñas donde se producen encharcamientos para evacuar
                                    el agua superficial.
                                </p>
                            </li>
                        </ul>       <!-- FIN VIÑETAS -->

                        <h3> <li> Siembra: </li> </h3>
                        <p>
                            Una vez preparado el terreno y establecidos los
                            drenajes, se procede a realizar la siembra, la cual está
                            condicionada por factores climáticos, principalmente la
                            precipitación. Para su realización se deben seguir los siguientes
                            pasos:
                        </p>

                        <ul>
                            <li> <h4> Trazado, ahoyado y siembra: </h4>
                                <p>
                                    El trazado consiste en marcar
                                    con estacas, los sitios donde quedarán las semillas. Los sistemas
                                    más utilizados son triángulo y cuadro. <br> <br>

                                    Después de marcados los sitios, se procede a la apertura y
                                    preparación de los huecos, cuyo tamaño dependerá del tamaño
                                    de la semilla. Se recomiendan huecos de 30x30x30 a 40x40x40
                                    cm. Es conveniente agregar 2 -3 kg. de abono orgánico al fondo
                                    del hoyo junto con el suelo correspondiente a la capa más
                                    superficial, para propiciar un mejor desarrollo de las raíces;
                                    luego se procede a la colocación del cormo o ñame en el hueco,
                                    para luego taparlo con el resto de suelo que se sacó de allí. El
                                    suelo de relleno se debe apisonar para evitar que queden
                                    cámaras de aire que faciliten pudriciones de las raíces por
                                    encharcamiento.
                                </p>
                            </li>

                            <li> <h4> Densidad de siembra: </h4> </li>
                            <p>
                                La densidad de siembra en musáceas
                                influye sobre el rendimiento, producción y vida útil de las
                                plantaciones. La distancia a la que se siembre una planta de otra
                                depende de la fertilidad del suelo y del mercado final en cada
                                localidad. La tabla 1 muestra algunas distancias de siembra y la
                                población que se obtiene por hectárea.
                            </p>
                        </ul>

                    </ol>

                    <div> <img class="imagenes" id = "tabla" src = "images/tabla.png" alt=""> </div>   <!-- IMAGEN 4-->

                    <section class="preguntas" id="po3">  <!-- Pregunta Opcional 2  -->

                        <h3> Cosechando saberes... </h3>
                        <h4> Para una distancia de 2.8 X 2.8 metros ¿Qué población se obtiene por hectárea en una siembra triangular? </h4>

                        <!-- OPCIONES DE LA PREGUNTA OPCIONAL: -->
                        <label>    <input type="radio" value="1" name="po3" onclick="respuesta(3,this)"> 1700 por hectárea  </label>

                        <label>    <input type="radio" value="2" name="po3" onclick="respuesta(3,this)"> 1500             </label>

                        <label>    <input type="radio" value="3" name="po3" onclick="respuesta(3,this)"> 1372       </label>

                        <label>    <input type="radio" value="4" name="po3" onclick="respuesta(3,this)"> 1666 centímetros </label>

                        <button class="botoncomprobar" onclick="comprobar(3)"> COMPROBAR </button>  <!--  BOTÓN PARA VERIFICAR LA PREGUNTA MI REY -->

                    </section>

                    <button class="sig" onclick="cultivoplatanoA()"> Anterior </button>
                    <button class="sig" onclick="cultivoplatanoS()"> Introducción </button>

                </div>
                <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


            </div> <!-- DIV PRINCIPAL-->

            <!-- SE VINCULA CON EL JAVA SCRIPT PARA LA PREGUNTA -->
            <script src = "log_tema1.js">    </script>

        </div>

        <div class="footer">
            <img src="<?php echo $URL?>/public/images/trabuko_logo.png" width="70">
        </div>

    </body>
</html>
