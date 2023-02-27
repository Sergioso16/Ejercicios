<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Contador de vocales y consonantes</title>
</head>
<body>
    <h1>Contador de vocales y consonantes</h1>
  <form method="post">
    <label for="palabra">Introduce una palabra:</label>
    <input type="text" id="palabra" name="palabra">
    <button type="submit">Contar</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera el valor del campo de entrada del formulario
    $palabra = $_REQUEST['palabra'];

    // Inicializa los contadores de vocales y consonantes en cero
    $num_vocales = 0;
    $num_consonantes = 0;

    // Itera sobre cada letra de la palabra
    for ($i = 0; $i < strlen($palabra); $i++) {
      $letra = strtolower($palabra[$i]); // Convierte la letra a minúscula para comparar con las vocales

      // Si es una vocal, incrementa el contador de vocales
      if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
        $num_vocales++;
      }

      // Si es una consonante, incrementa el contador de consonantes
      else if (preg_match('/[a-z]/', $letra)) {
        $num_consonantes++;
      }
    }

    // Muestra los resultados en la página
    echo "<p>La palabra '" . $palabra . "' tiene " . $num_vocales . " vocales y " . $num_consonantes . " consonantes.</p>";
  }
  ?>
</body>
</html>