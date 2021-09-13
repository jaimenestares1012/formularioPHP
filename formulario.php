<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		<input type="text" name="nombre" placeholder="nombre">
		<input type="email" name="correo" placeholder="correo">

		<input type="submit" name="submit">
	</form>
</body>
</html>