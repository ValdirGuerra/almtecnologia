<?
/*
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


class Produto {

	public $categoria;
	public $identificacao;
	public $descricao;

	// ESPECIFICAÇÕES
	public $especificacao;
	public $marca;
	public $modelo;
	public $serie;
	public $anoFabricacao;
	public $capacidade;
	public $consumo;
	public $cor;
	public $peso;
	public $partnumber;
	public $largura;
	public $altura;
	public $comprimento;
	public $obsTecnica;
	public $estado;
	public $youtubeCode;
	public $videoTitulo;
	
	
	// Internals
	public $catalogoURL;
	public $catalogoPath;
	public $id;
	
	
	
	public function exibirProduto($id,$action,$catalogoURL, $catalogoPath,$linkNumber) {
		if ($id > 0) {
			if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias($linkNumber)))  )  {
				
				$this->catalogoURL = $catalogoURL;
				$this->catalogoPath = $catalogoPath;
				$this->id = $id;
				
				$this->_exibirProduto($id);	
			}
		}
	}
	
	private function _exibirProduto($id) {
		require_once(PATH_CLASSES."/ThumbNails.php");
		require_once(PATH_CLASSES."/ContatoForm.php");		
		
	
		?>
		
			<!-- CATEGORIA -->	
			<div id="categoriaProdutos">
						<div class="titulo"><?=$this->categoria?></div>
						<div class="line"></div>
			</div>

			<!-- BOTOES DS GUIAS -->
			<div id="topMenu">
				<ul>
					<li id="1" name="visaogeral" onclick="escolherGuia(this)" class="current">
						<a href="#">Visão Geral</a>
					</li>
					
					<li id="2" name="especificacao" onclick="escolherGuia(this)">
						<a href="#">Especificações</a>
					</li>
					
					<?if (strlen($this->youtubeCode)>0){ ?>
					<li id="3" name="videos" onclick="escolherGuia(this)">
						<a href="#">Videos</a>
					</li>
					<?}?>
					
					<li id="4" name="comocomprar"  onclick="escolherGuia(this)">
						<a href="#">Como Comprar</a>
					</li>
				</ul>
			</div>
			
				<!-- GUIA VISÃO GERAL -->
			<div id="produto" class="visaogeral">
					<? ThumbNails::getThumb4Product($this->catalogoURL, $this->catalogoPath, $this->id) ?>
					
					<div class="descricao">
							<p><?=$this->descricao?></p>
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
			</div> <!-- EOF PRODUTO -->
			
				
	
	<!--
	// ESPECIFICAÇÕES
	$produto->marca 	 	= "XYZ";
	$produto->modelo 	 	= "HQRS";
	$produto->serie 	 	= "Serie";
	$produto->anoFabricacao = "2015";
	$produto->capacidade 	= "999/MPBS";
	$produto->consumo 	 	= "20W";
	$produto->cor 	 		= "Preto";
	$produto->peso 	 		= "20T";
	$produto->largura 	 	= "323mm";
	$produto->altura 	 	= "245mm";
	$produto->comprimento	= "233mm";
	$produto->partnumber 	= "XASSS12S2LK1";
	$produto->estado 		= "Novo";
	$produto->obsTecnica 	= "";
	-->
			<!-- GUIA ESPECIFICAÇÕES -->
			<div id="produto" class="especificacao" style="display:none">
					<div class="subtitulo1">Especificações</div>
					<div class="descricao">
							<p><?=$this->especificacao?></p>
							<ul>
								<li>EQUIPAMENTO
									<ul>
										<?if (strlen($this->marca)>0){ ?><li><span class="labelEspecificacao">Marca:</span><span class="dadoEspecificacao"><?=$this->marca?></span></li><?}?>
										
										<?if (strlen($this->modelo)>0){ ?><li><span class="labelEspecificacao">Modelo:</span><span class="dadoEspecificacao"><?=$this->modelo?></span></li><?}?>
										<?if (strlen($this->serie)>0){ ?><li><span class="labelEspecificacao">Serie:</span><span class="dadoEspecificacao"><?=$this->serie?></span></li><?}?>
										<?if (strlen($this->anoFabricacao)>0){ ?><li><span class="labelEspecificacao">Fabricação:</span><span class="dadoEspecificacao"><?=$this->anoFabricacao?></span></li><?}?>
										<?if (strlen($this->cor)>0){ ?><li><span class="labelEspecificacao">Cor:</span><span class="dadoEspecificacao"><?=$this->cor?></span></li><?}?>
										<?if (strlen($this->partnumber)>0){ ?><li><span class="labelEspecificacao">Part Number:</span><span class="dadoEspecificacao"><?=$this->partnumber?></span></li><?}?>
										<?if (strlen($this->capacidade)>0){ ?><li><span class="labelEspecificacao">Capacidade:</span><span class="dadoEspecificacao"><?=$this->capacidade?></span></li><?}?>
										<?if (strlen($this->consumo)>0){ ?><li><span class="labelEspecificacao">Consumo:</span><span class="dadoEspecificacao"><?=$this->consumo?></span></li><?}?>
										<?if (strlen($this->estado)>0){ ?><li><span class="labelEspecificacao">Estado:</span><span class="dadoEspecificacao"><?=$this->estado?></span></li><?}?>
									</ul>
								</li>
								<li>DIMENSÕES E PESO
									<ul>
										<?if (strlen($this->peso)>0){ ?><li><span class="labelEspecificacao">Peso:</span><span class="dadoEspecificacao"><?=$this->peso?></span></li><?}?>
										<?if (strlen($this->largura)>0){ ?><li><span class="labelEspecificacao">Largura:</span><span class="dadoEspecificacao"><?=$this->largura?></span></li><?}?>
										<?if (strlen($this->altura)>0){ ?><li><span class="labelEspecificacao">Altura:</span><span class="dadoEspecificacao"><?=$this->altura?></span></li><?}?>
										<?if (strlen($this->comprimento)>0){ ?><li><span class="labelEspecificacao">Comprimento:</span><span class="dadoEspecificacao"><?=$this->comprimento?></span></li><?}?>
									</ul>
								</li>
								<li>OBS TÉCNICA
									<ul>
										<?if (strlen($this->obsTecnica)>0){ ?><li><span class="dadoEspecificacao"><?=$this->obsTecnica?></span></li><?}?>
									</ul>
								</li>
							</ul>
							<p>&nbsp;</p>
					</div>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
			</div> <!-- EOF ESPECIFICAÇOES -->
	
			<!-- GUIA VIDEOS -->
			<?if (strlen($this->youtubeCode)>0){ ?>
			<div id="produto" class="videos" style="display:none">
					<div class="subtitulo1">Videos</div>
					<div class="descricao">
							<p><?=$this->videoTitulo?></p>
							<iframe width="640" height="360" src="//www.youtube.com/embed/<?=$this->youtubeCode?>" frameborder="0" allowfullscreen></iframe>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
					</div>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
			</div> <!-- EOF ESPECIFICAÇOES -->
			<?}?>
	
	
			<!-- GUIA COMO COMPRAR -->
			<div id="produto" class="comocomprar" style="display:none">
					<div class="subtitulo1">Como comprar</div>
					<div class="descricao">
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							
							<?=ContatoForm::getModelo01($this->identificacao)?>
							
					</div>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
			</div> <!-- EOF COMO COMPRAR -->

		
		<?
	
	
	
	
	}
	
	
	
}
?>