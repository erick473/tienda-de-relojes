<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>:::Blog de Literatura Clásica:::</title>
	<link rel="stylesheet" type="text/css" href="estilo1.css">
</head>
<body>
	<body style="background-color: #ACD6FD;">
<div class="head">
<nav class="navbar">
<a href="/watchsynin"><img src="Reg.png" alt="Regresar" height="30"

width="30"></a>

<a href="Productos.html">Productos</a>
<a href="Soporte.html">Soporte</a>
<a href="Sobrenosotros.html">Sobre nosotros</a>
<a href="Contactanos.html">Contactanos</a>

</nav>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<h1 align="center" style="color:black;">Gracias por tu comentario!</h1><br><br>
	<p align="center" style="font-size: 20px;color:black;">Recibirás una respuesta pronto en tu correo</p>
	<h2 align="center" style="color:black;">Información del usuario</h2>
	<p align="center" style="font-size: 20px;color:black">
	<?PHP
		$nombre=    $_POST['nombre'];
		$correo=  $_POST['correo'];
		$mensaje=  $_POST['mensaje'];
		echo "Nombre:",$nombre;
		echo "<br>";
		echo "Correo:",$correo;
		echo "<br>";
		echo "<h2 class='solid'>Copia de mensaje:</h2>";
		echo "<p style='font-size: 20px;color:black'>",$mensaje,"</p>";
	?>
	</p>

</body>
</html>