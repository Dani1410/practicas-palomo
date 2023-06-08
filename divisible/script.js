function generateInputFields() {
  const count = document.getElementById("count").value;
  const container = document.getElementById("inputFieldsContainer");
  container.innerHTML = "";

  for (let i = 0; i < count; i++) {
    const label = document.createElement("label");
    label.setAttribute("for", "number_" + i);
    label.textContent = "Ingrese el numero " + (i + 1) + ":";

    const input = document.createElement("input");
    input.setAttribute("type", "number");
    input.setAttribute("id", "number_" + i);
    input.setAttribute("name", "numbers[]");

    container.appendChild(label);
    container.appendChild(input);
    container.appendChild(document.createElement("br"));
  }

  const verifyButtonContainer = document.getElementById("verifyButtonContainer");
  verifyButtonContainer.style.display = "block";
}

function validateForm(event) {
  event.preventDefault();

  const countInput = document.getElementById("count");
  const countError = document.getElementById("countError");
  const verificationError = document.getElementById("verificationError");
  const countValue = parseInt(countInput.value);

  // Verificar que el numero de veces ingresado sea valido y mayor que cero
  if (isNaN(countValue) || countValue <= 0) {
    countError.textContent = "Ingrese un numero valido mayor que cero.";
    verificationError.textContent = "";
    return false;
  }

  // Verificar que los numeros ingresados sean validos
  const numberInputs = document.querySelectorAll('[id^="number_"]');
  if (numberInputs.length === 0) {
    verificationError.textContent = "Genere los campos antes de verificar.";
    countError.textContent = "";
    return false;
  }

  for (let i = 0; i < numberInputs.length; i++) {
    const numberInput = numberInputs[i];
    const number = parseInt(numberInput.value);

    if (isNaN(number)) {
      countError.textContent = "Ingrese numeros validos en los campos.";
      verificationError.textContent = "";
      return false;
    }
  }

  // Limpiar los mensajes de error
  countError.textContent = "";
  verificationError.textContent = "";
  event.target.submit();
}

function checkGeneratedFields() {
  const countInput = document.getElementById("count");
  const countValue = parseInt(countInput.value);

  const verifyButtonContainer = document.getElementById("verifyButtonContainer");

  if (countValue > 0) {
    verifyButtonContainer.style.display = "block";
  } else {
    verifyButtonContainer.style.display = "none";
  }
}

document.getElementById("count").addEventListener("input", checkGeneratedFields);
