<!DOCTYPE html>
<html>
<head>
	<title>Convertir centímetros a pulgadas</title>
</head>
<body>
	<h1>Convertir centímetros a pulgadas en PHP</h1>
	<form method="post" action="">
		<label>Longitud en centímetros:</label>
		<input type="number" name="centimeters" required>
		<input type="submit" name="submit" value="Convertir">
        
	</form>
	<?php
	if(isset($_POST['submit'])) {
		$centimeters = $_POST['centimeters'];
		$inches = $centimeters / 2.54;
		echo "<p>$centimeters centímetros es igual a $inches pulgadas.</p>";
	}
	?>
</body>
</html>
