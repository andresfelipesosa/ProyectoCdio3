// Arreglo que contiene las respuestas correctas, mi rey. 
let correcta = [4,2,4];

// Arreglo donde se guardan las respuestas del usuario, mi rey: 
let opcion_elegida = [0,0,0];

let cantidad_correctas = 0;

//función que toma el número de la pregunta y el input elegido de esa pregunta:
function respuesta(num_pregunta, seleccionada){

    opcion_elegida[num_pregunta-1] = seleccionada.value;

    // Para poner en blanco el label cuando el usuario cambia de opción: 
    id = "po" + num_pregunta;

    labels = document.getElementById(id).childNodes;    // Se leen los childnodes de section. Los 9, 11 13 y 15 son las opciones de respuesta
    if (labels[9] != seleccionada.parentNode) labels[9].className = "labelNoSeleccionada";      
    if (labels[11] != seleccionada.parentNode) labels[11].className = "labelNoSeleccionada";
    if (labels[13] != seleccionada.parentNode) labels[13].className = "labelNoSeleccionada";    //Si el label es diferente de la seleccionada, se pone blanca
    if (labels[15] != seleccionada.parentNode) labels[15].className = "labelNoSeleccionada";
    
    // Ahora le doy el color al label que seleccionó el usuario: 
    //seleccionada.parentNode.style.backgroundColor = "#cec0fc";
    seleccionada.parentNode.className = "labelSeleccionada";
}   

// Función que compara los arreglos para saber cuál es correcta: 


function comprobar(pregunta){

    id = "po" +pregunta;
    labels = document.getElementById(id).childNodes;

    if(opcion_elegida[pregunta-1]==correcta[pregunta-1]){//acertó

        //agregamos las clases para colocar el color verde a la opcion elegida
        labels[ 9+2*(opcion_elegida[pregunta-1]-1) ].className = "labelAcertada";
    }
    else{//no acerto
        //agramos las clases para colocar en rojo la opcion elegida
        labels[ 9+2*(opcion_elegida[pregunta-1]-1) ].className = "labelNoAcertada";

        //opcion que era correcta
        labels[ 9+2*(correcta[pregunta-1]-1) ].className = "labelAcertada";
    }
    //Esperamos 1 segundo y pasamos mostrar la siguiente bandera y sus opciones
    //setTimeout(cargarBandera,1000);
}


/*
let n = 0;
let paginas = ["intro","colino","partesplanta","cultivoplatano"]
function siguiente(){
    //ocultamos las pantallas y activamos la inicial
    document.getElementById(paginas[n]).style.display = "block";
    document.getElementById(paginas[n]+1).style.display = "none";
    document.getElementById(paginas[n]+2).style.display = "none";
    document.getElementById(paginas[n]+3).style.display = "none";
    n++;
    
}
*/

    // AL INICIAR LA APLICACIÓN SÓLO SE MUESTRA LA INTRODUCCIÓN - - - - - - - - - - - 
    document.getElementById("intro").style.display = "block";
    document.getElementById("desarrollo").style.display = "none";
    document.getElementById("fertilizacion").style.display = "none";
    document.getElementById("embolsado").style.display = "none";


// BOTONES DE SIGUIENTE: --------------------------------------------------------------------
function introS(){
    document.getElementById("intro").style.display = "none";
    document.getElementById("desarrollo").style.display = "block";
    document.getElementById("fertilizacion").style.display = "none";
    document.getElementById("embolsado").style.display = "none";
}

function desarrolloS(){
    document.getElementById("intro").style.display = "none";
    document.getElementById("desarrollo").style.display = "none";
    document.getElementById("fertilizacion").style.display = "block";
    document.getElementById("embolsado").style.display = "none";
}

function fertilizacionS(){
    document.getElementById("intro").style.display = "none";
    document.getElementById("desarrollo").style.display = "none";
    document.getElementById("fertilizacion").style.display = "none";
    document.getElementById("embolsado").style.display = "block";
}

function embolsadoS(){
    document.getElementById("intro").style.display = "block";
    document.getElementById("desarrollo").style.display = "none";
    document.getElementById("fertilizacion").style.display = "none";
    document.getElementById("embolsado").style.display = "none";
}

// -----------------------------------------------------------------------------------------------------

// BOTONES DE ANTERIOR: --------------------------------------------------------------------------------
function desarrolloA(){
    document.getElementById("intro").style.display = "block";
    document.getElementById("desarrollo").style.display = "none";
    document.getElementById("fertilizacion").style.display = "none";
    document.getElementById("embolsado").style.display = "none";
}

function fertilizacionA(){
    document.getElementById("intro").style.display = "none";
    document.getElementById("desarrollo").style.display = "block";
    document.getElementById("fertilizacion").style.display = "none";
    document.getElementById("embolsado").style.display = "none";
}

function embolsadoA(){
    document.getElementById("intro").style.display = "none";
    document.getElementById("desarrollo").style.display = "none";
    document.getElementById("fertilizacion").style.display = "block";
    document.getElementById("embolsado").style.display = "none";
}