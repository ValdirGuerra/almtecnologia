<?php

if ( isset($service)  && ($service == "contatoService") && isset($action)  ) {

	if ($action == "enviarEmail") {
	// Start Action 

			require_once(PATH_CLASSES."/PHPMailerAutoload.php");
			Session::start();
			
			// VARIAVEIS INICIAIS
			$date = date("d/m/Y h:i");

			// RECEBE OS VALORES VINDO DO FORMUL�RIO E ATRIBUI AS VARI�VEIS
			$nome = utf8_decode($_POST['nome']);
			$email = $_POST['email'];
			$telefone = $_POST['fone'];
			$assunto = utf8_decode($_POST['assunto']);
			$mensagem = utf8_decode($_POST['mensagem']);

			//CABE�ALHO - ONFIGUR?ES SOBRE SEUS DADOS E SEU WEBSITE
			$exibir_apos_enviar='./obrigado';
			$nome_do_site = Empresa::$empresaNome;
			$email_que_recebe_formulario = Empresa::$emailQueRecebeFormulario;

			$mensagem_de_resposta="Recebemos com sucesso suas informa?s e em breve entraremos em contato!\n\nAtenciosamente,\n\n$nome_do_site\n\nEnviado em: $date";


			// FORMA COMO RECEBER� O E-MAIL (FORMUL�RIO)
			$mensagem = "

			FORMUL?IO ENVIADO PELO WEBSITE " . mb_strtoupper(Empresa::$empresaNome) .  " :\n
			Nome: $nome\n
			Email: $email\n
			Telefone: $telefone\n
			Assunto: $assunto\n
			Mensagem: $mensagem\n
			ENVIADO EM: $date
			";

			//ENVIO DA MENSAGEM ORIGINAL

			$mailer = new PHPMailer();
			$mailer->IsSMTP();
			$mailer->SMTPDebug = 0;
			$mailer->Priority = 3;
			//$mailer->Mail->CharSet = 'iso-8859-1';
			$mailer->Port = 587; //Indica a porta de conex�o para a sa�da de e-mails
			$mailer->Host = Empresa::$hostSMTP;
			$mailer->SMTPAuth = true; //define se haver� ou n�o autentica��o no SMTP
			$mailer->Username = Empresa::$emailSMTP; //Informe o e-mai o completo
			$mailer->Password = Empresa::$passwordSMTP; //Senha da caixa postal
			$mailer->FromName = 'Website ' . $nome_do_site; //Nome que ser� exibido para o destinat�rio
			$mailer->From = Empresa::$emailSMTP; //Obrigat�rio ser a mesma caixa postal indicada em "username"
			$mailer->AddAddress($email_que_recebe_formulario,$email_que_recebe_formulario); //Destinat�rios
			$mailer->Subject = $assunto;
			$mailer->Body = $mensagem;
			$mailer->XMailer = "WebSite";
			$mailer->AddReplyTo($email,$email);
			if(!$mailer->Send())
			{
				$_SESSION['CONTATO_AVISO'] = "Erro ao enviar mensagem";
				$_SESSION['CONTATO_MENSAGEM'] = "A mensagem n?pode ser enviada";
			echo "<script>window.location='$exibir_apos_enviar'</script>";
				//echo "Mailer Error: " . $mailer->ErrorInfo; 
			} else { 

					if (isset($email) && (strlen($email) >= 7)) {
						//ENVIO DE MENSAGEM DE RESPOSTA AUTOMATICA
						$mailer = new PHPMailer();
						$mailer->IsSMTP();
						$mailer->SMTPDebug = 0;
						$mailer->Priority = 3;
						// $mailer->Mail->CharSet = 'iso-8859-1';
						$mailer->Port = 587; //Indica a porta de conex�o para a sa�da de e-mails
						$mailer->Host = Empresa::$hostSMTP;
						$mailer->SMTPAuth = true; //define se haver� ou n�o autentica��o no SMTP
						$mailer->Username =  Empresa::$emailSMTP; //Informe o e-mai o completo
						$mailer->Password = Empresa::$passwordSMTP; //Senha da caixa postal
						$mailer->FromName = $nome_do_site; //Nome que ser� exibido para o destinat�rio
						$mailer->From =  Empresa::$emailSMTP; //Obrigat�rio ser a mesma caixa postal indicada em "username"
						$mailer->AddAddress($email, $nome); //Destinat�rios
						$mailer->Subject = "Re: $assunto";
						$mailer->Body = $mensagem_de_resposta;
						$mailer->AddReplyTo($email_que_recebe_formulario,$email_que_recebe_formulario);
						$mailer->XMailer = "WebSite";

						if(!$mailer->Send())
						{
							$_SESSION['CONTATO_AVISO'] = "Obrigado";
							$_SESSION['CONTATO_MENSAGEM'] = "Recebemos a sua mensagem por?n?foi possivel identificar o seu email. Para que possamos entrar em contato verifique o seu e-mail e envie a mensagem novamente.";
							echo "<script>window.location='$exibir_apos_enviar'</script>";
						} else {
							$_SESSION['CONTATO_AVISO'] = "Obrigado";
							$_SESSION['CONTATO_MENSAGEM'] = "Informa?s enviadas com sucesso!";
							echo "<script>window.location='$exibir_apos_enviar'</script>";
						}
					} else {
						$_SESSION['CONTATO_AVISO'] = "Obrigado";
						$_SESSION['CONTATO_MENSAGEM'] = "Informa?s enviadas com sucesso!";
						echo "<script>window.location='$exibir_apos_enviar'</script>";
					}
			}

		
	// Final Action		
	} 	
	

}

?>