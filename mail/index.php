<html>
	<head>
		<title> Mailer </title>
		<script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../bower_components/angular/angular.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style_mail.css">
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<ul class="nav navbar-nav">
					<li class="active">
						<a>
							<b>Las Glorietas Marketing</b>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<form method="post" action="sender.php">
				<input type="hidden" name="subject" value=" &#191;Quieres aumentar tus ventas&#63;" />

				<ul>
					<li>
						<div class="input-group">
							<span class="input-group-addon">Para:</span>
							<input class="form-control" name="name" type="text" placeholder="Escribe un Nombre" required>
						</div>
					</li>
					<li>
						<div class="input-group">
							<span class="input-group-addon">Email: </span>
							<input type="email" class="form-control" name="email" placeholder="Escribe un Mail" required>
						</div>
					</li>	
					<li>
						<div class="container">
							<label>Genero</label>
							<ul>
								<li>
									<label>Femenino</label>
									<input type="radio" name="gender" value="a" required/>
								</li>
								<li>
									<label>Masculino</label>
									<input type="radio" name="gender" value="o" required/>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="container">
							<button class="btn btn-success" type="submit">Enviar</button>
						</div>
					</li>

				</ul>
			</form>
		</div>
	</body>
</html>