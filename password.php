<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Participant Logic Lite</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body class="full-width-password">

		<section class="contenido-website">
			<div class="container">
				<div class="row">
					<!-- FORMULARIO ACCEDER -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="formulario-reset">
							<h1 id="logo"><img src="img/participantlogicLite-logo.png" alt=""></h1>
							<div class="form-two">
								  <div id="formulario-password">
							            <form action="inc/procesaformulario.php" method="POST">
							              <div class="row">
							                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							                  <input type="text" name="email" placeholder="Email" required="required" id="email">
							                </div>
							              </div>
							              <div class="row">
							              	<button class="btn btn-default dropdown-toggle" type="button" id="boton-cancel" data-toggle="dropdown"> Cancel</button>
							              	
							              </div>
							              <div class="row">
							              	<input type="submit" value="Reset Password" id="reset-password">
							              </div>
							            </form>
						          </div>
							</div>
							 
						</div>
					</div>
				</div>
			</div>
		</section>	
	

	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>