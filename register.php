<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Participant Logic Lite</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body class="full-width-register">

		<section class="contenido-website">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1 id="logo-register"><img src="img/participantlogicLite-logo.png" alt=""></h1>
						<img src="img/degrade.png" alt="" id="degrade-register">
					</div>

					<div class="row">
						<!-- FORMULARIO ACCEDER -->
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="formulario-register">
									<div class="form-register">
										  <div id="contieneformulario">
									            <form action="inc/procesaformulario.php" method="POST">
									              <div class="row">
									                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									                	<h2 id="titulo-register">Register</h2>
									                	<h6 id="subfrase">*All fields are required</h6>
									                	<input type="text" name="email" placeholder="Email" required="required" id="email1">
									                	<input type="password" name="password" placeholder="Password " required="required" id="password1">
									                	<input type="password" name="password" placeholder="Confirm Password " required="required" id="confirm-password">
									                    <input type="text" name="nombre" placeholder="First Name" required="required" id="first-name">
									                    <input type="text" name="nombre" placeholder="Family Name" required="required" id="family-name">
									                    <span>
									                       <label for="Gender (pulldown)" id="gender-title">Gender (pulldown)</label>
													      <select id="gender" name="sex">
													        <option value=""></option>
													        <option value="sex1">Male</option>
													        <option value="sex2">Female</option>
													      </select>
													    </span>

													    <!-- CHECKBOX -->
													    <div class="checkbox">
														    <label>
														      <input type="checkbox" checked> Yes, I agree to <a href="#" target="_blank"><span>the General Terms and Conditions</span></a> 
														    </label>
														</div>
								               
									                </div>
									              </div>
									              <div class="row">
									              	<input type="submit" value="Get Started Now" id="boton-start">
									              </div>
									            </form>
								          </div>
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