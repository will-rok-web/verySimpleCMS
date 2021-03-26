<?php
session_start();
	require_once('includes/db_connect.php');
	require_once('includes/content.php');
	require_once('users_model.php');
	require_once('includes/auth.php');
	
	$check=new auth;
	$check=$check->check_admin_user();
	$header=new header_content;
	$footer=new footer_content;
	
	if ($check){	
		$connect=new db_connect;		
		$users=new view_users;
		$users_options=new users_model;
		$navbar=new navbar;
		$url=new admin_url;
		$connect=$connect->connect();
		if (!$connect){
			$header->content();
			echo "Error!";
			$footer->content();
		} else {
			$param=htmlspecialchars(strip_tags($_GET['param']));
			$header->content();
			$navbar->nav();
			switch ($param){
				case '':
					$select=$users_options->select_users($connect);
					if (!$select){
						echo "Error!";
						break;
					} else {
						$users->options();
						$users->users($select);
					}
				break;
				case 'create_form':
					$form=new user_form;
					$form->form_header('users_controller.php?param=create');
					$form->form_body ();
					$form->form_footer();
				break;
				case 'create':
					$username=htmlspecialchars(strip_tags($_POST['username']));
					$password=htmlspecialchars(strip_tags($_POST['password']));
					$insert=$users_options->create_user($connect, $username, $password);
					if (!$insert){
						echo "Error!";
					} else {
						echo '<div class="left">Пользователь создан!</div>';
						$url->url('users_controller.php', 'Назад');
					}
				break;
				case 'delete':
					$userid=htmlspecialchars(strip_tags($_POST['userid']));
					$delete=$users_options->delete_user($connect, $userid);
					if (!$delete){
						echo "Error!";
					} else {
						echo '<div class="left">Пользователь удален!</div>';
						$url->url('users_controller.php', 'Назад');
					}
				break;
				default:
					echo "Wrong arg!";
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