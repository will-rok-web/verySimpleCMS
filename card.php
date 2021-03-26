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
		@$new=htmlspecialchars(strip_tags($_GET['new']));		
		$options=new model;
		$header->content('title', 'desk', 'keywords');
		$menu=$options->selectCat($connect);
		$navbar->nav($menu);
		$card->containerFluid ('start');	
		if ($new){
			if (!isset($_SESSION['cart'])){
				$_SESSION['cart']=array();
				$_SESSION['items']=0;
				$_SESSION['total_price']='0.00';
			}
			if (isset($_SESSION['cart'][$new])){
				$_SESSION['cart'][$new]++;
			}
			else{
				$_SESSION['cart'][$new]=1;
			}
			$_SESSION['total_price']=$options->calculate_price($connect, $_SESSION['cart']);
			$_SESSION['items']=$options->calculate_items($_SESSION['cart']);
		}
		if (isset($_POST['save'])){
			foreach ($_SESSION['cart'] as $id => $qty){
				if (htmlspecialchars(strip_tags($_POST[$id]))=='0'){
					unset ($_SESSION['cart'][$id]);
				}
				else {
					$_SESSION['cart'][$id]=htmlspecialchars(strip_tags($_POST[$id]));
				}
			}
					$_SESSION['total_price']=$options->calculate_price($connect, $_SESSION['cart']);
					$_SESSION['items']=$options->calculate_items($_SESSION['cart']);
		}		
		if (($_SESSION['cart'])&&(array_count_values($_SESSION['cart']))){			
			$card->content('Ваша корзина',$connect, $options, $_SESSION['cart']);
		}
		else {
			echo "<h1>Ваша корзина пуста</h1><hr/>";
		}		
		echo '<center><a class="btn btn-md btn-danger" href="index.php">Продолжить покупки</a>&nbsp&nbsp';
		echo '<a class="btn btn-md btn-danger" href="checout.php">Окончательный расчет</a><br /><br /></center>';
		$index->containerFluid('stop');
		$footer->content();
	}	
?>