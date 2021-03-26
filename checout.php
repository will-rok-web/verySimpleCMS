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
		$card->containerFluid ('start');		
		$checkout->checkout('Оформление заказа');		
		$index->containerFluid('stop');
		$footer->content();
	}
?>