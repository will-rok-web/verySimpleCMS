<?php
session_start();
	require_once('query_model.php');
	require_once ('lib/db_connect.php');
	require_once('require_class.php');
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
		$contacts->containerFluid('start');
		$contacts->content();
		$contacts->containerFluid('stop');
		$footer->content();
	}
?>