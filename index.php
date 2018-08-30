	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>DESARROLLO WEB</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-left">
			  				<ul>
			  					
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
			  			</div>
			  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="index.php">Home</a></li>
				  
				        				          					          		          
						  <li><a href="contact.php">Contacto</a></li>
						  <li><a href="mostrarDatos.php">Ver Mensajes</a></li>
						  <li><a href="mostrarDatosPeronal.php">Ver Inf. Personal</a></li>
						  <li><a href="mostrarDatosEmpresa.php">Ver Inf. Empresa</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			
			<!-- start banner Area -->
			<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>				
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6 class="text-white">Buscanos!</h6>
							<h1 class="text-white">Todo sobre Desarrollo Web</h1>
							<p class="text-white">
							Buscanos te brindaremos el mejor servicio sobre App Web
							</p>
							<a href="contact.php" class="primary-btn text-uppercase">Contactanos</a>
						</div>
						<div class="col-lg-4 col-md-6 banner-right">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Inf. Personal</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Inf. Empresarial</a>
							  </li>
							
							<div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
							  <form action="insertDB/i_infPersonal.php" method="POST" class="form-wrap">
							
						
									<input type="text" class="form-control" name="nombreCompleto" id="nombreCompleto" placeholder="Nombre Completo " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre Completo '">									
									<input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Direccion '">
									<input type="text" class="form-control date-picker" name="Fecha_Registro" id="Fecha_Registro" placeholder="Fecha de Registro " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Fecha de Registro '">
									<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefono '">
									<input type="text" class="form-control" name="correo" id="correo" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email '">		
									<button type="submit" class="btn btn-success">Enviar Informacion</button>									
								</form>
							  </div>
							  <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">

							  <form action="insertDB/i_infEmpresa.php" method="POST" class="form-wrap">
								<input type="text" class="form-control" name="nombreEmpresa" id="nombreEmpresa" placeholder="Nombre Empresa " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre Completo '">									
									<input type="text" class="form-control" name="direccion_Empresa" id="direccion_Empresa" placeholder="Direccion Empresa " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Direccion Empresa '">
									<input type="text" class="form-control date-picker" name="Fecha_Fundacion" id="Fecha_Fundacion" placeholder="Fecha Fundacion Empresa " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Fecha Fundacion Empresa'">
									<input type="text" class="form-control" name="telefono_Empresa" placeholder="Telefono Empresa " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefono Empresa '">
									<input type="text" class="form-control" name="correo_Empresa" placeholder="Email Empresa" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Empresa '">		
									
									<button type="submit" class="btn btn-success">Enviar Informacion</button>									
								</form>							  	
							  </div>
							  
			</section>
			<!-- End banner Area -->

		

			
	
					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>