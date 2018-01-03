<!DOCTYPE html>
<html>
	<head>
		<!-- Meta config -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=11">
        <meta name="theme-color" content="#000">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Title -->
		<title> Solicite seu orçamento | Grupo Nooturna </title>
		<!-- Stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
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
					<form method="POST" class="form-contact" id="form_orcamento">
						<div class="mb-30">
							<div class="form-group">
								<label>Seu nome (obrigatório)</label>
								<input type="text" class="form-control" id="name" name="name" required>
							</div>
							<div class="form-group">
								<label>Seu e-mail (obrigatório)</label>
								<input type="email" class="form-control" id="email" name="email" required>
							</div>
							<div class="form-group">
								<label>Seu Telefone</label>
								<input type="text" class="form-control" id="phone" name="phone">
							</div>
						</div>
						<div class="mb-30">
							<div class="form-group">
								<label>Nome da Empresa / Condomínio</label>
								<input type="text" class="form-control" id="nome_empresa" name="nome_empresa">
							</div>
							<div class="form-group">
								<label>Endereço Completo</label>
								<input type="text" class="form-control" id="endereco" name="endereco">
							</div>
							<div class="form-group">
								<label>Cidade</label>
								<input type="text" class="form-control" id="cidade" name="cidade">
							</div>
							<div class="form-group">
								<label>Estado</label>
								<input type="text" class="form-control" id="estado" name="estado">
							</div>
							<div class="form-group">
								<label>Deseja orçamento para</label>
								<input type="text" class="form-control" id="orcamento" name="orcamento">
							</div>
							<div class="form-group">
								<label>Descreva sua solicitação</label>
								<textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>Qual prioridade da sua solicitação</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="prioridade" id="prioridade" value="alta"> Alta
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="prioridade" id="prioridade" value="media"> Média
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="prioridade" id="prioridade" value="baixa"> Baixa
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