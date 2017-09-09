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
<!-- SOBRE NOS -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(20)))  )  {
?>

	<div id="sobreNos">
		<div class="empresa">
		
			
			
			<div class="titulo">Sobre Nós</div>
			<div class="line"></div>
		
			<div class="box boxEffect2">
				<div class="inner">
					<img src="./images/sobreA400x300.png">
				</div>
			</div>
			
			<div class="subtitulo1">Nossa História.</div>
			<div class="descricao">
					<p>A ALM - Tecnologia é uma empresa especializada na comercialização de equipamentos para montagem de placas de circuito impresso com tecnologia SMD e também máquinas para montagem de Semicondutores , além de executarmos serviços de manutenção e treinamento de processo.</p>
					<p>Valorize o seu investimento, temos a melhor solução para a sua empresa. Por esta razão, nossa carteira de clientes contempla as maiores corporações do Brasil e a sua escolha por nossos produtos e serviços constitui nosso maior orgulho.</p>
					<p></p>
			
			
			
			
			</div>
			
			
			<div class="titulo">Nossa Missão</div>
			<div class="line"></div>
			
			<div class="textoCentralizado">
				<p>Atender os clientes brasileiros e sul-americanos com equipamentos de elevado padrão de desempenho, mantendo a melhor relação custo x benefício do mercado..</p>
			</div>
			
			
			<div class="titulo">Nossa Visão</div>
			<div class="line"></div>
			
			<div class="textoCentralizado">
				<p>Estar entre as melhores empresas de fornecimento de equipamentos e serviços para o setor eletroeletrônico.</p>
			</div>
			
			<div class="titulo">Nossos Valores</div>
			<div class="line"></div>
			
			<div class="textoCentralizado">
					<p>Competência pela busca permanente do conhecimento e da atualização.</p>
					<p>Excelência no atendimento aos clientes.</p>
					<p>Ética nas relações</p>
			</div>
			
			
			
			
	
		</div>
	</div>

<?
   } 
?>
<!-- END OF SOBRE NOS -->
