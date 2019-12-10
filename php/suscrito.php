<?php
	//-- Borrar antes de lanzar --// 
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	//-- ---------------------- --//
	include "../SMART/php/API/util.php";
	include "../SMART/php/API/query.php";
	
	$query = new query();
	$util = new util();
	
	$dato = $_POST["EMAIL"];
	
	if($query->insert(array("EMAIL"=>$dato),"SUSCRITO")){
		$util->respuesta("SUCCESS","RECIBIDO");
	}
?>
