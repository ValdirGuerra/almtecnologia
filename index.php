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
header("Content-Type: text/html; charset=ISO-8859-1",true);
header("Cache-Control: no-cache, must-revalidate",true); // HTTP/1.1
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT",true); // Date in the past
if (isset($_REQUEST['action'])) {
	$action = $_REQUEST['action'];
} else {
	$action = "";
}
?>
<!DOCTYPE html>
<html>
	<head>

		<title><?=Link::getTitle($action)?></title>
		<link rel="shortcut icon" href="./favicon.ico" />
	
		<META NAME="DESCRIPTION" CONTENT="ALM Tecnologia | Equipamentos Eletronicos de Alta Qualidade SMT, Semicondutores, Nozzles, Feeders, Material ESD, Spare Parts, Serviços de Alteração de Layout, Manutenção e Treinamento">
		<META NAME="KEYWORDS" CONTENT="SMT, Semicondutores, Nozzles, Feeders, Material ESD, Spare Parts, Serviços de Alteração de Layout, Manutenção e Treinamento">
		<META NAME="LANGUAGE" CONTENT="pt-br">
	
		<link rel="stylesheet" type="text/css" href="./css/almtech.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="./css/<?=Link::getCSS($action)?>" media="all"/>
		<link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
		
	
		<script src="./scripts/jquery-1.11.2.min.js"></script>
		<script src="./scripts/almtech.js"></script>
		<?
			$a = Link::getJS($action);
			foreach($a as $v){
				if (strlen($v) >= 2) 
				echo '<script src="./scripts/'.$v.'"></script>';
			}
		?>
		
		
	</head>	
	<body>

	<div id="topLine"></div>
	
	<div id="header-bars">
		<a href='.'>CONTATO <?=Empresa::$empresaFoneBR?></a> 
	</div>
	
	<div id="header-logo">
		<div class="logo"><img id="logoImage" src=""></div>
		
	</div>
	
	<div id="header-menu" >
		<div class="menu-bar">
			<ul>
				<li><a href="./">HOME</a></li>
				<li><a href="<?=Link::getLink(20)?>"><?=Link::getLinkNameToUPPER(20)?></a></li>
				<li><a href="<?=Link::getLink(30)?>"><?=Link::getLinkNameToUPPER(30)?></a>
					<ul class="menuWithImage" >
						<li><a id="menu31" name="ma_image" href="<?=Link::getLink(31)?>"><?=Link::getLinkNameToUPPER(31)?></a></li>
						<li><a id="menu32" name="ma_image" href="<?=Link::getLink(32)?>"><?=Link::getLinkNameToUPPER(32)?></a></li>
						<li><a id="menu33" name="ma_image" href="<?=Link::getLink(33)?>"><?=Link::getLinkNameToUPPER(33)?></a></li>
						<li><a id="menu34" name="ma_image" href="<?=Link::getLink(34)?>"><?=Link::getLinkNameToUPPER(34)?></a></li>
						<li><a id="menu35" name="ma_image" href="<?=Link::getLink(35)?>"><?=Link::getLinkNameToUPPER(35)?></a></li>
					</ul>
				</li>
				<li><a href="<?=Link::getLink(40)?>"><?=Link::getLinkNameToUPPER(40)?></a>
					<ul class="menuWithImage">
						<li><a id="menu41" name="mb_image" href="<?=Link::getLink(41)?>"><?=Link::getLinkNameToUPPER(41)?></a></li>
						<li><a id="menu42" name="mb_image" href="<?=Link::getLink(42)?>"><?=Link::getLinkNameToUPPER(42)?></a></li>
						<li><a id="menu43" name="mb_image" href="<?=Link::getLink(43)?>"><?=Link::getLinkNameToUPPER(43)?></a></li>
					</ul>
				</li>
				
				<li><a href="<?=Link::getLink(50)?>">PARCEIROS</a></li>
				<li><a href="<?=Link::getLink(60)?>">CONTATO</a></li>
			</ul>
		</div>
	</div>
	<div id="header-menu-mobile" style="display:none" >
			<select id="menuMobile" onchange="onChangeMenuMobile()" >
				<option value="./">HOME</option>
				<option <?=(Link::getID($action) == 20?"selected":"")?> value="<?=Link::getLink(20)?>"><?=Link::getLinkNameToUPPER(20)?></option>
				<option <?=( ( (Link::getID($action) >= 30) && (Link::getID($action) <= 39)  )      ?"selected":"")?> value="<?=Link::getLink(30)?>"><?=Link::getLinkNameToUPPER(30)?></option>
				<option <?=( ( (Link::getID($action) >= 40) && (Link::getID($action) <= 49)  )		?"selected":"")?> value="<?=Link::getLink(40)?>"><?=Link::getLinkNameToUPPER(40)?></option>
				<option <?=(Link::getID($action) == 50?"selected":"")?> value="<?=Link::getLink(50)?>"><?=Link::getLinkNameToUPPER(50)?></option>
				<option <?=(Link::getID($action) == 60?"selected":"")?> value="<?=Link::getLink(60)?>"><?=Link::getLinkNameToUPPER(60)?></option>
			</select>
	</div>
	
	<?
		$p = Link::getPage($action);
		require_once( $p );
	?>

	<img id="goUp" src="./images/goUp30x30.png" onclick="window.scrollTo(0,0)"  />
	
	<!-- FOOTER -->
	
	<div id="footer-end">
		<div id="footer-end-menu" itemscope itemtype="http://schema.org/Organization">
			<ul>
				<li class="informacoes"><span itemprop="name"><?=Empresa::$empresaNome?></span>
					<ul>
						<li>Horário de Atendimento</li>
						<li><?=Empresa::$horarioAtendimento?></li>
					</ul>
				</li>
				
				
				
				<li class="contato">Contato
					<ul>
						<li><span itemprop="telephone">Fone <?=Empresa::$empresaFoneBR?></span></li>
						<li><span itemprop="email"><?=Empresa::$emailComercial?></span></li>
					</ul>
				</li>
				
				
				
			
				
				
				<li class="endereco">Endereço
					<ul>
						<li><span itemprop="streetAddress"><?=Empresa::$empresaEndereco?></span></li>
						<li><span itemprop="addressLocality"><?=Empresa::$empresaBairro?> - <?=Empresa::$empresaCidade?> - <?=Empresa::$empresaUF?></span></li>
					</ul>
				</li>
				
				<li class="links">Links
					<ul>
						<? require_once(PATH_LINK."\links.php")?>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	<div id="footer-tools">
	<div>
	<div id="poweredBy"><a href="http://www.intelligy.com.br/">DESIGNED BY INTELLIGY NETWORKS</a></div>
	</body>
</html>	
<!-- END OF PAGE -->
				
	

