<?php
header('Content-Type: text/html; charset=utf-8');
	if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
		if($_POST) {
			require_once ('lib/db_connect.php');
			require_once ('query_model.php');
			$connect=new db_connect;
			$connect=$connect->connect();
			if (!$connect){
				echo 0;
				exit;
			} else {
				
				$options=new model;
				$dest=htmlspecialchars(strip_tags($_POST['dest']));								
				switch ($dest){					
					case ('select'):						
						$nospam=htmlspecialchars(strip_tags($_POST['smCheck']));
						if ($nospam!='nospam')
							exit;						
						$name=htmlspecialchars(strip_tags($_POST['name']));
						$phone=htmlspecialchars(strip_tags($_POST['userPhone']));
						$close='new';
						if (!@$options->insertRequest($connect, $name, $phone, $close)){										
							echo 0;
							exit;
						}
					break;					
				}
			}
		}
	}
?>