<?php
session_start();
	require_once('includes/db_connect.php');
	require_once('includes/content.php');
	require_once('categories_model.php');
	require_once('includes/auth.php');
	
	$auth=new auth;
	$auth=$auth->check_admin_user();
	$header=new header_content;
	$footer=new footer_content;
	
	if ($auth){
		$connect=new db_connect;		
		$categories=new view_categories;
		$cat_options=new categories_model;
		$navbar=new navbar;
		$url=new admin_url;
		
		$connect=$connect->connect();
		if (!$connect){
			$header->content();
			echo 'Error! No connect to database!';
			$footer->content();
		} else {
			$param=htmlspecialchars(strip_tags($_GET['param']));
			$header->content();
			$navbar->nav();
			switch ($param){
				case '':
					$select=$cat_options->select_cat($connect);
					if (!$select){
						echo "Error!";
						break;
					} else {
						$categories->options();
						$categories->categories($select);
					}
				break;
				case 'create_form':
					$form=new cat_form;
					$select=$cat_options->select_root_cat($connect);
					if (!$select){
						echo "Error!";
						break;
					} else {
						$form->form_header('categories_controller.php?param=create');
						$form->form_body ($select);
						$form->form_footer();
					}
				break;
				case 'create':
					$rootcatid=htmlspecialchars(strip_tags($_POST['rootcatname']));
					$cattop=htmlspecialchars(strip_tags($_POST['topcat']));
					$catname=htmlspecialchars(strip_tags($_POST['catname']));
					$catpic=htmlspecialchars(strip_tags($_POST['catimgname']));
					$catdescription=htmlspecialchars(strip_tags($_POST['catdescription']));
					$insert=$cat_options->create_cat($connect, $rootcatid, $cattop, $catname, $catpic, $catdescription);
					if (!$insert){
						echo "Error!";
					} else {
						echo '<div class="left">Категория создана!</div>';
						$url->url('categories_controller.php', 'Назад');
					}
				break;
				case 'edit_form':
					$form=new edit_cat_form;
					$catid=htmlspecialchars(strip_tags($_POST['catid']));
					$select=$cat_options->select_cat_by_id($connect, $catid);
					if (!$select){
						echo "Error!";
				break;
					} else {
						$form->form_header('categories_controller.php?param=edit');
						$form->form_body ($select);
						$form->form_footer();
					}
				break;
				case 'edit':
					$catid=htmlspecialchars(strip_tags($_POST['catid']));
					$catname=htmlspecialchars(strip_tags($_POST['catname']));
					$catpic=htmlspecialchars(strip_tags($_POST['catimgname']));
					$catdescription=htmlspecialchars(strip_tags($_POST['catdescription']));
					$update=$cat_options->edit_cat($connect, $catid, $catname, $catpic, $catdescription);
					if (!$update){
						echo "Error!";
					} else {
						echo '<div class="left">Категория отредактирована!</div>';
						$url->url('categories_controller.php', 'Назад');
					}
				break;
				case 'delete':
					$catid=htmlspecialchars(strip_tags($_POST['catid']));
					$delete=$cat_options->delete_cat($connect, $catid);
					if (!$delete){
						echo "Error!";
					} else {
						echo '<div class="left">Категория удалена!</div>';
						$url->url('categories_controller.php', 'Назад');
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