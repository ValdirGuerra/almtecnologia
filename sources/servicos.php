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
<!-- servicos -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(40)))  )  {
?>

<div id="servicos">
		<div class="titulo">Serviços</div>
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
