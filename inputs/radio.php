<!DOCTYPE html>
<html>

<head>
    <title>Formulario con Radio Buttons y Mostrar Datos en PHP</title>
</head>

<body>
    <h2>Formulario con Radio Buttons y Mostrar Datos en PHP</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $estudios = isset($_POST["estudios"]) ? $_POST["estudios"] : "";

        if (empty($estudios)) {
            echo "<p style='color: red;'>Error: Debes seleccionar un nivel de estudios.</p>";
        } else {
            echo "<h3>Datos ingresados:</h3>";
            echo "<p>Nombre: " . $nombre . "</p>";
            echo "<p>Nivel de estudios: " . $estudios . "</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="sin_estudios">
            <input type="radio" id="sin_estudios" name="estudios" value="Sin estudios">
            Sin estudios
        </label><br>
        <label for="primarios">
            <input type="radio" id="primarios" name="estudios" value="Primarios">
            Primarios
        </label><br>
        <label for="secundarios">
            <input type="radio" id="secundarios" name="estudios" value="Secundarios">
            Secundarios
        </label><br><br>

        <input type="submit" name="submit" value="Enviar">
    </form>
</body>

</html>