<?
/**
*  Intelligy Networks - Todos os Direitos Reservados
*  Autor:  Valdir C. Guerra
*  Data de Criação: 28/01/2015
*
*  Versao: 1.0
*
*  É proibido sob pena de Lei a utilização ou reprodução de parte ou de todo conteudo desse codigo sem a previa autorização da Intelligy Networks
*  Esse Site é concedido com licença de uso autorizada somente durante o periodo em que o cliente estiver com um contrato de hospedagem vigente
*  com a Intelligy Networks, Não podendo ser replicado, copiado, emprestado ou concedido. 
*/	
require_once("config.php");
	Session::start();
?>
<!-- Obrigado -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(61)))  )  {
?>

<div id="contato">
		<div class="titulo"><?=$_SESSION['CONTATO_AVISO']?></div>
			<div class="line"></div>
		
			
			<div class="textoCentralizado">
				<p><?=$_SESSION['CONTATO_MENSAGEM']?></p>
			</div>
			
			
			<p>&nbsp;</p>
			
			

	</div>

<?
   } 
?>
<!-- END OF Obrigado -->
