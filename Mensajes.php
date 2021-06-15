<?php
	include_once 'includes/dbm.inc.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Lista de mensajes</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
						    </div>
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
	<section id="get-in-touch">
		<div class="container">
			<div class="section-header">
				<h2 class="section-title text-center fadeInDown">Mensajes</h2>
			</div>

				<div class="container ">
					


					<div class="col-md-3 col-md-offset-7  ">

						<p class="lead orden">Orden:

							<select class="combBox">
							  <option value="Acendente">Acendente</option>
							  <option value="Decendente">Decendente</option>

							</select>

						 </p>
						
					</div>

				</div>



								<?php


									//$_SESSION['user_id']
									$sql = "SELECT b.remitente,b.destinatario,b.asunto, b.contenido FROM MENSAJEXUSUARIO a , MENSAJE b WHERE a.id_user= ".$_SESSION['user_id']."; ";
									$result =  mysqli_query($conn, $sql);
									$resultCheck = $result->num_rows;
	
									echo "<script>console.log(\"Result check es = " . $resultCheck." \")</script>";

									if( $resultCheck > 0)
									{

										echo "<script>console.log(\"Resultado fue mayor a 0\")</script>";
										while ($row = mysqli_fetch_assoc($result))
										{	

											echo "<script>console.log(\"Entro While\")</script>";
											echo "
															<div class=\"container\">

																		<div class=\"col-sm-12\">
																			<div class=\"msjs col-md-10 col-md-offset-1\">
																				<p ><strong>De:</strong> ".$row['remitente']."</p>
																				<p><strong>Asunto:</strong> ".$row['asunto']."</p>

																				<div class=\"boxResum col-md-12\">
																				<p class=\"RcontMsj\">
																					".$row['contenido']."
																					</p>

																				</div>

																				<div class=\"col-md-4\">
																					<p><strong>Fecha:</strong> 19/21/2018 </p>

																				</div>


																				<div class=\"col-md-2 col-md-offset-6\">
																					<form action=\"mensajeria.php\" method=\"POST\">
																						<button class=\"btn btn-danger btnResponder\" name=\"mensajeBtn\" value= \" ".$row['id_msj']."\">Responder</button>
																					</form>

																				</div>


																		</div>
																		
																	</div>
															</div>";
											}

									}else
									{
										echo "<script>console.log(\"Pos nop\")</script>";
										echo "						<div class=\"boxResum col-md-12\">
																		<h2 class=\"anuncio\">
																							No tiene mensajes

																	</div>
										";
									}
								

							?>






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