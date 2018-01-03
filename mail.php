<?php 

	$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT); 

	$Erro = true;
	$name = $GetPost['name'];
	$phone = $GetPost['phone'];
	$email = $GetPost['email'];
	$nome_empresa = $GetPost['nome_empresa'];
	$endereco = $GetPost['endereco'];
	$cidade = $GetPost['cidade'];
	$estado = $GetPost['estado'];
	$orcamento = $GetPost['orcamento'];
	$prioridade = $GetPost['prioridade'];
	$mensagem = $GetPost['mensagem'];

	include_once "phpmailer/class.smtp.php";
	include_once "phpmailer/class.phpmailer.php";

	$Mailer = new PHPMailer; 
	$Mailer->CharSet = "utf8";
	$Mailer->SMTPDebug = 3;
	$Mailer->IsSMTP();  
	$Mailer->Host ="smtp.nooturna.com.br"; 
	$Mailer->SMTPAuth = true; 
	$Mailer->Username ="noreply@nooturna.com.br";
	$Mailer->Password ="nooturna10";
	$Mailer->SMTPSecure = "";
	$Mailer->Port = 587 ;
	$Mailer->FromName = "{$name}";
	$Mailer->From = "noreply@nooturna.com.br";
	$Mailer->addAddress("nooturna@nooturna.com.br");
	$Mailer->IsHTML(true);
	$Mailer->Subject = "Contato realizado pelo site - Orçamento - {$name}"." ".date("H:i")." - ".date("d/m/Y");
	$Mailer->Body = "<p><strong>Mensagem enviada por:</strong> {$name} </p> 
					 <p><strong>E-mail:</strong> {$email} </p>
					 <p><strong>Telefone:</strong> {$phone} </p>
					 <p><strong>Nome da Empresa / Condomínio:</strong> {$nome_empresa} </p>
					 <p><strong>Endereço:</strong> {$endereco} </p>
					 <p><strong>Cidade:</strong> {$cidade} </p>
					 <p><strong>Estado:</strong> {$estado} </p>
					 <p><strong>Orçamento para:</strong> {$orcamento} </p>
					 <p><strong>Mensagem:</strong> {$mensagem} </p>
					 <p><strong>Prioridade:</strong> {$prioridade} </p>";
	if($Mailer->Send()) {
		$Erro = false;
		}
	
	var_dump($Erro);

 ?>