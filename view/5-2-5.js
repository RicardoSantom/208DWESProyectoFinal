/**
 * Crear dentro de vuestra aplicación final,un reloj con la hora actual donde los números serán imágenes o gifs sacados de internet.
 */
function crearReloj() {
    var horaActual = new Date();
    //-----------HORAS-------------
    var unidadHoras = parseInt((horaActual.getHours()) / 10);
    var decenaHoras = horaActual.getHours() % 10;
    //-----------MINUTOS-------------
    var unidadMinutos = parseInt((horaActual.getMinutes()) / 10);
    var decenaMinutos = horaActual.getMinutes() % 10;
    //-----------SEGUNDOS-------------
    var unidadSegundos = parseInt((horaActual.getSeconds()) / 10);
    var decenaSegundos = horaActual.getSeconds() % 10;

    var divReloj = document.createElement("div");
    //var divForm =document.getElementById("formInicioPrivado");
    //divForm.append(divReloj);
    document.body.append(divReloj);
    divReloj.setAttribute("id", "divReloj");

    var dosPuntos = document.createElement("img");
    var dosPuntos2 = document.createElement("img");
    var horaDerecho = document.createElement("img");
    var horaIzquierdo = document.createElement("img");
    var minutoDerecho = document.createElement("img");
    var minutoIzquierdo = document.createElement("img");
    var segundoDerecho = document.createElement("img");
    var segundoIzquierdo = document.createElement("img");


    divReloj.append(horaDerecho, horaIzquierdo, dosPuntos, minutoDerecho, minutoIzquierdo,
        dosPuntos2, segundoDerecho, segundoIzquierdo);
    var ruta = "../images/";
    //--------------------PUNTOS----------------------
    dosPuntos2.setAttribute("src", "../images/puntos.gif");
    dosPuntos2.setAttribute("alt", "Imagen dos puntos");
    dosPuntos2.setAttribute("class", "puntos");
    dosPuntos.setAttribute("src", "../images/puntos.gif");
    dosPuntos.setAttribute("alt", "Imagen dos puntos");
    dosPuntos.setAttribute("class", "puntos");
    //---------------------HORAS----------------------
    horaDerecho.setAttribute("src", ruta.concat(unidadHoras, ".jpg"));
    horaDerecho.setAttribute("alt", "hora derecha");
    horaIzquierdo.setAttribute("src", ruta.concat(decenaHoras, ".jpg"));
    horaIzquierdo.setAttribute("alt", "hora izquierda");
    //---------------------MINUTOS----------------------
    minutoDerecho.setAttribute("src", ruta.concat(unidadMinutos, ".jpg"));
    minutoDerecho.setAttribute("alt", "minuto derecho");
    minutoIzquierdo.setAttribute("src", ruta.concat(decenaMinutos, ".jpg"));
    minutoIzquierdo.setAttribute("alt", "minuto izquierdo");
    //---------------------SEGUNDOS----------------------
    segundoDerecho.setAttribute("src", ruta.concat(unidadSegundos, ".jpg"));
    segundoDerecho.setAttribute("alt", "segundo derecho");
    segundoIzquierdo.setAttribute("src", ruta.concat(decenaSegundos, ".jpg"));
    segundoIzquierdo.setAttribute("alt", "segundo izquierdo");

}

crearReloj();
var intervalo = setInterval(() => {
    var divReloj = document.getElementById("divReloj");
    for (const iterator of divReloj.children) {
        divReloj.removeChild[iterator];
    }
    divReloj.remove();
    crearReloj();
}, 1000);

//--------------CON DOCUMENT WRITE--------------------------
/*function crearReloj() {
    var horaActual = new Date();
    document.write("<div id='divReloj' style='display:flex'>");
    document.write("<h1>" + horaActual.getHours() + "</h1>");
    document.write("<h1>:" + horaActual.getMinutes() + "</h1>");
    document.write("<h1>:" + horaActual.getSeconds() + "</h1>");
    document.write("</div>");
}
crearReloj();
var intervalo = setInterval(() => {
    var divReloj = document.getElementById("divReloj");
    for (const iterator of divReloj.children) {
        divReloj.removeChild[iterator];
    }
    divReloj.remove();
    crearReloj();
}, 1000);*/
