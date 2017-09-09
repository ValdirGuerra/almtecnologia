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
<!-- HOME -->	
<?
	//if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(1)))  )  {
?>

	<div id="slideshow">
		<div>
		 <img src="./images/b1_950x382.png">
	   </div>
	   <div>
		 <img src="./images/b2_950x382.png">
	   </div>
	</div>
	
	<div id="produto-header">PRODUTOS</div>
	<div id="produto-subheader"><p>Produtos Eletro-Eletr�nicos de alta qualidade</p></div>
	
	<div id="produtos">
		<div class="produto" onclick="go('<?=Link::getLink(31)?>')">
				<img src="./images/menu31_200x150.png" alt="<?=Link::getLinkName(31)?>">
				<div class="titulo"><?=Link::getLinkName(31)?></div>
				<div class="descricao"></div>
		</div>
		
		<div class="produto" onclick="go('<?=Link::getLink(32)?>')">
			<img src="./images/menu32_200x150.png" alt="<?=Link::getLinkName(32)?>">
			<div class="titulo"><?=Link::getLinkName(32)?></div>
			<div class="descricao"></div>
		</div>
		
		<div class="produto" onclick="go('<?=Link::getLink(33)?>')">
			<img src="./images/menu33_200x150.png" alt="<?=Link::getLinkName(33)?>">
			<div class="titulo"><?=Link::getLinkName(33)?></div>
			<div class="descricao"></div>
		</div>
		
		<div class="produto" onclick="go('<?=Link::getLink(34)?>')">
			<img src="./images/menu34_200x150.png" alt="<?=Link::getLinkName(34)?>" >
			<div class="titulo"><?=Link::getLinkName(34)?></div>
			<div class="descricao"></div>
		</div>
		<div class="produto" onclick="go('<?=Link::getLink(35)?>')">
			<img src="./images/menu35_200x150.png" alt="<?=Link::getLinkName(35)?>" >
			<div class="titulo"><?=Link::getLinkName(35)?></div>
			<div class="descricao"></div>
		</div>
	</div>
	
	<div id="produto-header">SERVI�OS</div>
	<div id="produto-subheader"><p>Para melhorar o desempenho de seus equipamentos</p></div>
	
	<div id="produtos">
		<div class="produto" onclick="go('<?=Link::getLink(41)?>')">
				<img src="./images/menu41_200x150.png" alt="<?=Link::getLinkName(41)?>">
				<div class="titulo"><?=Link::getLinkName(41)?></div>
				<div class="descricao"></div>
		</div>
		
		<div class="produto" onclick="go('<?=Link::getLink(42)?>')">
			<img src="./images/menu42_200x150.png" alt="<?=Link::getLinkName(42)?>">
			<div class="titulo"><?=Link::getLinkName(42)?></div>
			<div class="descricao"></div>
		</div>
		
		<div class="produto" onclick="go('<?=Link::getLink(43)?>')">
			<img src="./images/menu43_200x150.png" alt="<?=Link::getLinkName(43)?>">
			<div class="titulo"><?=Link::getLinkName(43)?></div>
			<div class="descricao"></div>
		</div>
		
	</div>
	
	
	
	
	
	
	
	
	<div id="empresa">
		<div class="blocoEmpresa" onclick="go('<?=Link::getLink(20)?>')">
			<img src="./images/empresa_180.png">
			<div class="titulo">SOBRE N�S</div>
			<div class="descricao">
			
			<p>A ALM - Tecnologia � uma empresa especializada na comercializa��o de equipamentos para montagem de placas de circuito impresso com tecnologia SMD e tamb�m m�quinas para montagem de Semicondutores , al�m de executarmos servi�os de manuten��o e treinamento de processo.</p>
			<p>Valorize o seu investimento, temos a melhor solu��o para a sua empresa. Por esta raz�o, nossa carteira de clientes contempla as maiores corpora��es do Brasil e a sua escolha por nossos produtos e servi�os constitui nosso maior orgulho.</p>
			</div>
		</div>
	</div>

<?
 //  } 
?>
<!-- END OF HOME -->
