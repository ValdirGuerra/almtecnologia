/**
*  Intelligy Networks - Todos os Direitos Reservados
*  Autor:  Valdir C. Guerra
*  Data de Criação: 25/02/2014
*  Formater  
*  Versao: 2.0
*
*  É proibido sob pena de Lei a utilização ou reprodução de parte ou de todo conteudo desse codigo sem a previa autorização da Intelligy Networks
*/


function fomartCNPJ(c)
{
	f = c;
	f = f.replace(/[^0-9]/g,'');
    //054242491000113	
	//  0123456789012345 	
	//54242491000113
	//054.242.491/0001-13
	
	if (f.length == 13) {			
		f = '0' + f;
	}
	if (f.length == 14) {
		f = f.substring(0,2) + "." + f.substring(2,5) + "." + f.substring(5,8) + "/" + f.substring(8,12) + "-" + f.substring(12,15);
	}
	return f;		
}

function fomartCPF(c)
{
	f = c;
	f = f.replace(/[^0-9]/g,'');
    //99999999999	
	//0123456789012345 	
	//999.999.999-99	
	
	if (f.length >= 11) {
		f = f.substring(0,3) + "." + f.substring(3,6) + "." + f.substring(6,9) + "-" + f.substring(9,14) ;
	}
	return f;		
}



function fomartRG(c)
{
	f = c;
	f = f.replace(/[^0-9]/g,'');
    //999999999	
	//  01 234 567 89012345 	
	//99.999.999-9	
	
	if (f.length >= 9) {
		f = f.substring(0,2) + "." + f.substring(2,5) + "." + f.substring(5,8) + "-" + f.substring(8,14) ;
	}
	return f;		
}





function fomartCEP(c)
{
	f = c;
	f = f.replace(/[^0-9]/g,'');
		
    //09988222	
	//  0123456789012345 	
	//09988-222
	
	if (f.length == 8) {
		f = f.substring(0,5) + "-" + f.substring(5,9);
	}
	return f;		
}



function fomartFONE(c)
{
	f = c;
	f = f.replace(/[^0-9]/g,'');
	
	
	if (f.substr(0,2) == "01") f =  f.substr(1);
	if (f.substr(0,2) == "02") f =  f.substr(1);
	if (f.substr(0,2) == "03") f =  f.substr(1);
	if (f.substr(0,2) == "04") f =  f.substr(1);
	if (f.substr(0,2) == "05") f =  f.substr(1);
	if (f.substr(0,2) == "06") f =  f.substr(1);
	if (f.substr(0,2) == "07") f =  f.substr(1);
	if (f.substr(0,2) == "00") f =  f.substr(1);
	 
	t = f;
	r = f;

	 if ((t.length == 11) && (t.substr(0,2) == "11")) {
		 // (11)9.9999-9999
		 r = "(" + t.substring(0, 2) + ") " + t.substring(2, 3) + "." + t.substring(3, 7) + "-" + t.substring(7);
	 }
	 else if (t.length == 11)
	 { //08007516353
		 r = t.substring(0,1) + " " + t.substring(1,4) + "-" + t.substring(4,7) + "-" + t.substring(7)

	 }
	 else if (t.length == 12)
	 { //08007516353
		 r = t.substring(0,2) + " " + t.substring(2,5) + "-" + t.substring(5,8) + "-" + t.substring(8)
	 }
	 else if (t.length == 10)
	 {  // 119999-9999
		 r = "(" + t.substring(0, 2) + ") " + t.substring(2, 6) + "-" + t.substring(6);
	 }
	 else if (t.length == 9)
	 {  // 9.9999-9999
		 r = "(XX) " + t.substring(0, 1) + "." +  t.substring(1, 5) + "-" + t.substring(5);
	 }
	 else if (t.length == 8)
	 {  // 99999999
		 r = "(XX) " + t.substring(0, 4) + "-" + t.substring(4);
	 }
	 else
	 {
		 r = t;
	 }
	 
	 return r;		
	
}


function rightPAD(n,len,character)
{
	f = n + "";
	f = f.replace(/[^0-9]/g,'');
	c = "";
	for( x = 0;x<=len;x++) {
		c = c + character;
	}
	
	f = c + f;
	f = f.substr(-len);
	
	return f;		
}


