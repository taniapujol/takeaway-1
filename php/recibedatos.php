<?php
echo "<h1>Hola, aquí llegará el form</h1>";
//Se comprueba que llegan datos por método POST
if ($_POST) {
	echo "LLegan variables por post:<br>";
	echo $_POST['nombreApellido'];
	echo "<br>";
	echo $_POST['email'];
	echo "<br>";
	echo $_POST['mensaje'];
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'takeaway');
	if ($mysqli){
		$sql="INSERT INTO contactform ( nombreApellidos, email, mensaje) VALUES ( 'Josep Pla', 'mailto@taa.com', 'Mensaje de test');";
		$query=$mysqli->query($sql);
		if ($query) {
			echo "Se ha grabado correctamente la información";
		}
		else 
		{
			echo "Ha habido un problema con el registro del formulario";
		}
		$mysqli->close();
	}
}
else {
	echo "No llega nada por post";
}
?>