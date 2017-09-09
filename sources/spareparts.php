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
<!-- spareparts -->	
<?
	if ( (isset($action) && ($action == "")) || (isset($action) && ($action === Link::getAlias(35)))  )  {
?>

<div id="spareparts">
		<div class="titulo">Spare Parts</div>
			<div class="line"></div>
			<form id="form" name="form" action="controller.php" onsubmit="return validarFormularioSpareparts();" method="post" accept-charset="UTF-8">
				<input type="hidden" name="service" value="sparepartsService"/>
				<input type="hidden" name="action" value="enviarEmail"/>
				<div class="formulario">
					<div class="linha">	<span>NOME</span>	<input type="text" id="nomeSpareparts" name="nome" onchange="validarFormularioSpareparts()"  /> </div>	
					<div class="linha">	<span>E-MAIL</span>	<input type="text" id="emailSpareparts" name="email" onchange="validarFormularioSpareparts()"  /> </div>	
					<div class="linha">	<span>FONE</span>	<input type="text" id="foneSpareparts" name="fone" onchange="validarFormularioSpareparts()"  /> </div>	
					<div class="linha">	<span>MARCA</span>	<input type="text" id="marcaSpareparts" name="marcaSpareparts" onchange="validarFormularioSpareparts()"  /> </div>	
					<div class="linha">	<span>MODELO</span>	<input type="text" id="modeloSpareparts" name="modeloSpareparts" onchange="validarFormularioSpareparts()"  /> </div>	
					<div class="linha">	<span>PART NUMBER</span>	<input type="text" id="partenumberSpareparts" name="partenumberSpareparts" onchange="validarFormularioSpareparts()"  /> </div>	
					<div class="linha">	<span>ASSUNTO</span>	<input type="text" id="assuntoSpareparts" name="assunto" value="SPARE PART" onchange="validarFormularioSpareparts()"  /> </div>	
					<div class="linha">	<span>MENSAGEM </span>	<textarea rows="5" cols="40" id="mensagemSpareparts"  name="mensagem" onchange="validarFormularioSpareparts()"></textarea> </div>	
					<div class="linha">	<span></span>	<input id="botaoEnviar" type="submit" value="ENVIAR" /> </div>
				</div>
			</form>
			<p>&nbsp;</p>
			
			
	
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
		

</div>

<?
   } 
?>
<!-- END OF spareparts -->
