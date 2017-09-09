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
<!-- PRODUTOS -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(30)))  )  {
?>

	<div id="produtos">
		<div class="titulo">Produtos</div>
		<div class="line"></div>
		
		
		
		<div class="box boxEffect2" onclick="go('<?=Link::getLink(31)?>')" itemtype="http://data-vocabulary.org/Product" >
				<div class="inner">
					<img src="./images/menu31_200x150.png">
					<div class="faixa" itemprop="category" ><?=Link::getLinkName(31)?></div>
				</div>
		</div>
		
		<div class="box boxEffect2" onclick="go('<?=Link::getLink(32)?>')" itemtype="http://data-vocabulary.org/Product" >
				<div class="inner">
					<img src="./images/menu32_200x150.png">
					<div class="faixa" itemprop="category"><?=Link::getLinkName(32)?></div>
				</div>
		</div>
		
		<div class="box boxEffect2" onclick="go('<?=Link::getLink(33)?>')" itemtype="http://data-vocabulary.org/Product" >
				<div class="inner">
					<img src="./images/menu33_200x150.png">
					<div class="faixa" itemprop="category"><?=Link::getLinkName(33)?></div>
				</div>
		</div>
		
		<div class="box boxEffect2" onclick="go('<?=Link::getLink(34)?>')" itemtype="http://data-vocabulary.org/Product" >
				<div class="inner">
					<img src="./images/menu34_200x150.png">
					<div class="faixa" itemprop="category"><?=Link::getLinkName(34)?></div>
				</div>
		</div>
		
		<div class="box boxEffect2" onclick="go('<?=Link::getLink(35)?>')" itemtype="http://data-vocabulary.org/Product" >
				<div class="inner">
					<img src="./images/menu35_200x150.png">
					<div class="faixa" itemprop="category"><?=Link::getLinkName(35)?></div>
				</div>
		</div>
		
				
		
		
	</div>

<?
   } 
?>
<!-- END OF PRODUTOS -->
