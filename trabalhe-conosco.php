<!DOCTYPE html>
<html>
	<head>
		<!-- Meta config -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=11">
        <meta name="theme-color" content="#000">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Title -->
		<title> Trabalhe Conosco | Grupo Nooturna </title>
		<!-- Stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="assets/dist/css/style.min.css">
        <link rel="icon" type="image/ico" href="">
	</head>
	<body class="body-white">
		<?php
			$pagina = "trabalhe";
		?>

		<?php include 'layouts/_header_interns.php';?>

		<div class="container pt-120 mb-70">
			<div class="row">
				<div class="col-lg-12 foo">
					<h1 class="title-zero-1 mb-30">Trabalhe Conosco</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 foo">
					<form method="POST" class="form-contact m-mb-50" id="form_trabalho">
						<div class="form-group">
							<label>Seu nome (obrigatório)</label>
							<input type="text" class="form-control" id="name" name="name" required>
						</div>
						<div class="form-group">
							<label>Seu telefone </label>
							<input type="text" class="form-control" id="phone" name="phone">
						</div>
						<div class="form-group">
							<label>Seu e-mail (obrigatório)</label>
							<input type="email" class="form-control" id="email" name="email" required>
						</div>
						<div class="form-group">
							<label>Qual função pretende trabalhar?</label>
							<input type="text" class="form-control" id="funcao" class="funcao">
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
						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</div>
				<div class="col-lg-4 offset-lg-1">
					<img src="assets/dist/images/logo-perspective.png" alt="Logo Nooturna" class="img-fluid m-0-auto d-block mb-30 foo">
					<img src="assets/dist/images/trabalhe-conoso.jpg" alt="Logo Nooturna" class="img-fluid m-0-auto d-block mb-30 foo">
					<p class="foo">Você pode nos enviar seu currículo através do formulário ao lado, ele será avaliado e adicionado ao nosso banco de dados e você poderá ser chamado para trabalhar na Nooturna.</p>
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