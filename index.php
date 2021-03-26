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
		$header->content('title', 'desk', 'keywords');
		$menu=$options->selectCat($connect);
		$navbar->nav($menu);
		$index->containerFluid ('start');
		$index->text();		
		$index->howWork();			
		$res=$options->selectProductCatIndex($connect);
		if (!$res){
			echo 'Ошибка';			
			$index->containerFluid('stop');
			$footer->content();
			exit;
		} else {			
			$index->ourWork($res, 'Товары', $connect, $options, 'selectIndexProductPic', 'itemauto.php');			
		}
		$index->containerFluid('stop');
		$footer->content();
	}
?>