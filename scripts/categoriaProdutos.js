$(document).ready(function()
 {
    activeThumbProduct();	
	   
 });			
 

 
 
function activeThumbProduct() {
	$('ul[class="produtoThumb"] li').hover(function() {
	   var myText = $(this).attr('id');
		$("#imgThumbPrincipal").attr('src',myText);
	});

}


function escolherGuia(e) {
    $('#topMenu ul li').removeClass("current");
	$(e).addClass("current");
	
	id = $(e).attr("Id");
	name = $(e).attr("name");
	
	$('[id="produto"]').css("display","none");
	 $('[id="produto"].'+ name).css("display","block");
	 
 }
 
 
 
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
 
 
function adjustResponsivenessSubPage(width) {
    width = parseInt(width);
    //	alert(width);
	
	if (width < 1000) {
	    var newSizeTopMenu = "900px";
		 var newSizeTopMenu = "895px";
		var newSize = "850px";
		var newMargim = "20px";
		var newLiBlock = "block";
		var newLiMargim = "20px";
		var newEndFootHeight = "400px";
		var newSizeProduto = 440;
		var newFontSizeProdutoTitulo = "24px";
		var newFontSizeProdutoDescricao = "23px";
		var topMenuLeft = "0px";
		var formularioLeft = "70px";
		var exibir = false;

    } else {
	   
		var newSize = "975px";
		 var newSizeTopMenu = "970px"; 
		var newMargim = "auto";
		var exibir = true;
		var newLiBlock = "inline-block";
		var newEndFootHeight = "200px";
		var newLiMargim = "0px";
		var newSizeProduto = 317;
		var newFontSizeProdutoTitulo = "14px";
		var newFontSizeProdutoDescricao = "13px";
		var topMenuLeft = "-18px";
		var formularioLeft = "130px";
	}
	// HEADER

	// MENU, SLIDESHOW, EMPRESA	 	
	 if (exibir) {
	 } else {
	 }

	// PRODUTOS
	$("[id='categoriaProdutos']").width(newSize);
	$("[id='categoriaProdutos']").css( { marginLeft : newMargim, marginRight : newMargim } );
	
	$("[id='produto']").width(newSize);
	$("[id='produto']").css( { marginLeft : newMargim, marginRight : newMargim } );
	
	$("[id='produto'] .formulario").width(newSize);
	$("[id='produto'] .formulario").css( { marginLeft : newMargim, marginRight : newMargim } );
	$("[id='produto'] .linha span").css( { left: formularioLeft } );
	
	
	
	$("[id='topMenu']").width(newSizeTopMenu);
	$("[id='topMenu']").css( { marginLeft : newMargim, marginRight : newMargim, left: topMenuLeft } );
	
	

}




$(function() {
    adjustResponsivenessSubPage($(this).width());
    $(window).resize(function() {
        adjustResponsivenessSubPage($(this).width());
    });
});

 
 
 
 


 