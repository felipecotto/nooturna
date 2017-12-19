<!DOCTYPE html>
<html>
	<head>
		<!-- Meta config -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=11">
        <meta name="theme-color" content="#FF045E">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Title -->
		<title> Solicite seu orçamento | Grupo Nooturna </title>
		<!-- Stylesheets -->
		<link rel="stylesheet" href="assets/dist/css/style.min.css">
        <link rel="icon" type="image/ico" href="">
	</head>
	<body class="body-white">
		<?php
			$pagina = "orcamento";
		?>

		<?php include 'layouts/_header_interns.php';?>

		<section class="banner-orcamento">
			<div class="container">
				<h1>Solicite seu orçamento <small> É um imenso prazer atendê-lo </small></h1>
			</div>
		</section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 foo">
					<h1 class="title-zero-1 mb-30">Orçamentos</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 foo">
					<form action="" class="form-contact">
						<div class="mb-30">
							<div class="form-group">
								<label for="exampleInputEmail1">Seu nome (obrigatório)</label>
								<input type="email" class="form-control" id="exampleInputEmail1">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Seu e-mail (obrigatório)</label>
								<input type="email" class="form-control" id="exampleInputEmail1">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Seu Telefone</label>
								<input type="email" class="form-control" id="exampleInputEmail1">
							</div>
						</div>
						<div class="mb-30">
							<div class="form-group">
								<label for="exampleInputEmail1">Nome da Empresa / Condomínio</label>
								<input type="email" class="form-control" id="exampleInputEmail1">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Endereço Completo</label>
								<input type="email" class="form-control" id="exampleInputEmail1">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Cidade</label>
								<input type="email" class="form-control" id="exampleInputEmail1">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">EStado</label>
								<input type="email" class="form-control" id="exampleInputEmail1">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Deseja orçamento para</label>
								<input type="email" class="form-control" id="exampleInputEmail1">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Descreva sua solicitação</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Qual prioridade da sua solicitação</label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							     <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Alta
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							     <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Média
							  </label>
							</div>
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							     <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Baixa
							  </label>
							</div>
						</div>
						<div class="mb-70">
							<button type="submit" class="btn btn-primary">Solicitar Orçamento</button>	
						</div>
					</form>
				</div>
				<div class="col-lg-4 offset-lg-1 foo">
					<p class="title-zero-1">Envie sua solicitação de Orçamento preenchendo os campos ao lado.</p>
					<p class="title-zero-1">Em breve nossa equipe responsavel retornará seu contato.</p>
					<p class="title-zero-1"><strong>Dep. Comercial</strong></p>
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