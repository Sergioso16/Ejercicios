<?php
  // Matriz de costos de materiales por modelo
$costos_materiales = array(
    array(7, 8, 5), // Sedán
    array(10, 9, 7), // Camioneta
    array(5, 3, 2) // Económico
);

// Matriz de costos de personal por modelo
$costos_personal = array(
    array(10, 9, 7), // Sedán
    array(12, 11, 9), // Camioneta
    array(8, 6, 4) // Económico
);

// Matriz de costos de impuestos por modelo
$costos_impuestos = array(
    array(5, 3, 2), // Sedán
    array(7, 5, 3), // Camioneta
    array(4, 2, 1) // Económico
);

// Matriz de costos de transporte por modelo
$costos_transporte = array(
    array(2, 3, 1), // Sedán
    array(3, 4, 2), // Camioneta
    array(1, 2, 1) // Económico
);

// Vector de unidades semanales producidas por modelo
$unidades_semanales = array(60, 40, 90);

// Vector de costos unitarios de materiales, personal, impuestos y transporte
$costos_unitarios = array(5, 15, 7, 2);

function unidades_necesarias($costos, $unidades, $costos_unitarios) {
  $num_modelos = count($costos);
  $num_conceptos = count($costos[0]);
  $unidades_necesarias = array_fill(0, $num_conceptos, 0);
  
  for ($i = 0; $i < $num_modelos; $i++) {
      for ($j = 0; $j < $num_conceptos; $j++) {
          $unidades_necesarias[$j] += $costos[$i][$j] * $unidades[$i];
      }
  }
  
  for ($i = 0; $i < $num_conceptos; $i++) {
      $unidades_necesarias[$i] *= $costos_unitarios[$i];
  }
  
  return $unidades_necesarias;
}

$unidades_necesarias = unidades_necesarias($costos_materiales, $unidades_semanales, $costos_unitarios);
?>