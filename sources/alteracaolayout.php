<?
/**
*  Intelligy Networks - Todos os Direitos Reservados
*  Autor:  Valdir C. Guerra
*  Data de Cria��o: 28/01/2015
*
*  Versao: 1.0
*
*  � proibido sob pena de Lei a utiliza��o ou reprodu��o de parte ou de todo conteudo desse codigo sem a previa autoriza��o da Intelligy Networks
*  Esse Site � concedido com licen�a de uso autorizada somente durante o periodo em que o cliente estiver com um contrato de hospedagem vigente
*  com a Intelligy Networks, N�o podendo ser replicado, copiado, emprestado ou concedido. 
*/	
require_once("config.php");
?>
<!-- alteracaolayout -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(42)))  )  {
?>

<div id="alteracaolayout">
		<div class="titulo">Altera��o de Layout</div>
			<div class="line"></div>
		
			<div class="thumbBox">
				<div class="box boxEffect2">
					<div class="inner">
						<img id="imgThumbPrincipal" src="./images/alteracaolayout400x300_a.png">
					</div>
				</div>
				<ul class="produtoThumb">
					<li id="alteracaolayout400x300_a.png"><img height="50" src="./images/alteracaolayout400x300_a.png"></li>
					<li id="alteracaolayout400x300_b.png"><img height="50" src="./images/alteracaolayout400x300_b.png"></li>
				</ul>
			</div>
			
			<div class="subtitulo1">Servi�os de Altera��o de Layout.</div>
			<div class="descricao">
					<p>Auxiliamos na altera��o do layout de sua f�brica, reposicionando os equipamentos, alinhando, nivelando e efetuando as calibra��es necess�rias.</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
			</div>
			
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			

	</div>

<?
   } 
?>
<!-- END OF alteracaolayout -->
