<body bgcolor="gray">
<?php
/*Tenemos que utilizar el name de nuestro input en cada seccion*/
	$nombre = $_POST['nombre'];
	echo "<h1>Hola que tal... $nombre</h1>";
	echo "<hr>";
	$edad = $_POST['edad'];
	echo "<h1>Su edad es... $edad";
	echo "<hr>";
	$telefono = $_POST['telefono'];
	echo "<h1>Su telefono es... $telefono";
	echo "<hr>";

	echo "<center><a href='../html/greetingForm.html'><button>Regresar</button></a></center>";

	













  ?>