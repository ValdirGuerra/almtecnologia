<?
/**
*  Intelligy Networks - Todos os Direitos Reservados
*  Autor:  Valdir C. Guerra
*  Data de Criaзгo: 28/01/2015
*
*  Versao: 1.0
*
*  Й proibido sob pena de Lei a utilizaзгo ou reproduзгo de parte ou de todo conteudo desse codigo sem a previa autorizaзгo da Intelligy Networks
*  Esse Site й concedido com licenзa de uso autorizada somente durante o periodo em que o cliente estiver com um contrato de hospedagem vigente
*  com a Intelligy Networks, Nгo podendo ser replicado, copiado, emprestado ou concedido. 
*/	
require_once('PHPMailerAutoload.php');

//require_once('class.phpmailer.php');

$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 2;
$mailer->Priority = 3;
//$mailer->Mail->CharSet = 'iso-8859-1';
$mailer->Port = 587; //Indica a porta de conexгo para a saнda de e-mails
$mailer->Host = 'mail.almtecnologia.com.br';
$mailer->SMTPAuth = true; //define se haverб ou nгo autenticaзгo no SMTP
$mailer->Username = 'website@almtecnologia.com.br'; //Informe o e-mai o completo
$mailer->Password = 'Wete@0203'; //Senha da caixa postal
$mailer->FromName = 'Website almtecnologia.com.br'; //Nome que serб exibido para o destinatбrio
$mailer->From = 'website@almtecnologia.com.br'; //Obrigatуrio ser a mesma caixa postal indicada em "username"
$mailer->AddAddress('valdir.guerra@gmail.com','valdir'); //Destinatбrios
$mailer->Subject = 'Teste enviado SMTP 29/05/2014';
$mailer->Body = 'Este de smtp teste  SMTP 29/05/2014';
$mailer->XMailer = "WebSite";
if(!$mailer->Send())
{
	echo "Message was not sent";
	echo "Mailer Error: " . $mailer->ErrorInfo; exit; 
} else {
	print "E-mail enviado!";
}

?>