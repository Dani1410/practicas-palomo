<!DOCTYPE html>
<html>

<head>
    <title>Resultado - Promedio de edades</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="result-container">
        <h1 class="result-title">Resultado - Promedio de Edades</h1>

        <?php
        $numTimes = $_POST['numTimes'];
        $total = 0;

        for ($i = 1; $i <= $numTimes; $i++) {
            $age = $_POST['age' . $i];
            $total += $age;
        }

        $average = $total / $numTimes;

        echo "<div class='result-value'>Promedio de edades: " . $average . "</div>";
        ?>

        <a href="index.php" class="btn">Regresar</a>
    </div>
</body>

</html>