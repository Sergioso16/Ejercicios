<html>
<head>
  <title>Calcular la desviación estándar</title>
</head>
<body>
  <h1>Desviación estándar</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="valores">Escriba los valores separados por comas:</label><br>
    <input type="text" id="valores" name="valores"><br>
    <input type="submit" value="Calcular">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // obtener los valores del formulario y convertirlos a un array
    $valores = explode(",", $_POST["valores"]);

    // eliminar espacios en blanco y convertir a números
    $valores = array_map('trim', $valores);
    $valores = array_map('floatval', $valores);

    // calcular la desviación estándar con la función anterior
    $desviacion_estandar = desviacion_estandar($valores);

    // mostrar la desviación estándar
    echo "<p>La desviación estándar de los valores es: $desviacion_estandar</p>";
  }

  // función para calcular la desviación estándar
  function desviacion_estandar($valores) {
    $n = count($valores); // cantidad de valores
    $media = array_sum($valores) / $n; // promedio de los valores
    $sum_cuadrados = 0;

    foreach($valores as $valor) {
      $sum_cuadrados += pow($valor - $media, 2); // elevar al cuadrado y sumar
    }

    $varianza = $sum_cuadrados / ($n - 1); // varianza
    $desviacion_estandar = sqrt($varianza); // raíz cuadrada de la varianza

    return $desviacion_estandar;
  }
  ?>
</body>
</html>

