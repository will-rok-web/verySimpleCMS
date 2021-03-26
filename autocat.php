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
		$productCat->containerFluid('start');
		$catid=intval($_GET['catId']);
		$res=$options->selectProductCat($connect, $catid);
		if (!$res){
			echo 'Ошибка';
			$productCat->howWork();			
			$productCat->containerFluid('stop');
			$footer->content();
			exit;
		} else {				
			$rowsonpage=40;//количество позиций
			$page=intval($_GET['page']);
			$rowscount=$res->rowCount();	
			if (empty ($rowsonpage)) $rowsonpage=$rowscount;//количество товаров
			$totalpage = intval(($rowscount - 1) / $rowsonpage) + 1;			
			$page=intval($page);
			if(empty($page) or $page < 0) $page = 1;
			if($page > $totalpage) $page = $totalpage; 
			$start=$page*$rowsonpage-$rowsonpage;
			$res=$options->selectProductCatPag($connect, $catid, $start, $rowsonpage);				
			if (!$res){
				echo 'Ошибка';
				$productCat->howWork();				
				$productCat->containerFluid('stop');
				$footer->content();
				exit;
			} else {
				$productCat->content($res, 'Каталог товаров', $connect, $options, 'selectIndexProductPic', 'itemauto.php');
				if ($page != 1) $firstpage = '<a class="buttonlink" href= ./autocat.php?catId='.$catid.'&page=1>В начало</a><a class="buttonlink" href= ./autocat.php?catId='.$catid.'&page='. ($page - 1) .'>Пред.</a> ';
				// Проверяем нужны ли стрелки вперед
				if ($page != $totalpage) $nextpage = ' <a class="buttonlink" href= ./autocat.php?catId='.$catid.'&page='. ($page + 1) .'>След.</a><a class="buttonlink" href= ./autocat.php?catId='.$catid.'&page=' .$totalpage. '>В конец</a>';
				// Находим две ближайшие станицы с обоих краев, если они есть
				if($page - 2 > 0) $page2left = ' <a class="buttonlink" href= ./autocat.php?catId='.$catid.'&page='. ($page - 2) .'>'. ($page - 2) .'</a>';
				if($page - 1 > 0) $page1left = '<a class="buttonlink" href= ./autocat.php?catId='.$catid.'&page='. ($page - 1) .'>'. ($page - 1) .'</a>';
				if($page + 2 <= $totalpage) $page2right = '<a class="buttonlink" href= ./autocat.php?catId='.$catid.'&page='. ($page + 2) .'>'. ($page + 2) .'</a>';
				if($page + 1 <= $totalpage) $page1right = '<a class="buttonlink" href= ./autocat.php?catId='.$catid.'&page='. ($page + 1) .'>'. ($page + 1) .'</a>';
					// Вывод меню
				echo '<div><br /><center>'.$firstpage.$page2left.$page1left.'<i class="buttonlink"><b>'.$page.'</b></i>'.$page1right.$page2right.$nextpage.'</center></div>';
			}
		}		
		$productCat->howWork();		
		$productCat->containerFluid('stop');
		$footer->content();
	}
?>