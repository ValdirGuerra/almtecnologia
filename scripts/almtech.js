
var producao = false;


$(document).ready(function()
 {
    
 });				

 
function activeMenu() {
	$('ul[class="menuWithImage"] li a').hover(function() {
	   var aText = $(this).text();
	   var aId = $(this).attr('id');
	   var aName = $(this).attr('name');
	   if (aId) {
		   if (aName) {
			   imageDestine = './images/' + aId + '_200x150.png';
			   $("#"+aName).attr('src',imageDestine);
			  
		   }
	   }
	});

}


 
 
 
 function go(ref) {
	 window.location = ref;
 }
 
 function onChangeMenuMobile(){
	goLink = $( "#menuMobile").val();
	go(goLink);
 }
 
 
function adjustResponsiveness(width) {
    width = parseInt(width);
  	
	if (width < 1000) {
		var newSize = "900px";
		var newMargim = "20px";
		var newLiBlock = "block";
		var newLiMargim = "10px";
		var newEndFootHeight = "650px";
		var imageLogoPath = "./images/logo_280x100.png";
		var newFontSizeProdutoTitulo = "24px";
		var newFontSizeProdutoDescricao = "23px";
		
		var exibir = false;
		$("[id='header-logo']").css( { position : "fixed", top:"0px", left:"0px", "z-index" : "900" } );
		$("[id='header-menu']").css( { position : "fixed", top:"0px", left:"0px", "z-index" : "800", height: "100px" } );
		$("[id='header-bars']").css( { "margin-bottom" : "90px" } );
		$("[id='header-bars'] a").hide();
		$("[id='header-bars'] a").css( { position: "fixed",  width:"90%" } );
		$("[id='header-menu-mobile']").show();
		$("[id='poweredBy'] a").css({"font-size" : "24px"});
		
		 
		
    } else {
		var newSize = "975px";
		var newMargim = "auto";
		var exibir = true;
		var newLiBlock = "inline-block";
		var newEndFootHeight = "200px";
		var newLiMargim = "0px";
		var imageLogoPath = "./images/logo_900x100.png";
		var newFontSizeProdutoTitulo = "14px";
		var newFontSizeProdutoDescricao = "13px";
		$("[id='header-logo']").css( { position : "relative", top:"0px", left:"0px", "z-index" : "900" } );
		$("[id='header-menu']").css( { position : "relative", top:"0px", left:"0px", "z-index" : "800", height: "30px" } );
		$("[id='header-bars']").css( { "margin-bottom" : "0px" } );
		$("[id='header-bars'] a").show();
		$("[id='header-bars'] a").css( { position: "relative", width:"100%" } );
		$("[id='header-menu-mobile']").hide();
		$("[id='poweredBy'] a").css({"font-size" : "12px"});
	}
	// HEADER
	
	$("[id='header-bars']").width(newSize);
	$("[id='header-logo']").width(newSize);
	$("[id='header-bars']").css( { marginLeft : newMargim, marginRight : newMargim } );
	
	$('#logoImage').attr("src", imageLogoPath);
 
	// MENU, SLIDESHOW, EMPRESA	 	
	 if (exibir) {
		$('#header-menu .menu-bar').show();  
		$('#empresa').show();
	 } else {
		$('#header-menu .menu-bar').hide();
		 $('#empresa').hide();
	 }

	 
	 
	$("[id='goUp']").css( { marginLeft : newMargim, marginRight : newMargim } );


	// FOOTER
	$("[id='footer-end-menu']").width(newSize);
	$("[id='footer-end-menu']").css( { marginLeft : newMargim, marginRight : newMargim } );
	$("#footer-end .informacoes").css( { display : newLiBlock, marginTop:newLiMargim } );
	$("#footer-end .contato").css( { display : newLiBlock, marginTop:newLiMargim } );
	$("#footer-end .endereco").css( { display : newLiBlock, marginTop:newLiMargim } );
	$("#footer-end .links").css( { display : newLiBlock, marginTop:newLiMargim } );
	$("#footer-end ").height(newEndFootHeight);
	
	$("[id='footer-end'] li").css({"font-size" : newFontSizeProdutoTitulo, "width" : newEndFootHeight});
	$("[id='footer-end'] li a").css({"font-size" : newFontSizeProdutoTitulo, "width" : newEndFootHeight});
	   
	
	
	
}

$(function() {
    adjustResponsiveness($(this).width());
    $(window).resize(function() {
        adjustResponsiveness($(this).width());
    });
});
 
 
  
 
 