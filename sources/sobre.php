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
<!-- SOBRE NOS -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(20)))  )  {
?>

	<div id="sobreNos">
		<div class="empresa">
		
			
			
			<div class="titulo">Sobre N�s</div>
			<div class="line"></div>
		
			<div class="box boxEffect2">
				<div class="inner">
					<img src="./images/sobreA400x300.png">
				</div>
			</div>
			
			<div class="subtitulo1">Nossa Hist�ria.</div>
			<div class="descricao">
					<p>A ALM - Tecnologia � uma empresa especializada na comercializa��o de equipamentos para montagem de placas de circuito impresso com tecnologia SMD e tamb�m m�quinas para montagem de Semicondutores , al�m de executarmos servi�os de manuten��o e treinamento de processo.</p>
					<p>Valorize o seu investimento, temos a melhor solu��o para a sua empresa. Por esta raz�o, nossa carteira de clientes contempla as maiores corpora��es do Brasil e a sua escolha por nossos produtos e servi�os constitui nosso maior orgulho.</p>
					<p></p>
			
			
			
			
			</div>
			
			
			<div class="titulo">Nossa Miss�o</div>
			<div class="line"></div>
			
			<div class="textoCentralizado">
				<p>Atender os clientes brasileiros e sul-americanos com equipamentos de elevado padr�o de desempenho, mantendo a melhor rela��o custo x benef�cio do mercado..</p>
			</div>
			
			
			<div class="titulo">Nossa Vis�o</div>
			<div class="line"></div>
			
			<div class="textoCentralizado">
				<p>Estar entre as melhores empresas de fornecimento de equipamentos e servi�os para o setor eletroeletr�nico.</p>
			</div>
			
			<div class="titulo">Nossos Valores</div>
			<div class="line"></div>
			
			<div class="textoCentralizado">
					<p>Compet�ncia pela busca permanente do conhecimento e da atualiza��o.</p>
					<p>Excel�ncia no atendimento aos clientes.</p>
					<p>�tica nas rela��es</p>
			</div>
			
			
			
			
	
		</div>
	</div>

<?
   } 
?>
<!-- END OF SOBRE NOS -->
