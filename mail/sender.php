<?php 
	if($_POST){

	$to = $_POST["mail"];
	$name = $_POST["name"];
	$asunto = "Revista Las Glorietas";
	$mensaje = <<< EOPAGE
<html>
	<head>
		<style>
			.contenedor {
				width: 300px;
				height: 300px;
				background-color: red;
			}
		</style>
		<title>Revista Las Glorietas</title>
	</head>
	<body>
		<h2>Hola $name</h2>
		<div class="contenedor"> y sin tenedor</div>
		<div style="width:250px;height:250px;background-color:blue">
			pos el otro.
		</div>
	</body>
</html>
EOPAGE;
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		mail($to, $asunto, $mensaje, $cabeceras);
		header('Location: http://ciudadgranja.com/mail');
		die();

	}
?>