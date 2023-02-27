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
  
  $mensaje = $_REQUEST['mensaje'];

 
  $costo = 0;

  // Itera sobre cada caracter del mensaje
  for ($i = 0; $i < strlen($mensaje); $i++) {
    $caracter = $mensaje[$i];

     
     if ($caracter == ' ') {
        continue;
      }

    
    if (ctype_alpha($caracter)) {
      $costo += 10;
    }

    
    else if (ctype_digit($caracter)) {
      $costo += 20;
    }

    
    else {
      $costo += 30;
    }
  }

  
  echo "El costo del mensaje es: $" . $costo;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Mensaje: <input type="text" name="mensaje">
  <br><br>
  <input type="submit" value="Calcular costo">
</form>
