function generarCampos() {
  var cantidad = parseInt(document.getElementById("cantidad").value);
  var container = document.getElementById("calificaciones-container");
  container.innerHTML = "";

  for (var i = 0; i < cantidad; i++) {
    var input = document.createElement("input");
    input.type = "number";
    input.name = "calificacion[]";
    input.placeholder = "Calificacion " + (i + 1);
    input.required = "true";
    input.min = "1";
    container.appendChild(input);
  }
}

function calcularPromedio() {
  var form = document.getElementById("calificaciones-form");
  var formData = new FormData(form);
  var calificaciones = [];
  var resultadoContainer = document.getElementById("resultado-container");
  resultadoContainer.innerHTML = "";

  for (var pair of formData.entries()) {
    if (pair[0] === "calificacion[]") {
      calificaciones.push(parseInt(pair[1]));
    }
  }

  if (calificaciones.length > 0) {
    var sumaCalificaciones = calificaciones.reduce(function (a, b) {
      return a + b;
    });
    var promedio = sumaCalificaciones / calificaciones.length;
    var mensaje = "Promedio General: " + promedio.toFixed(2) + "<br>";

    for (var i = 0; i < calificaciones.length; i++) {
      var calificacion = calificaciones[i];
      var estado = calificacion >= 6 ? "Aprobado" : "Reprobado";
      mensaje += "Calificacion " + (i + 1) + ": " + estado + "<br>";
    }

    mostrarVentanaEmergente(mensaje);
  }
}

function mostrarVentanaEmergente(mensaje) {
  var popupContainer = document.getElementById("popup-container");
  var messageContainer = document.getElementById("message-container");
  messageContainer.innerHTML = mensaje;
  popupContainer.style.display = "flex";
}

function ocultarVentanaEmergente(event) {
  var popupContainer = document.getElementById("popup-container");
  if (event.target === popupContainer) {
    popupContainer.style.display = "none";
  }
}

document.addEventListener("click", ocultarVentanaEmergente);
