function createFields() {
  var numTimes = document.getElementById("numTimes").value;
  var ageFieldsDiv = document.getElementById("ageFields");
  ageFieldsDiv.innerHTML = "";

  for (var i = 1; i <= numTimes; i++) {
    var label = document.createElement("label");
    label.innerText = "Edad " + i + ":";
    var input = document.createElement("input");
    input.type = "number";
    input.name = "age" + i;

    ageFieldsDiv.appendChild(label);
    ageFieldsDiv.appendChild(input);
  }

  var calculateButton = document.getElementById("calculateButton");
  calculateButton.style.display = "block";
}

function validateForm() {
  var numTimes = document.getElementById("numTimes").value;
  var errorMessagesDiv = document.getElementById("errorMessages");
  errorMessagesDiv.innerHTML = "";

  var isValid = true;

  if (numTimes <= 0) {
    showError("Ingrese un número válido para la cantidad de veces.");
    isValid = false;
  }

  for (var i = 1; i <= numTimes; i++) {
    var age = document.getElementsByName("age" + i)[0].value;

    if (age <= 0 || age > 120) {
      showError("Ingrese una edad válida para la persona " + i + ".");
      isValid = false;
    }
  }

  return isValid;
}

function showError(message) {
  var errorMessagesDiv = document.getElementById("errorMessages");
  var errorParagraph = document.createElement("p");
  errorParagraph.className = "error";
  errorParagraph.innerText = message;
  errorMessagesDiv.appendChild(errorParagraph);
}
