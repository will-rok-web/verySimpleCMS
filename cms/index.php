<?php
session_start();
	require_once ('includes/auth.php');
	require_once ('includes/content.php');
	
	$header=new header_content;
	$navbar=new navbar;
	$body=new body_content;
	$footer=new footer_content;
	$auth= new auth;	
	
	if (isset($_POST['login']) && isset($_POST['password'])){
		$username=htmlspecialchars(strip_tags($_POST['login']));
		$passwd=htmlspecialchars(strip_tags($_POST['password']));
		if ($auth->login($username, $passwd)){
			$_SESSION['admin_user']=$username;			
		}
		else{				
			$header->content();
			echo '<center><h3>Вход в систему не возможен!</h3></br><a href="login.php">Вход</a></center>';			
			$footer->content();
			exit;
		}
	}
	if ($auth->check_admin_user()){		
		$header->content();
		$navbar->nav();
		$body->index_admin();		
		$footer->content();
	}
	else {		
		$header->content();
		echo '<center><h3>У Вас нет прав для просмотра этой страницы!</h3></br><a href="login.php">Вход</a></center>';		
		$footer->content();
	}
?>