<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Formulario de Datos Proyecto1</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link ref="css/owl.transitions.css" rel="stylesheet">
	<link href="css/estiloprincipal.css" rel="stylesheet">
</head>
<body>
	<header id="header">
		<nav id="main-menu" class="navbar navbar-default navbar-fixed-top top-nav-collapse" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img src="img/LogoAzul2.jpeg" alt="logo"></a>
				</div>
				<div class="collapse  navLi navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="scroll active"><a href="index.php">Inicio </a></li>
                        <li class="scroll"><a href="empleos.php"> Empleos </a></li>
                        <li class="scroll"><a href="Quienes somos.php"> ¿Quienes Somos?</a></li>
                        <li class="scroll"><a href="contactoGer.php">Contacto</a></li>
<!--                     <li class=" drop nav-item dropdown">
                            <a class="  nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img src="img/menuBtn.png" alt="Menu">
                            </a>
                            <div class=" menuB dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Mi Cuenta</a> <br>
                              <a class="dropdown-item" href="Mensajes.html">Mensajes</a> <br>
                              <a class="dropdown-item" href="#">Salir</a>
                            </div>
                         </li>-->
                         

                        <?php
                            if(isset($_SESSION['user_id']))
                            {
                              echo "
                         <li class=\"scroll btnSalir \">
                             <form action=\"includes/logout.inc.php\"  method=\"POST\">
                                <button class=\"btn btn-danger\" type=\"submit\" name=\"submit\">Salir</button>
                              </form>
                         </li>

                         <li class=\"scroll btnMensajes\">
                             <form action=\"Mensajes.php\" method=\"POST\">
                                <button class=\"btn btn-danger\" type=\"submit\" name=\"submit\">Mensajes</button>
                              </form>
                         </li>

                              ";
                            }else
                            {
                                echo "   <li class=\" drop nav-item dropdown\">
                            <a class=\"  nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                              <img src=\"img/menuBtn.png\" alt=\"Menu\">
                            </a>
                            <div class=\" menuB dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                              <a class=\"dropdown-item\" href=\"#\">Mi Cuenta</a> <br>
                              <a class=\"dropdown-item\" href=\"Mensajes.php\">Mensajes</a> <br>
                              <a class=\"dropdown-item\" href=\"#\">Salir</a>
                            </div>
                         </li>";
                            }

                        ?>

					</ul>
				</div>


			</div>
		</nav>
	</header>
	<section id="main-slider">
		<div class="owl-carousel">
            <div class="item" style="background-image: url(img/w7.jpeg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                    <h2 class="section-title text-center wow fadeInDown">Localización de zonas que se acomplen a tu preferencia</h2>
                                    <h1 class="section-title text-center wow fadeInDown">SOMOS CUC</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="item" style="background-image: url(img/w9.jpeg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                    <h2 class="section-title text-center wow fadeInDown">
                                    Categrías y Cargos Profesionales
                                    </h2>
                                    <h1 class="section-title text-center wow fadeInDown">SOMOS CUC</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(img/1.jpg);">
            	<div class="slider-inner">
            		<div class="container">
            			<div class="row">
            				<div class="col-sm-12 text-center">
            					<div class="carousel-content">
            						<h2>Ofertas seleccionadas en tu correo</h2>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
        </div>
	</section>
	<section id="get-in-touch">
		<div class="container">
			<div class="section-header">
				<h2 class="section-title text-center wow fadeInDown">REGISTRO CURRÍCULUM</h2>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="address">
						<img src="img/logo cuc azul-rojo.png">
					</div>
					<div class="address">
						<h4>Ofertas seleccionadas a tu correo</h4>
					</div>
					<div class="address">
						<h4>Dirección</h4>
						<p>Cartago, Barrio el Molino, de la Funeraria La Última Joya, 300 metros Sur.</p>
					</div>
					<div class="address">
						<h4>Email</h4>
						<p><a href="#">empleos@cuc.co.cr</a></p>
					</div>
					<div class="address">
						<img src="img/re1.jpeg">
					</div>
				</div>
			<div class="col-sm-6">
				<form action="#" method="post" name="contact-form" id="main-contact-form">
					<div class="section-header">
						<h3 class="section-title text-center wow fadeInDown">ESTUDIOS</h3>
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Universidad" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Carrera Aplicada" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Universidad" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Carrera Aplicada" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Universidad" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Carrera Aplicada" class="form-control" name="name">
					</div>
					<div class="section-header">
						<h3 class="section-title text-center wow fadeInDown">TRABAJOS REALIZADOS</h3>
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Nombre de la empresa" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Localización de la empresa" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Posición ocupada" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Tareas realizadas" class="form-control" name="name">
					</div>
					<div class="form-group">
						<textarea required placeholder="Lista de tareas realizadas" rows="8" class="form-control" name="message"></textarea>
		            </div>
		            <div class="form-group">
						<input type="text" required placeholder="Nombre de la empresa" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Localización de la empresa" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Posición ocupada" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Tareas realizadas" class="form-control" name="name">
					</div>
					<div class="form-group">
		                <textarea required placeholder="Lista de tareas realizadas" rows="8" class="form-control" name="message"></textarea>
		            </div>
		            <div class="form-group">
						<input type="text" required placeholder="Nombre de la empresa" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Localización de la empresa" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Posición ocupada" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Tareas realizadas" class="form-control" name="name">
					</div>
					<div class="form-group">
		                <textarea required placeholder="Lista de tareas realizadas" rows="8" class="form-control" name="message"></textarea>
		            </div>
		            <div class="form-group">
						<input type="text" required placeholder="Dirección proveída por el usuario" class="form-control" name="name">
					</div>
					<div class="section-header">
						<h3 class="section-title text-center wow fadeInDown">IDIOMAS</h3>
					</div>
					<div class="form-group">
		                <textarea required placeholder="Idiomas que maneja el usuario" rows="8" class="form-control" name="message"></textarea>
		            </div>
		            <div class="section-header">
						<h3 class="section-title text-center wow fadeInDown">REFERENCIAS</h3>
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Nombre de contacto" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Area de trabajo" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Telefono de contacto" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Nombre de contacto" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="email" required placeholder="Email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
						<input type="text" required placeholder="Nombre de contacto" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Area de trabajo" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Telefono de contacto" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Nombre de contacto" class="form-control" name="name">
					</div>
					<div class="form-group">
						<input type="email" required placeholder="Email" class="form-control" name="email">
                    </div>
                    <div class="section-header">
						<h3 class="section-title text-center wow fadeInDown">INTERESES</h3>
					</div>
					<div class="form-group">
		                <textarea required placeholder="Intereses" rows="8" class="form-control" name="message"></textarea>
		            </div>
		            <button class="btn btn-primary" type="submit">ACEPTAR</button>
		        </form>
		    </div>
		</div>
	</div>
</section>
	<footer id="footer">
    	<div class="container text-center">
    		All rights reserved © 2018 | <a href="http://www.cuc.ac.cr">Colegio Universitario de Cartago</a>
    	</div>
    </footer>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/scrolling-nav.js"></script>
	<script>
		$(document).ready(function($)
		{
			$("#owl-example").owlCarousel();
		});
		$("body").data("page", "frontpage");
		$("#owl-example").owlCarousel(
		{
			items:3,
		})
	</script>

</body>
</html>