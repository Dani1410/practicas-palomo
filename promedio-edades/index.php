<!DOCTYPE html>
<html>

<head>
    <title>Promedio de edades</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="container">
        <h1>Promedio de Edades</h1>

        <form id="ageForm" action="result.php" method="post" onsubmit="return validateForm()">
            <label for="numTimes">Ingrese la cantidad de veces:</label>
            <input type="number" id="numTimes" name="numTimes" min="1" required>
            <button type="button" onclick="createFields()">Generar Campos</button>

            <div id="ageFields">
                <!-- Los campos se generarán aquí dinámicamente -->
            </div>

            <div id="errorMessages"></div>

            <input type="submit" id="calculateButton" value="Calcular Promedio" class="btn" style="display: none;">
        </form>
    </div>
</body>

</html>