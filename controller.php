<?php
require_once("config.php");
header("Content-Type: text/html; charset=ISO-8859-1",true);
header("Cache-Control: no-cache, must-revalidate",true); // HTTP/1.1
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT",true); // Date in the past

	if (isset($_POST['service'])) {
		$service = $_POST['service'];
	} else {
		if (isset($_REQUEST['service'])) {
			$service = $_REQUEST['service'];
		} else {
			$service = "nao autorizado";
			die;
		}	
	}

	if (isset($_POST['action'])) {
		$action = $_POST['action'];
	} else {
		if (isset($_REQUEST['action'])) {
			$action = $_REQUEST['action'];
		} else {
			$action = "nao autorizado";
			die;
		}	
	}
	
if ( isset($service)  && ($service != "") && isset($action)  ) {
	$subController = PATH_SERVICE . DIRECTORY_SEPARATOR . $service . '.php'; 
	if (file_exists($subController)) {
		require_once($subController);
	}
}
?>