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
	require_once(PATH_CLASSES."/Produto.php");

	$catalogoPath = PATH_CATALOGO . "/esd/" ;
	$catalogoURL =  PATH_CATALOGO_URL . "/esd/" ;
	
	$extensaoProduto = "produto";
	
	
	if (isset($_REQUEST['id'])) {
		$id = $_REQUEST['id'];
		$file = PATH_CATALOGO . "/esd/$id".".". $extensaoProduto;
		if (!file_exists($file)) {
			$id = -1;
		}  
		
	} else {
			$id = 0;
	}
	
?>
<!-- SMT -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(34)))  )  {
	
	// Exibir a Categoria //
	if ($id == 0) {
?>

	<div id="categoriaProdutos">
		
		
		<?
			
			$produtos = scandir($catalogoPath);	
			//$produtos = asort($produtos);
			
			$categoriaDefined = "";
	
			foreach ($produtos as $key => $value) 
			{
				if (!in_array($value,array(".",".."))) 
				{
					$fullName = $value;
					$ext =  pathinfo($fullName, PATHINFO_EXTENSION);
					$base = basename($fullName,".".$ext);
					
					
					if ($ext == $extensaoProduto) {
							$produto = new Produto();
							$id = 0;
							$file      = $base.'_a_400x300.png';
							$fileUrl   = $catalogoURL . $file;
							$fileLocal = $catalogoPath . $file;
							$random    = "R01";
							require_once($catalogoPath . $fullName);
							
							if (! file_exists($fileLocal)) { 
								$file      = "nopicture.png";
								$fileUrl   = "./images/nopicture.png";
								$fileLocal = PATH_IMAGES . "/" . $file;
							}
				
							
							if (($categoriaDefined == "") || ($categoriaDefined != $produto->categoria ) ) {
								$categoriaDefined = $produto->categoria;
								?>
									<div class="titulo"><?=$produto->categoria?></div>
									<div class="line"></div>
								<?
							}
							
						?>
							
							
							<div class="box boxEffect2" onclick="go('<?=Link::getLink(34)."&id=".$base ?>')" >
									<div class="inner">
										<img class="categoriaThumb" src="<?=$fileUrl .'?r='.$random?>" alt="<?=$produto->identificacao?>">
										<div class="faixa"><span class="subFaixa"><?=$produto->identificacao?></span></div>
									</div>
							</div>
						<?
					}
				}
			}
			
		
		?>
		
	</div>

<?
     } else { // Exibir o produto
		$file = PATH_CATALOGO . "/esd/$id"."." . $extensaoProduto;
		if (file_exists($file)) {
			$produto = new Produto();
			require_once($file);
			$produto->exibirProduto($id,$action,$catalogoURL, $catalogoPath,34);	
			
		} else {
		?>
		
			<div id="categoriaProdutos">
					<div class="titulo">Produto Não Encontrado</div>
					<div class="line"></div>
			</div>
		
		<?
		
		}
     }
   } 
?>
<!-- END OF categoriaProdutos -->
