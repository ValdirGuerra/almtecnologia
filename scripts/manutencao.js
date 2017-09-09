$(document).ready(function()
 {
    activeThumbProduct();	
			   
 });				

 
function activeThumbProduct() {
	$('ul[class="produtoThumb"] li').hover(function() {
	   var myText = $(this).attr('id');
		$("#imgThumbPrincipal").attr('src','./images/'+myText);
	});

}
