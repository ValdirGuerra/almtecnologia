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
<!-- manutencao -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(41)))  )  {
?>

<div id="manutencao">
		<div class="titulo">Servi�os de Manuten��o</div>
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
			
			<div class="subtitulo1">Servi�os de Manuten��o</div>
			<div class="descricao">
					<p>Executamos servi�os de manuten��o preventiva, corretiva e preditiva de equipamentos para montagem SMT e Semicondutores . Somos especializados na manuten��o de v�rios fabricantes. Fazemos contratos de manuten��o personalizados, de acordo com sua necessidade. <a href="./contato">Consulte-nos</a> e veja como podemos atend�-lo.</p>
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
