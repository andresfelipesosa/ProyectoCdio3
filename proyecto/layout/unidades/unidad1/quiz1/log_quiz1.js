//cargo en un arreglo las imganes de las banderas. Este sera el orden que se mostrarán
let banderas = ["pregunta1U1.svg", "pregunta2U1.svg","pregunta3U1.svg","pregunta4U1.svg", "pregunta5U1.svg"];

//arreglo que guardara la opcion correcta
let correcta = [0,1,3,2,1];

//arreglo que guardara los paises a mostrar en cada jugada
let opciones = [];
//cargo en el arreglo opciones las opciones a mostrar en cada jugada
opciones.push(["En una capa de 30 a 40cm", "De 1 a 2mts", "Las raíces no se dispersan", "De 10 a 40cm"]);   //PREGUNTA 1
opciones.push(["Tallo", "Rizoma o Bulbo", "Bellota", "Platanera"]);   // PREGUNTA 2
opciones.push(["Entre 5 y 10 kilos", "Entre 100 y 200 gramos","Entre 1 y 2 kilos", "Entre 3 y 4 kilos"]);   // PREGUNTA 3
opciones.push(["En rectángulo de 20x20", "En circulo", "En triangulo de 20x30x40", "En triangulo y cuadrado de 30x30x30"]);    // PREGUNTA 4
opciones.push(["Son Terciarios", "Hay 4 tipos de drenajes", "El sembrado no se drena", "Hay 2 tipos de drenajes"]);  // PREGUNTA 5

//variable que guarda la posicion actual
let posActual = 0;
//variable que guarda la cantidad acertadas hasta el moemento
let cantidadAcertadas = 0;

function comenzarJuego(){
    //reseteamos las variables
    posActual = 0;
    cantidadAcertadas = 0;
    //activamos las pantallas necesarias
    document.getElementById("pantalla-inicial").style.display = "none";
    document.getElementById("pantalla-juego").style.display = "block";
    cargarBandera();

}

//funcion que carga la siguiente bandera y sus opciones
function cargarBandera(){
    //controlo sis se acabaron las banderas
    if(banderas.length <= posActual){
        terminarJuego();
    }
    else{//cargo las opciones
        //limpiamos las clases que se asignaron
        limpiarOpciones();

        document.getElementById("imgBandera").src = "img/" + banderas[posActual];
        document.getElementById("n0").innerHTML = opciones[posActual][0];
        document.getElementById("n1").innerHTML = opciones[posActual][1];
        document.getElementById("n2").innerHTML = opciones[posActual][2];
        document.getElementById("n3").innerHTML = opciones[posActual][3];
    }
}

function limpiarOpciones(){
    document.getElementById("n0").className = "nombre";
    document.getElementById("n1").className = "nombre";
    document.getElementById("n2").className = "nombre";
    document.getElementById("n3").className = "nombre";

    document.getElementById("l0").className = "letra";
    document.getElementById("l1").className = "letra";
    document.getElementById("l2").className = "letra";
    document.getElementById("l3").className = "letra";
}

function comprobarRespuesta(opElegida){
    if(opElegida==correcta[posActual]){//acertó

        //agregamos las clases para colocar el color verde a la opcion elegida
        document.getElementById("n" + opElegida).className = "nombre nombreAcertada";
        document.getElementById("l" + opElegida).className = "letra letraAcertada";
        cantidadAcertadas++;
    }
    else{//no acerto
        //agramos las clases para colocar en rojo la opcion elegida
        document.getElementById("n" + opElegida).className = "nombre nombreNoAcertada";
        document.getElementById("l" + opElegida).className = "letra letraNoAcertada";

        //opcion que era correcta
        document.getElementById("n" + correcta[posActual]).className = "nombre nombreAcertada";
        document.getElementById("l" + correcta[posActual]).className = "letra letraAcertada";
    }
    posActual++;
    //Esperamos 1 segundo y pasamos mostrar la siguiente bandera y sus opciones
    setTimeout(cargarBandera,1000);
}
function terminarJuego(){
    //ocultamos las pantallas y mostramos la pantalla final
    document.getElementById("pantalla-juego").style.display = "none";
    document.getElementById("pantalla-final").style.display = "block";
    //agreamos los resultados
    document.getElementById("numCorrectas").innerHTML = cantidadAcertadas;
    document.getElementById("numIncorrectas").innerHTML = banderas.length - cantidadAcertadas;

    var resultadoquiz;
    if (cantidadAcertadas >= 3) {
        resultadoquiz = 1;
    } else {
        resultadoquiz = 0;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "quiz1_save.php?username=" + username.value + "&value="+resultadoquiz, true);
    xhttp.send();
}

function volverAlInicio(){
    //ocultamos las pantallas y activamos la inicial
    document.getElementById("pantalla-final").style.display = "none";
    document.getElementById("pantalla-inicial").style.display = "block";
    document.getElementById("pantalla-juego").style.display = "none";
}