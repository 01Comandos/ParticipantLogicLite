<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Participant Logic Lite</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="js/responsiveslides.min.js"></script>

	<script>
	    // You can also use "$(window).load(function() {"
	    $(function () {

	      // Slideshow 1
	      $("#slider1").responsiveSlides({
	        maxwidth: 5000,
	        speed: 3900
	      });
	    });
	 </script>

</head>
<body>
		
		<div class="full-width">
			<ul class="rslides" id="slider1">
			  <li><img src="img/fond-one.jpg" alt=""></li>
		      <li><img src="img/fond-one-one.jpg" id="img-edit"></li>
		      <li><img src="img/fond-one-two.jpg" alt=""></li>
			</ul>
		</div>

		<section class="contenido-website">
			<div class="container">
				<div class="row">
					<!-- FORMULARIO ACCEDER -->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="formulario-inicio">
							<h1 id="logo"><img src="img/participantlogicLite-logo.png" alt=""></h1>
							<h6 id="datos-servidor">Server time: 13:30 <br>Wednesday, October 08, 2014 <br> 2014 Shocklogic All rights Reserved</h6>

							<div class="form-one">
								  <div id="contieneformulario">
							            <form action="inc/procesaformulario.php" method="POST">
							              <div class="row">
							                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							                  <input type="text" name="nombre" placeholder="User ID" required="required" id="nombre">
							                  <!-- ICONO DENTRO DE CAMPO - RESET PASSWORD -->
											  <a href="password.php"><span class="glyphicon glyphicon-question-sign" id="icono-reset-password"></span></a>

							                  <input type="password" name="password" placeholder="Password " required="required" id="password">
							                  <input type="text" name="open" placeholder="Open Project (optional)" required="required" id="Open-project">
							                </div>
							              </div>
							              <div class="row">
							              	<input type="submit" value="Login" id="botonenviar">
							              </div>
							            </form>
						          </div>
							</div>
						     <a href="register.php"><button class="btn btn-default dropdown-toggle" type="button" id="boton-register" data-toggle="dropdown"> Register</button></a>
							 
						</div>
					</div>

					<!-- BANNER -->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="banner"></div>
					</div>
				</div>
			</div>
		</section>
	

	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>