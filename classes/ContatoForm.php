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

class ContatoForm {

	public static function getModelo01($nomeProduto) {
			?>
			<form id="form" name="form" action="controller.php" onsubmit="return validarFormularioContato();" method="post" accept-charset="UTF-8">
						<input type="hidden" name="service" value="contatoService"/>
						<input type="hidden" name="action" value="enviarEmail"/>
							<div class="formulario">
								<div class="linha">	<span>NOME</span>	<input type="text" id="nomeContato" name="nome" onchange="validarFormularioContato()"  /> </div>	
								<div class="linha">	<span>E-MAIL</span>	<input type="text" id="emailContato" name="email" onchange="validarFormularioContato()"  /> </div>	
								<div class="linha">	<span>FONE</span>	<input type="text" id="foneContato" name="fone" onchange="validarFormularioContato()"  /> </div>	
								<div class="linha">	<span>ASSUNTO</span>	<input type="text" id="assuntoContato" name="assunto" value="PRODUTO:<?=$nomeProduto?>" onchange="validarFormularioContato()"  /> </div>	
								<div class="linha">	<span>MENSAGEM </span>	<textarea rows="5" cols="40" id="mensagemContato"  name="mensagem" onchange="validarFormularioContato()"></textarea> </div>	
								<div class="linha">	<span></span>	<input id="botaoEnviar" type="submit" value="ENVIAR" /> </div>
							</div>
					</form>
			<?
		
	}
	
}
?>