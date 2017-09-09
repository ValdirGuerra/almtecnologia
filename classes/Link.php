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

class Link {

	private static $sources = array();
	private static $UID = array();
	private static $pathSource = "/sources";
	private static $defaultID = 1;
	private static $linkBase = './';
	
	
	public static function init($newPathSources) {
	
		
	
		self::add(1,'home','Home','Bem Vindo a ALM Tecnologia','home.php','home.css',array('home.js'));
		self::add(20,'sobre','Sobre Nós','Sobre Nós - ALM Tecnologia','sobre.php','sobre.css',array('sobre.js'));
		self::add(30,'produtos','Produtos','Produtos - ALM Tecnologia','produtos.php','produtos.css',array('produtos.js'));
		
		self::add(31,'smt','Equipamentos SMT','Equipamentos SMT - ALM Tecnologia','smt.php','categoriaProdutos.css',array('categoriaProdutos.js','helperFormat.js','helperValidationEMAIL.js'));
		
		self::add(32,'semicondutores','Semicondutores','Equipamentos Semicondutores - ALM Tecnologia','semicondutores.php','categoriaProdutos.css',array('categoriaProdutos.js','helperFormat.js','helperValidationEMAIL.js'));
		self::add(33,'nozzlesfeeders','Nozzles e Feeders','Nozzles e Feeders - ALM Tecnologia','nozzlesfeeders.php','categoriaProdutos.css',array('categoriaProdutos.js','helperFormat.js','helperValidationEMAIL.js'));
		self::add(34,'esd','Material ESD','Material ESD - ALM Tecnologia','esd.php','categoriaProdutos.css',array('categoriaProdutos.js','helperFormat.js','helperValidationEMAIL.js'));
		
		self::add(35,'spareparts','Spare Parts','Spare Parts - ALM Tecnologia','spareparts.php','spareparts.css',array('spareparts.js','helperFormat.js','helperValidationEMAIL.js'));
		
		self::add(40,'servicos','Serviços','Serviços - ALM Tecnologia','servicos.php','servicos.css',array('servicos.js'));
		self::add(41,'manutencao','Manutenção','Manutenção - ALM Tecnologia','manutencao.php','manutencao.css',array('manutencao.js'));
		self::add(42,'alteracaolayout','Alteração de Layout','Alteração de Layout - ALM Tecnologia','alteracaolayout.php','alteracaolayout.css',array('alteracaolayout.js'));
		self::add(43,'treinamentos','Treinamento','Treinamentos - ALM Tecnologia','treinamento.php','treinamento.css',array('treinamento.js'));
	
		self::add(50,'parceiros','Parceiros','Parceiros - ALM Tecnologia','parceiros.php','parceiros.css',array('parceiros.js'));
		self::add(60,'contato','Contato','Contato - ALM Tecnologia','contato.php','contato.css',array('contato.js','helperFormat.js','helperValidationEMAIL.js'));
		self::add(61,'obrigado','obrigado','Obrigado - ALM Tecnologia','obrigado.php','contato.css',array('contato.js','helperFormat.js','helperValidationEMAIL.js'));
		//self::add(70,'infra','Infra','Infra Estrutura - ALM Tecnologia','infra.php','infra.css',array('infra.js'));
		
	
		self::$pathSource = $newPathSources . '/';
	}
	
	public static function add($id,$alias,$linkName,$titleOfPage,$page,$css,$js) {
			self::$sources[$id] = array('alias'=>$alias,'linkName'=>$linkName,'title'=>$titleOfPage,'page'=>$page,'css'=>$css,'js'=>$js);
			self::$UID[$alias] = $id;
	}
	
	public static function getLink($id, $onErroGoToDefault = true) {
		$link = self::$linkBase . self::getDataByID($id,'alias',$onErroGoToDefault);
		return $link;
	}
	
	public static function getLinkName($id, $onErroGoToDefault = true) {
		$linkName =  self::getDataByID($id,'linkName',$onErroGoToDefault);
		return $linkName;
	}
	
	public static function getLinkNameToUPPER($id, $onErroGoToDefault = true) {
		$linkName =  self::getDataByID($id,'linkName',$onErroGoToDefault);
		$linkName = mb_strtoupper(strtoupper($linkName));
		return $linkName;
	}
	
	
	
	
	public static function getAlias($id, $onErroGoToDefault = false) {
		return self::getDataByID($id,'alias',$onErroGoToDefault);
	}
	
	public static function getTitle($alias, $onErroGoToDefault = true) {
		return self::getDataByAlias($alias,'title',$onErroGoToDefault);
	}
	
	public static function getID($alias, $onErroGoToDefault = true) {
		if (isset(self::$UID[$alias]))  {
			$id = self::$UID[$alias]; 
			} else {
			$id = ""; 
		}
		return $id;
	}
	
	public static function getPage($alias, $onErroGoToDefault = true) {
		$page = self::$pathSource .	self::getDataByAlias($alias,'page',$onErroGoToDefault);
		return $page;
	}
	
	public static function getCSS($alias, $onErroGoToDefault = true) {
		$css = self::getDataByAlias($alias,'css',$onErroGoToDefault);
		return $css;
	}
	
	public static function getJS($alias, $onErroGoToDefault = true) {
		$css = self::getDataByAlias($alias,'js',$onErroGoToDefault);
		return $css;
	}
	
	private static function getDataByAlias($alias, $no, $onErroGoToDefault = true) {
		if (isset(self::$UID[$alias]))  {
			$id = self::$UID[$alias]; 
		} else {
			$id = ""; 
		}
		return self::getDataByID($id,$no,$onErroGoToDefault);
	}	
	
	private static function getDataByID($id, $no, $onErroGoToDefault = true) {
		$data = "";
		if  (strlen($id) == 0) { //  Retorna Default caso estaja em branco
			$data = self::$sources[self::$defaultID][$no];
		} else if ($id <> '')  {  
				if (isset(self::$sources[$id]) ) {  //  Retorna o valor caso encontre o valor na variavel
					$data =  self::$sources[$id][$no];
				} else if ($onErroGoToDefault == true) {
						$data = self::$sources[self::$defaultID][$no];   // Retorna Default caso nao seja encontrado
				} else {
				   $data = "";
				}
		}
		
		return $data;		
	}
	
	
	
	
}

?>
