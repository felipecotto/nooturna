<!DOCTYPE html>
<html>
	<head>
		<!-- Meta config -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=11">
        <meta name="theme-color" content="#FF045E">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Title -->
		<title> Trabalhe Conosco | Grupo Nooturna </title>
		<!-- Stylesheets -->
		<link rel="stylesheet" href="assets/dist/css/style.min.css">
        <link rel="icon" type="image/ico" href="">
	</head>
	<body class="body-white">
		<?php include 'layouts/_header_interns.php';?>

		<div class="container pt-120 mb-70">
			<div class="row">
				<div class="col-lg-4">
					<h1 class="title-zero-1">Trabalhe Conosco</h1>
					<form action="" class="form-contact">
						<div class="form-group">
							<label for="exampleInputEmail1">Seu nome (obrigatório)</label>
							<input type="email" class="form-control" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Seu telefone </label>
							<input type="email" class="form-control" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Seu e-mail (obrigatório)</label>
							<input type="email" class="form-control" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Qual função pretende trabalhar?</label>
							<input type="email" class="form-control" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Sua mensagem</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
					<img src="assets/dist/images/logo-perspective.png" alt="Logo Nooturna" class="img-fluid m-0-auto d-block mb-30">
					<img src="assets/dist/images/trabalhe-conoso.jpg" alt="Logo Nooturna" class="img-fluid m-0-auto d-block mb-30">
					<p>Você pode nos enviar seu currículo através do formulário ao lado, ele será avaliado e adicionado ao nosso banco de dados e você poderá ser chamado para trabalhar na Nooturna.</p>
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