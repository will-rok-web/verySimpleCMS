<?php
session_start();
	require_once('require_class.php');
	require_once('query_model.php');
	require_once ('lib/db_connect.php');
	$connect=new db_connect;
	$connect=$connect->connect();
	if (!$connect){
		echo 'Ошибка';		
		exit;
	} else {
		$options=new model;
		$menu=$options->selectCat($connect);
		if (!$menu){
			echo 'Ошибка';
			exit;
		}
		$header->content('title', 'desk', 'keywords');		
		$navbar->nav($menu);
		$itemProduct->containerFluid('start');		
		$carId=intval($_GET['id']);		
		$respic=$options->selectProductPic($connect, $carId);
		$res=$options->selectProduct($connect, $carId);
		if (!$respic || !$res){
			echo 'Ошибка';
			$itemProduct->howWork();
			$itemProduct->selectForm();
			$itemProduct->containerFluid('stop');
			$footer->content();
			exit;
		} else {			
			$itemProduct->content($res, $respic);
			$itemProduct->howWork();			
			$itemProduct->containerFluid('stop');
			$footer->content();
		}
	}
?>