<!DOCTYPE html>
<html>

<head>
  <title>Resultado Divisibilidad por 3</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  <div class="container">
    <h2>Resultado Divisibilidad por 3</h2>
    <div class="result-container">
      <?php
      $numbers = $_POST['numbers'] ?? [];
      foreach ($numbers as $number) {
        $isDivisible = ($number % 3 === 0);
        $resultClass = $isDivisible ? 'result divisible' : 'result not-divisible';
        $resultText = $isDivisible ? 'es divisible' : 'no es divisible';
        echo "<p class='$resultClass'>$number $resultText por 3</p>";
      }
      ?>
    </div>
    <div class="form-group">
      <a href="index.html" class="btn-back">Regresar</a>
    </div>
  </div>
</body>

</html>