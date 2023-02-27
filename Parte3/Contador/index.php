<?php
session_start();

if (!isset($_SESSION['contador'])) {
  $_SESSION['contador'] = 0;
}

if (isset($_POST['incrementar'])) {
  $_SESSION['contador']++;
}

$contador = $_SESSION['contador'];


if (isset($_POST['logout'])) {
  // Destruir sesión
  session_destroy();
  // Redireccionar a la página de inicio o a cualquier otra página
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Incrementar número</title>
</head>
<body>
  <h1>Número de clics: <?php echo $contador; ?></h1>
  <form method="post">
    <button type="submit" name="incrementar">+1</button>
  </form>
  <br></br>
<form method="post">
  <input type="submit" name="logout" value="Salir">
</form>
</body>
</html>
