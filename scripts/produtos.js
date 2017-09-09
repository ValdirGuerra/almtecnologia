$(document).ready(function()
 {
    	
			   
 });				

 
function adjustResponsivenessSubPage(width) {
    width = parseInt(width);
    	
	if (width < 1000) {
		var newSize = "900px";
		var newMargim = "10px";
		var newLiBlock = "block";
		var newLiMargim = "10px";
		var newEndFootHeight = "400px";
		var newSizeProduto = 440;
		var newFontSizeProdutoTitulo = "24px";
		var newFontSizeProdutoDescricao = "23px";
		
		var exibir = false;

    } else {
		var newSize = "975px";
		var newMargim = "auto";
		var exibir = true;
		var newLiBlock = "inline-block";
		var newEndFootHeight = "200px";
		var newLiMargim = "0px";
		var newSizeProduto = 317;
		var newFontSizeProdutoTitulo = "14px";
		var newFontSizeProdutoDescricao = "13px";
	}
	// HEADER

	// MENU, SLIDESHOW, EMPRESA	 	
	 if (exibir) {
	 } else {
	 }

	// PRODUTOS
	$("[id='produtos']").width(newSize);
	$("[id='produtos']").css( { marginLeft : newMargim, marginRight : newMargim } );

}




$(function() {
    adjustResponsivenessSubPage($(this).width());
    $(window).resize(function() {
        adjustResponsivenessSubPage($(this).width());
    });
});

 