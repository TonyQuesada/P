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
	<title>Empleos</title>
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
	<section id="get-in-touch">
		<div class="container">


			    <section id="services">

			    <div class="section-header">
					<h2 class="section-title text-center fadeInDown">Nuestros Empleos</h2>
				</div>

					<div class="container">
						
						<div class="col-sm-12 col-md-6">
						  <div id="filtro" class="col-sm-12 col-md-6">
						    <p class="lead" id="filtroP">Filtros</p>
							    <div class="container contFiltro col-sm-12">
								    <div id="Publicacion" class="row">
								      <div class="col-md-8 col-sm-6">
								        <strong>Publicacion:</strong>
								      </div>
								    </div>

								    <div id="selectFecha" class="row">
								      <div class="col-md-8 col-sm-8">
								        <p>De:</p>
								      </div>
								      <div class="col-sm-6 col-sm-6 jobTextBox">
								         <input id="date" type="date">
								     </div>

							
								    </div>

								    <div id="selectFecha" class="row">
								      <div class="col-md-12 col-sm-12">
								        <p>Hasta:</p> 
								      </div>
								      <div class="col-md-12 col-md-12 jobTextBox">
								         <input id="date" type="date">
								     </div>
								    </div>

							   
						    </div>

						    <div class="container contFiltro col-md-12">
						    	
						    	 <div id="selectFecha" class="row">
							      <div class="col-md-12 col-sm-6">
							       <p> <strong>Salario:</strong></p>
							      </div>
							    </div>

							    <div id="selectFecha" class="row">
							      <div class="col-md-3 col-sm-3">
							        <p>De:</p>
							      </div>
							      <div class="col-md-9 col-md-9 jobTextBox" >
							         <input type="text" class="form-control">
							     </div>

							      <div class="col-md-3 col-sm-3">
							        <p>Hasta:</p> 
							      </div>
							      <div class="col-md-9 col-md-9 jobTextBox">
							          <input type="text" class="form-control">
							     </div>
						    	
						    </div>
									   
						  </div>
						  	<form  action="imprimir.html">
								<button class="btn btn-danger"> Filtrar</button>
							</form>

						  </div>
						</div>
						<div class="clearfix visible-sm-block "></div>
							<div class="container Bkground">
								<script>console.log("Esta es la primera linea que no es php")</script>
				
									
								<?php
									
									echo "<script>console.log(\"Estoy en el php, la variable de session ID es = ".$_SESSION['user_id']." \")</script>";
									$sql = "select * from TRABAJO;";
									$result =  mysqli_query($conn, $sql);
									$resultCheck = $result->num_rows;
									echo "<script>console.log(\"Paso result check new\")</script>";

									if( $resultCheck > 0)
									{

										echo "<script>console.log(\"Resultado fue mayor a 0\")</script>";
										while ($row = mysqli_fetch_assoc($result))
										{	

											echo "<script>console.log(\"Entro While\")</script>";
											echo "
													<div class=\"col-md-6 Public\">

														<div class=\"row\">
													      <div class=\" col-md-5\">
													        <p><strong>\" .$row['titulo']. \"</strong></p>
													      </div>
													      <div class=\" col-md-5 col-md-offset-2\">
													        <p><strong>Publicacion:</strong> " .$row['fecha_publicacion']. "</p>
													      </div>
													    </div>

														<div class=\"col-md-10 col-md-offset-2\">
															
															<p>".$row['descripcion']."</p>
															
														</div>	

														<div class=\"col-md-5\">
															<p><STRONG>Salario:</STRONG> " . $row['salario']. "  </p>
														</div>

														<div class=\"col-md-2 col-md-offset-5\">
															<form  action=\"Trabajo.php\" method=\"post\">
																<button class=\"btn btn-danger\" name=\"trabajoID\" type=\"submit\" value= \" " . $row['id_trab']. " \"> Ver</button>
															</form>

															
														</div>

														<div  class=\" col-md-12 patt\"></div>


													</div>";
										}
									}else
									{
										echo "<script>console.log(\"Pos nop\")</script>";
									}

								?>
					
	


		  					</div>

		  			</div>

			    </section>


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