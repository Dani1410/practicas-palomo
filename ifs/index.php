<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo de instrucciones if en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            text-align: center;
            font-size: 16px;
        }

        .success {
            color: #43a047;
        }

        .error {
            color: #e53935;
        }
    </style>
</head>

<body>

    <?php
    // Variable de ejemplo
    $edad = 25;

    // Ejemplo de instrucción if simple
    if ($edad >= 18) {
        echo '<div class="message success">Eres mayor de edad.</div>';
    }

    // Ejemplo de instrucción if compuesta
    if ($edad >= 18) {
        echo '<div class="message success">Eres mayor de edad.</div>';
    } else {
        echo '<div class="message error">Eres menor de edad.</div>';
    }

    // Ejemplo de instrucción if anidada
    if ($edad >= 18) {
        if ($edad < 65) {
            echo '<div class="message success">Eres mayor de edad pero no estás jubilado.</div>';
        } else {
            echo '<div class="message success">Eres mayor de edad y estás jubilado.</div>';
        }
    } else {
        echo '<div class="message error">Eres menor de edad.</div>';
    }
    ?>

</body>

</html>