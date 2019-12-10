<?php
	//-- Borrar antes de lanzar --// 
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	//-- ---------------------- --//
	include "../SMART/php/API/util.php";
	include "../SMART/php/API/query.php";
	
	$query = new query();
	$util = new util();
	
	$nombre = $_POST["nombre"];
	$correo = $_POST["email"];
	$topico = $_POST["topico"];
	$mensaje = $_POST["mensaje"];
	
	if($query->insert(array("FECHA"=>date("Y-m-d"),"NOMBRE"=>$nombre,"EMAIL"=>$correo,"PAIS"=>1,"MOTIVO"=>$topico,"MENSAJE"=>$mensaje),"CONSULTA")){
		$arrResult = array ('response'=>'success');
		echo json_encode($arrResult);
	}
?>
