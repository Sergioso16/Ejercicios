<html>
<head>

<title>Telegrafo</title>

</head>

<body>
<h1 aling="center">TELEGRAFO</h1>
</body>

    </html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera el valor del campo de entrada del formulario
  $mensaje = $_REQUEST['mensaje'];

  // Inicializa el costo en cero
  $costo = 0;

  // Itera sobre cada caracter del mensaje
  for ($i = 0; $i < strlen($mensaje); $i++) {
    $caracter = $mensaje[$i];

     // Si es un espacio, no hace nada
     if ($caracter == ' ') {
        continue;
      }

    // Si es una letra, suma $10 al costo
    if (ctype_alpha($caracter)) {
      $costo += 10;
    }

    // Si es un dígito, suma $20 al costo
    else if (ctype_digit($caracter)) {
      $costo += 20;
    }

    // Si es un caracter especial, suma $30 al costo
    else {
      $costo += 30;
    }
  }

  // Muestra el costo del mensaje en la página
  echo "El costo del mensaje es: $" . $costo;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Mensaje: <input type="text" name="mensaje">
  <br><br>
  <input type="submit" value="Calcular costo">
</form>
