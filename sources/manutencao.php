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
<!-- manutencao -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(41)))  )  {
?>

<div id="manutencao">
		<div class="titulo">Serviços de Manutenção</div>
			<div class="line"></div>
		
			<div class="thumbBox">
				<div class="box boxEffect2">
					<div class="inner">
						<img id="imgThumbPrincipal" src="./images/manutencao400x300_a.png">
					</div>
				</div>
				<ul class="produtoThumb">
					<li id="manutencao400x300_a.png"><img height="50" src="./images/manutencao400x300_a.png"></li>
				</ul>
			</div>
			
			<div class="subtitulo1">Serviços de Manutenção</div>
			<div class="descricao">
					<p>Executamos serviços de manutenção preventiva, corretiva e preditiva de equipamentos para montagem SMT e Semicondutores . Somos especializados na manutenção de vários fabricantes. Fazemos contratos de manutenção personalizados, de acordo com sua necessidade. <a href="./contato">Consulte-nos</a> e veja como podemos atendê-lo.</p>
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
<!-- END OF manutencao -->
