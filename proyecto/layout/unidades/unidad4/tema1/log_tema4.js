// Arreglo que contiene las respuestas correctas, mi rey. 
let correcta = [3,3,2];

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

    // AL INICIAR LA APLICACIÓN SÓLO SE MUESTRA LA INTRODUCCIÓN - - - - - - - - - - - 
    document.getElementById("intro").style.display = "block";
    document.getElementById("determinación").style.display = "none";
    document.getElementById("momento").style.display = "none";
    document.getElementById("aprovechamiento").style.display = "none";


    // BOTONES DE SIGUIENTE: --------------------------------------------------------------
function introS(){
    document.getElementById("intro").style.display = "none";
    document.getElementById("determinación").style.display = "block";
    document.getElementById("momento").style.display = "none";
    document.getElementById("aprovechamiento").style.display = "none";

}

function determinaciónS(){
    document.getElementById("intro").style.display = "none";
    document.getElementById("determinación").style.display = "none";
    document.getElementById("momento").style.display = "block";
    document.getElementById("aprovechamiento").style.display = "none";

}

function momentoS(){
    document.getElementById("intro").style.display = "none";
    document.getElementById("determinación").style.display = "none";
    document.getElementById("momento").style.display = "none";
    document.getElementById("aprovechamiento").style.display = "block";

}

function aprovechamientoS(){
    document.getElementById("intro").style.display = "block";
    document.getElementById("determinación").style.display = "none";
    document.getElementById("momento").style.display = "none";
    document.getElementById("aprovechamiento").style.display = "none";

}


// -----------------------------------------------------------------------------------------------------

// BOTONES DE ANTERIOR: --------------------------------------------------------------------------------
function determinaciónA(){
    document.getElementById("intro").style.display = "block";
    document.getElementById("determinación").style.display = "none";
    document.getElementById("momento").style.display = "none";
    document.getElementById("aprovechamiento").style.display = "none";

}

function momentoA(){
    document.getElementById("intro").style.display = "none";
    document.getElementById("determinación").style.display = "block";
    document.getElementById("momento").style.display = "none";
    document.getElementById("aprovechamiento").style.display = "none";

}

function aprovechamientoA(){
    document.getElementById("intro").style.display = "none";
    document.getElementById("determinación").style.display = "none";
    document.getElementById("momento").style.display = "block";
    document.getElementById("aprovechamiento").style.display = "none";

}




