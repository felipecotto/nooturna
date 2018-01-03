<!DOCTYPE html>
<html>
	<head>
		<!-- Meta config -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=11">
        <meta name="theme-color" content="#000">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Title -->
		<title> Contato | Grupo Nooturna </title>
		<!-- Stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="assets/dist/css/style.min.css">
        <link rel="icon" type="image/ico" href="">
	</head>
	<body class="body-white">
		<?php
			$pagina = "contato";
		?>

		<?php include 'layouts/_header_interns.php';?>

		<section class="map mb-70">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.06990997814!2d-47.41070828502351!3d-23.493991284716415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf60f7b56cbabb%3A0xbbef64bbafa1a5a5!2sRua+Fernando+Silva%2C+190+-+Jardim+Astro%2C+Sorocaba+-+SP%2C+18017-034!5e0!3m2!1spt-BR!2sbr!4v1512436265660" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 foo">
					<h1 class="title-zero-1 mb-30">Contato</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 foo">
					<form method="POST" class="form-contact" id="form_contato">
						<div class="form-group">
							<label>Seu nome (obrigatório)</label>
							<input type="text" class="form-control" id="name" name="name" required>
						</div>
						<div class="form-group">
							<label>Seu e-mail (obrigatório)</label>
							<input type="email" class="form-control" id="email" name="email" required>
						</div>
						<div class="form-group">
							<label>Assunto</label>
							<input type="text" class="form-control" id="assunto" name="assunto">
						</div>
						<div class="form-group">
							<label>Sua mensagem</label>
							<textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
						</div>
						<div class="form-group">
							<div class="form-group">
						  		<input type="file" class="form-control-file" id="exampleFormControlFile1">
							</div>
						</div>
						<div class="div mb-70">
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
					</form>
				</div>
				<div class="col-lg-4 offset-lg-1 box-contato foo">
					<h4>Sorocaba</h4>
					<h4>Administração</h4>
					<a href="#" class="email">email:nooturna@nooturna.com.br</a>
					<p>R. Fernando Silva 190 - 2 andar sala 201, Sorocaba/SP</p>
					<p>Tel: 15 3227.5788 </p>
				</div>
			</div>
		</div>


		<?php include 'layouts/_footer.php';?>
		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="assets/dist/js/libraries.min.js" type="text/javascript"></script>
		<script src="assets/dist/js/scripts.min.js" type="text/javascript"></script>
	</body>
</html>