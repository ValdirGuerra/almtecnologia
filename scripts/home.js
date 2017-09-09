$(document).ready(function()
 {
    	$("#slideshow > div:gt(0)").hide();
		setInterval(function() { 
			$('#slideshow > div:first')
				.fadeOut(1000)
				.next()
				.fadeIn(1000)
				.end()
				.appendTo('#slideshow');
			},  10000);
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
		$('#empresa').show();
		$('#slideshow').show();  
		$('#slideshow img').show();  
	 } else {
		 $('#empresa').hide();
		 $('#slideshow').hide();  
		 $('#slideshow img').hide();
	 }

	// PRODUTOS
	$("[id='produtos']").width(newSize);
	$("[id='produtos'] .produto").width(newSizeProduto);
	$("[id='produtos'] .titulo").css({"font-size" : newFontSizeProdutoTitulo});
	$("[id='produtos'] .descricao").css({"font-size" : newFontSizeProdutoDescricao});
	$("[id='produto-header']").width(newSize);
	$("[id='produto-subheader']").width(newSize);

	$("[id='produtos']").css( { marginLeft : newMargim, marginRight : newMargim } );
	$("[id='produto-header']").css( { marginLeft : newMargim, marginRight : newMargim } );
	$("[id='produto-subheader']").css( { marginLeft : newMargim, marginRight : newMargim } );

}




$(function() {
    adjustResponsivenessSubPage($(this).width());
    $(window).resize(function() {
        adjustResponsivenessSubPage($(this).width());
    });
});
