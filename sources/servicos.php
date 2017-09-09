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
<!-- servicos -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(40)))  )  {
?>

<div id="servicos">
		<div class="titulo">Servi�os</div>
		<div class="line"></div>
		
		
		<div class="box boxEffect2" onclick="go('<?=Link::getLink(41)?>')" >
				<div class="inner">
					<img src="./images/menu41_200x150.png">
					<div class="faixa"><?=Link::getLinkName(41)?></div>
				</div>
		</div>
		
		<div class="box boxEffect2" onclick="go('<?=Link::getLink(42)?>')" >
				<div class="inner">
					<img src="./images/menu42_200x150.png">
					<div class="faixa"><?=Link::getLinkName(42)?></div>
				</div>
		</div>
		
		<div class="box boxEffect2" onclick="go('<?=Link::getLink(43)?>')" >
				<div class="inner">
					<img src="./images/menu43_200x150.png">
					<div class="faixa"><?=Link::getLinkName(43)?></div>
				</div>
		</div>
		
		
	</div>

<?
   } 
?>
<!-- END OF servicos -->
