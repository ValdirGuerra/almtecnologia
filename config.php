<?
define("AMBIENTE_PRODUCAO",false);	
	
if (AMBIENTE_PRODUCAO) {	
	define("PATH_ROOT",$_SERVER['DOCUMENT_ROOT']); // E:\Vhosts\almtecnologia.com.br\httpdocs
	define("PATH_HOME",PATH_ROOT . "\\"); 
	
	define("PATH_ROOT",$_SERVER['DOCUMENT_ROOT']);
	define("PATH_CLASSES",PATH_HOME . "classes");
	define("PATH_IMAGES" ,PATH_HOME . "images");
	define("PATH_SOURCE" ,PATH_HOME . "sources");
	define("PATH_SERVICE",PATH_HOME . "services");
	define("PATH_UPLOAD" ,PATH_HOME . "upload");
	define("PATH_CATALOGO" ,"E:\Vhosts\almtecnologia.com.br\private\catalogo");
	define("PATH_CATALOGO_URL" ,"./cat");
	define("PATH_LINK" ,"E:\Vhosts\almtecnologia.com.br\private");
	define("WS","ACTIVE");
	define("ENVIAR_EMAIL","SIM");
	require_once(PATH_CLASSES."/Session.php");
	require_once(PATH_CLASSES."/Link.php");
	require_once(PATH_CLASSES."/Empresa.php");
	define("SESSION_MAXTIME",1800);
	Link::init(PATH_SOURCE);
} else {
	define("PATH_ROOT",$_SERVER['DOCUMENT_ROOT']); // C:/SDK2014/opensource/wamp/www/
	define("PATH_HOME",PATH_ROOT . "almtecnologia/"); 
	define("PATH_CLASSES",PATH_HOME . "classes");
	define("PATH_IMAGES" ,PATH_HOME . "images");
	define("PATH_SOURCE" ,PATH_HOME . "sources");
	define("PATH_SERVICE",PATH_HOME . "services");
	define("PATH_UPLOAD" ,PATH_HOME . "upload");
	define("PATH_CATALOGO" ,PATH_HOME . "catalogo");
	define("PATH_CATALOGO_URL" ,"./catalogo");
	define("PATH_LINK" ,PATH_HOME);
	define("WS","ACTIVE");
	define("ENVIAR_EMAIL","SIM");
	require_once(PATH_CLASSES."/Session.php");
	require_once(PATH_CLASSES."/Link.php");
	require_once(PATH_CLASSES."/Empresa.php");
	define("SESSION_MAXTIME",1800);
	Link::init(PATH_SOURCE);
}
?>