<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $calificaciones = $_POST['calificacion'];

  $totalCalificaciones = count($calificaciones);
  $sumaCalificaciones = array_sum($calificaciones);
  $promedio = $sumaCalificaciones / $totalCalificaciones;

  $resultado = '';
  $resultado .= 'Promedio: ' . $promedio . '<br>';
  $resultado .= ($promedio >= 6) ? 'Aprobado' : 'Reprobado';

  echo $resultado;
}
