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
    
    $valores = explode(",", $_POST["valores"]);

   
    $valores = array_map('trim', $valores);
    $valores = array_map('floatval', $valores);

    
    $desviacion_estandar = desviacion_estandar($valores);

    
    echo "<p>La desviación estándar de los valores es: $desviacion_estandar</p>";
  }

  
  function desviacion_estandar($valores) {
    $n = count($valores); 
    $media = array_sum($valores) / $n; 
    $sum_cuadrados = 0;

    foreach($valores as $valor) {
      $sum_cuadrados += pow($valor - $media, 2); 
    }

    $varianza = $sum_cuadrados / ($n - 1); 
    $desviacion_estandar = sqrt($varianza); 

    return $desviacion_estandar;
  }
  ?>
</body>
</html>

