<!DOCTYPE html>
<html>
	<head>
		<!-- Meta config -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=11">
        <meta name="theme-color" content="#FF045E">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Title -->
		<title> Grupo Nooturna </title>
		<!-- Stylesheets -->
		<link rel="stylesheet" href="assets/dist/css/swiper.css">
		<link rel="stylesheet" href="assets/dist/css/style.min.css">

		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link rel="icon" type="image/ico" href="">
	</head>
	<body class="home">
		<?php include 'layouts/_header.php';?>

		<section class="video">
			<video autoplay loop poster="assets/dist/images/videotorres.jpg" class="bg_video">
				<source src="assets/dist/images/video/video-w.webm" type="video/webm">
				<source src="assets/dist/images/video/video-m.mp4" type="video/mp4">
			</video> 
		</section>


		<section class="banner mb-100">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="assets/dist/images/banners/banner-rotativo-01.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="assets/dist/images/banners/banner-rotativo-02.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="assets/dist/images/banners/banner-rotativo-03.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="assets/dist/images/banners/banner-rotativo-04.jpg" alt="">
					</div>
				</div>
			</div>
		</section>

		<div class="container servicos-home">
			<div class="row">
				<div class="offset-lg-3 col-lg-6">
					<img src="assets/dist/images/logo-nooturna-grande.png" alt="Logo Nooturna" class="img-fluid m-0-auto mb-150">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 text-center">
					<a href="seguranca-patrimonial.php"><img src="assets/dist/images/seguranca-patrimonial.png" alt="Segurança Patrimonial" class="img-fluid m-0-auto mb-25"></a>
					<h3>Segurança Patrimonial</h3>
				</div>
				<div class="col-lg-3 text-center">
					<a href="seguranca-pessoal.php"><img src="assets/dist/images/seguranca-pessoal.png" alt="Segurança Pessoal" class="img-fluid m-0-auto mb-25"></a>
					<h3>Segurança Pessoal</h3>
				</div>
				<div class="col-lg-3 text-center">
					<a href="escolta-armada.php"><img src="assets/dist/images/escolta-armada.png" alt="Segurança Patrimonial" class="img-fluid m-0-auto mb-25"></a>
					<h3>Escolta Armada</h3>
				</div>
				<div class="col-lg-3 text-center">
					<a href="portaria.php"><img src="assets/dist/images/portaria.png" alt="Portaria" class="img-fluid m-0-auto mb-25"></a>
					<h3>Portaria (Condomínios & Empresas)</h3>
				</div>
				<div class="col-lg-3 text-center">
					<a href="detetive-particular.php"><img src="assets/dist/images/detetive-particular.png" alt="Segurança Patrimonial" class="img-fluid m-0-auto mb-25"></a>
					<h3>Detetive Particular</h3>
				</div>
				<div class="col-lg-3 text-center">
					<a href="eventos-staff.php"><img src="assets/dist/images/staff-eventos.png" alt="Segurança Patrimonial" class="img-fluid m-0-auto mb-25"></a>
					<h3>Staff Eventos</h3>
				</div>
				<div class="col-lg-3 text-center">
					<a href="eventos-staff.php#festa"><img src="assets/dist/images/seguranca-eventos.png" alt="Segurança Patrimonial" class="img-fluid m-0-auto mb-25"></a>
					<h3>Segurança Eventos</h3>
				</div>
				<div class="col-lg-3 text-center">
					<a href="terceirizacao.php"><img src="assets/dist/images/terceirizacao.png" alt="Segurança Patrimonial" class="img-fluid m-0-auto mb-25"></a>
					<h3>Terceirização Serviços</h3>
				</div>
			</div>
			<div class="row d-flex align-items-center">
				<div class="col-lg-8">
					<img src="assets/dist/images/cell-mockup.png" alt="Redes Sociais Nooturna" class="img-fluid">
				</div>
				<div class="col-lg-4">
					<aside class="home-social-media">
						<h2 class="title-zero-1">follow up</h2>
						<ul>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-instagram"></i></a></li>
						</ul>
					</aside>
				</div>
			</div>
		</div>
		<section class="quote">
			<div class="container">
				<h2 class="title-zero-1 text-uppercase">Solicite um orçamento</h2>
				<h3>Sinônimo de confiança & credibilidade</h3>
				<img src="assets/dist/images/logo-simbolo.png" alt="Logo Nooturna" class="img-fluid m-0-auto d-block mb-30">
				<div class="text-center">
					<a href="orcamento.php" class="button-rounded outline">Orçamento</a>
				</div>
			</div>
		</section>

		<?php include 'layouts/_footer.php';?>
		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="assets/dist/js/libraries.min.js" type="text/javascript"></script>
		<script src="assets/dist/js/scripts.min.js" type="text/javascript"></script>
	</body>
</html>