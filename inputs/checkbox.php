<!DOCTYPE html>
<html>

<head>
    <title>Formulario con Checkbox y Mostrar Datos en PHP</title>
</head>

<body>
    <h2>Formulario con Checkbox y Mostrar Datos en PHP</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $deportes = isset($_POST["deportes"]) ? $_POST["deportes"] : array();

        if (empty($deportes)) {
            echo "<p style='color: red;'>Error: Debes seleccionar al menos un deporte.</p>";
        } else {
            echo "<h3>Datos ingresados:</h3>";
            echo "<p>Nombre: " . $nombre . "</p>";
            echo "<p>Deportes seleccionados:</p>";
            echo "<ul>";
            foreach ($deportes as $deporte) {
                echo "<li>" . $deporte . "</li>";
            }
            echo "</ul>";
        }

        // Restablecer los valores de las casillas de verificación después de mostrar los datos
        unset($_POST["deportes"]);
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label>Deportes:</label><br>
        <label>
            <input type="checkbox" name="deportes[]" value="Fútbol">
            Fútbol
        </label><br>
        <label>
            <input type="checkbox" name="deportes[]" value="Básquet">
            Básquet
        </label><br>
        <label>
            <input type="checkbox" name="deportes[]" value="Tenis">
            Tenis
        </label><br>
        <label>
            <input type="checkbox" name="deportes[]" value="Vóley">
            Vóley
        </label><br><br>

        <input type="submit" name="submit" value="Enviar">
    </form>
</body>

</html>