<?php
session_start();
	require_once ('includes/auth.php');
	require_once ('includes/content.php');
	require_once ('orders_model.php');
	
	$header=new header_content;
	$footer=new footer_content;
	$auth=new auth;
	$auth=$auth->check_admin_user();
	
	if ($auth){		
		$navbar=new navbar;
		$body=new body_content;
		$url=new admin_url;		
		$options=new orders_model;
		$selection=new view_orders;		
		$connect=new db_connect;
		$connect=$connect->connect();
		if (!$connect){
			$header->content();
			echo 'Fatal_error! No connect!';
			$footer->content();
		} else {
			$param=htmlspecialchars(strip_tags($_GET['param']));
			$header->content();
			$navbar->nav();
			switch ($param){
				case '':
					$select=$options->select_orders($connect);
					if (!$select){
						echo "Error!";
						break;
					} else {						
						echo '<div class="container-fluid">Заказы</div>';
						$selection->orders($select);
					}
					break;				
				case 'close':
					$id=htmlspecialchars(strip_tags($_POST['orderid']));
					$res=$options->edit_order($connect, $id, 'close');
					if (!$res){
						echo "Error!";
					} else {
						echo '<div class="container-fluid">Заказ закрыт</div>';
						$url->url('orders_controller.php','Назад');
					}
				break;	
				case 'closed_orders':
					$select=$options->select_orders_c($connect);
					if (!$select){
						echo "Error!";
						break;
					} else {						
						echo '<div class="container-fluid">Заказы</div>';
						$selection->orders($select);
					}
				break;
				case 'details':
					$id=htmlspecialchars(strip_tags($_POST['orderid']));
					$select=$options->select_order_details($connect, $id);
					if (!$select){
						echo "Error!";
						break;
					} else {						
						echo '<div class="container-fluid">Детализация заказа</div>';
						$selection->order_details($select);
					}
				break;
			}
			$footer->content();
		}
	} else {
		$header->content();
		echo '<center><h3>У Вас нет прав для просмотра этой страницы!</h3></br><a href="login.php">Вход</a></center>';		
		$footer->content();
	}
?>