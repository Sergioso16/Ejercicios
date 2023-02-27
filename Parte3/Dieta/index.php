<!DOCTYPE html>
<html>
<head>
	<title>Dieta de Cambridge</title>
</head>
<body>
    <h1>Cumplimiento con la dieta Cambridge</h1>
	<form method="post">
		<label for="nombre_alimento">Nombre del alimento:</label>
		<input type="text" name="nombre_alimento" id="nombre_alimento" required><br><br>

		<label for="proteinas_alimento">Proteínas en gramos:</label>
		<input type="number" name="proteinas_alimento" id="proteinas_alimento" required><br><br>

		<label for="carbohidratos_alimento">Carbohidratos en gramos:</label>
		<input type="number" name="carbohidratos_alimento" id="carbohidratos_alimento" required><br><br>

		<label for="grasas_alimento">Grasas en gramos:</label>
		<input type="number" name="grasas_alimento" id="grasas_alimento" required><br><br>

		<input type="submit" name="submit" value="Comprobar">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$nombre_alimento = $_POST['nombre_alimento'];
			$proteinas_alimento = $_POST['proteinas_alimento'];
			$carbohidratos_alimento = $_POST['carbohidratos_alimento'];
			$grasas_alimento = $_POST['grasas_alimento'];

			// Definir los requerimientos de la dieta de Cambridge
			$proteinas_requeridas = 33;
			$carbohidratos_requeridos = 45;
			$grasas_requeridas = 3;

			// Verificar si se cumple con los requerimientos de Cambridge
			if ($proteinas_alimento >= $proteinas_requeridas && $carbohidratos_alimento >= $carbohidratos_requeridos && $grasas_alimento >= $grasas_requeridas) {
				echo "<p>La dieta de $nombre_alimento cumple con los requerimientos de la dieta de Cambridge.</p>";
			} else {
				echo "<p>La dieta de $nombre_alimento no cumple con los requerimientos de la dieta de Cambridge.</p>";
			}
		}
	?>
</body>
</html>
