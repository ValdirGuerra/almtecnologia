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
?>
<!-- treinamento -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(43)))  )  {
?>

<div id="treinamento">
		<div class="titulo">Treinamentos de Processo</div>
			<div class="line"></div>
		
			<div class="thumbBox">
				<div class="box boxEffect2">
					<div class="inner">
						<img id="imgThumbPrincipal" src="./images/treinamento400x300_a.png">
					</div>
				</div>
				<ul class="produtoThumb">
					<li id="treinamento400x300_a.png"><img height="50" src="./images/treinamento400x300_a.png"></li>
				</ul>
			</div>
			
			<div class="subtitulo1">Treinamentos de Processo SMD/PTH.</div>
			<div class="descricao">
					<p>Ministramos treinamentos de processo de montagem SMD/PTH baseados nas normas IPC. Avaliamos o seu processo e adequamos os treinamentos conforme sua realidade.</p>
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
<!-- END OF treinamento -->
