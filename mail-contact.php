<?php 

	$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT); 

	$Erro = true;
	$name = $GetPost['name'];
	$assunto = $GetPost['assunto'];
	$email = $GetPost['email'];
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
	$Mailer->Subject = "Contato realizado pelo site - Contato - {$name}"." ".date("H:i")." - ".date("d/m/Y");
	$Mailer->Body = "<p><strong>Mensagem enviada por:</strong> {$name} </p> 
					 <p><strong>E-mail:</strong> {$email} </p>
					 <p><strong>Assunto:</strong> {$assunto} </p>
					 <p><strong>Mensagem:</strong> {$mensagem} </p>
					 ";
	if($Mailer->Send()) {
		$Erro = false;
		}
	
	var_dump($Erro);

 ?>