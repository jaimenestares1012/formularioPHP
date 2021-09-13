<?php 
if($_POST){
	echo $_POST['nombre'];
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="text" placeholder="jaime" name="nombre">
		<br>
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value="hombre">
		<br>
		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" value="mujer">
		<br>
		
		<br>

		<select name="year" id="year">
			<option value="2000">2000</option>
			<option value="3000">3000</option>
			<option value="4000">4000</option>
		</select>
		<br>
		<label for="terminos">Aceptar terminos?</label>
		<input type="checkbox" name="terminos" id="terminos" value="ok">

		<input type="submit" value="Enviar">
	</form>
</body>
</html>