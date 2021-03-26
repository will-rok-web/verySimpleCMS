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
		$name=htmlspecialchars(strip_tags($_POST['name']));
		$phone=htmlspecialchars(strip_tags($_POST['phone']));
		$email=htmlspecialchars(strip_tags($_POST['email']));
		$address=htmlspecialchars(strip_tags($_POST['address']));
		$state=htmlspecialchars(strip_tags($_POST['state']));
		$city=htmlspecialchars(strip_tags($_POST['city']));
		$zip=htmlspecialchars(strip_tags($_POST['zip']));
		$country=htmlspecialchars(strip_tags($_POST['country']));
		$productPrice=$_SESSION['total_price'];
		$delivery=htmlspecialchars(strip_tags($_POST['delivery']));
		$pay=htmlspecialchars(strip_tags($_POST['hpay']));		
		$cart=$_SESSION['cart'];		
		if ($_SESSION['cart'] && $name && $phone && $email && $address && $state && $city && $zip && $country){			
			$connect->beginTransaction();			
			$options->insertOrder($connect, $name, $phone, $_SESSION['total_price'], 'new');
			$orderId=$options->getOrderId($connect);
			$orderId=$orderId->fetchColumn();			
			foreach ($cart as $id => $qty) {
				$product=$options->selectProduct($connect, $id);
				$product=$product->fetch();
				$productName=$product['name'].' '.$product['model'];				
				$productPrice=$product['price']*$qty;
				$cat=$product['catId'];				
				$options->insertOrderDetails($connect, $orderId, $name, $phone, $email, $address, $city, $state, $zip, $country, $cat, $productName, $qty, $productPrice, $delivery, $pay, 'new');				
			}			
			if ($connect->commit()){
				$card->content('<span style="color:green">Ваша заказ принят!</span>',$connect, $options, $_SESSION['cart'], false);
				echo '<center><a class="btn btn-md btn-danger" href="index.php">Продолжить покупки</a></center><br />';
				unset ($_SESSION['cart']);
			} else {
				echo '<center><span style="color:red"><h3>Ошибка оформления заказа, попробуйте позже</h3></span></center><br />';
			}
		}
		
		$index->containerFluid('stop');
		$footer->content();
	}
?>