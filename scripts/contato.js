$(document).ready(function()
 {
    
			   
 });	
 
 
 
 
 function validarFormularioContato() {
				
		var validation = true;
	
		// NOME
		$("#nomeContato").val($("#nomeContato").val().toUpperCase());
		c = $("#nomeContato");
		if (c.val().length <= 3) { 
			c.css('border-color',"#FF0000");
			validation = false;
		} else {
			c.css('border-color',"#008800");
		}	

		// EMAIL
		$("#emailContato").val( $("#emailContato").val().toLowerCase()  );			
		c = $("#emailContato");
		if ( isEmail(c.val()) == false ) {
			c.css('border-color',"#FF0000");
			validation = false;
		} else {
			c.css('border-color',"#008800");
		}	
		
		
		// TELEFONE
		$("#foneContato").val(fomartFONE($("#foneContato").val()));	
		cF1 = $("#foneContato");
		if ( cF1.val().length > 9)   {
			cF1.css('border-color',"#008800");
		} else {
			cF1.css('border-color',"#FF0000");
			validation = false;
		}	
		
		
		// ASSUNTO
		$("#assuntoContato").val($("#assuntoContato").val().toUpperCase());
		c = $("#assuntoContato");
		if (c.val().length <= 3) { 
			c.css('border-color',"#FF0000");
			validation = false;
		} else {
			c.css('border-color',"#008800");
		}	
		
		
		// MENSAGEM
		$("#mensagemContato").val($("#mensagemContato").val().toUpperCase());
		c = $("#mensagemContato");
		if (c.val().length <= 3) { 
			c.css('border-color',"#FF0000");
			validation = false;
		} else {
			c.css('border-color',"#008800");
		}	
		
			
	return validation;
 }
 

 