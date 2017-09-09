$(document).ready(function()
 {
    
			   
 });	
 
 
 
 
 function validarFormularioSpareparts() {
				
		var validation = true;
	
		// NOME
		$("#nomeSpareparts").val($("#nomeSpareparts").val().toUpperCase());
		c = $("#nomeSpareparts");
		if (c.val().length <= 3) { 
			c.css('border-color',"#FF0000");
			validation = false;
		} else {
			c.css('border-color',"#008800");
		}	

		// EMAIL
		$("#emailSpareparts").val( $("#emailSpareparts").val().toLowerCase()  );			
		c = $("#emailSpareparts");
		if ( isEmail(c.val()) == false ) {
			c.css('border-color',"#FF0000");
			validation = false;
		} else {
			c.css('border-color',"#008800");
		}	
		
		
		// TELEFONE
		$("#foneSpareparts").val(fomartFONE($("#foneSpareparts").val()));	
		cF1 = $("#foneSpareparts");
		if ( cF1.val().length > 9)   {
			cF1.css('border-color',"#008800");
		} else {
			cF1.css('border-color',"#FF0000");
			validation = false;
		}	
		
		
		// MARCA
		$("#marcaSpareparts").val($("#marcaSpareparts").val().toUpperCase());
		c = $("#marcaSpareparts");
		if (c.val().length <= 3) { 
			c.css('border-color',"#FF0000");
			validation = false;
		} else {
			c.css('border-color',"#008800");
		}	
		
		// MODELOS
		$("#modeloSpareparts").val($("#modeloSpareparts").val().toUpperCase());
		c = $("#modeloSpareparts");
		if (c.val().length <= 3) { 
			c.css('border-color',"#FF0000");
			validation = false;
		} else {
			c.css('border-color',"#008800");
		}	
		
		// ASSUNTO
		$("#assuntoSpareparts").val($("#assuntoSpareparts").val().toUpperCase());
		c = $("#assuntoSpareparts");
		if (c.val().length <= 3) { 
			c.css('border-color',"#FF0000");
			validation = false;
		} else {
			c.css('border-color',"#008800");
		}	
		
		
		// MENSAGEM
		$("#mensagemSpareparts").val($("#mensagemSpareparts").val().toUpperCase());
		c = $("#mensagemSpareparts");
		if (c.val().length <= 3) { 
			c.css('border-color',"#FF0000");
			validation = false;
		} else {
			c.css('border-color',"#008800");
		}	
		
			
	return validation;
 }
 

 