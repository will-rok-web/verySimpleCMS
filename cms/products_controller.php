<?php
session_start();
	require_once('includes/db_connect.php');
	require_once('includes/content.php');
	require_once('products_model.php');
	require_once('includes/auth.php');
	
	$auth=new auth;
	$auth=$auth->check_admin_user();
	$header=new header_content;
	$footer=new footer_content;
	
	if ($auth){
		$connect=new db_connect;		
		$products=new view_products;
		$products_options=new products_model;
		$navbar=new navbar;
		$url=new admin_url;
		$pic=new view_pic;
		$imgform=new image_form;
		
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
					$select=$products_options->select_products($connect);
					if (!$select){
						echo "Error!";
						break;
					} else {
						$products->options();
						$products->products($select);
					}
				break;
				case 'create_form':
					$form=new product_form;
					$select=$products_options->select_product_cat($connect);
					if (!$select){
						echo "Error!";
						break;
					} else {
						$form->form_header('products_controller.php?param=create');
						$form->form_body ($select);
						$form->form_footer();
					}
				break;
				case 'create':
				
					$catid=htmlspecialchars(strip_tags($_POST['catid']));
					$name=htmlspecialchars(strip_tags($_POST['name']));
					$model=htmlspecialchars(strip_tags($_POST['model']));
					$options=htmlspecialchars(strip_tags($_POST['options']));
					$price=htmlspecialchars(strip_tags($_POST['price']));
					$description=htmlspecialchars(strip_tags($_POST['description']));
					$sort=htmlspecialchars(strip_tags($_POST['sort']));					
					$insert=$products_options->create_product($connect, $catid, $name, $model, $options, $price, $description, $sort);
					if (!$insert){
						echo "Error!";
					} else {
						echo '<div class="left">Товар создан!</div>';
						$url->url('products_controller.php', 'Назад');
					}
				break;
				case 'edit_form':
					$form=new edit_product_form;
					$productid=htmlspecialchars(strip_tags($_POST['productid']));
					$select=$products_options->select_product_by_id($connect, $productid);
					if (!$select){
						echo "Error!";
				break;
					} else {
						$form->form_header('products_controller.php?param=edit');
						$form->form_body ($select);
						$form->form_footer();
					}
				break;
				case 'edit':
				
					$id=htmlspecialchars(strip_tags($_POST['id']));
					$catid=htmlspecialchars(strip_tags($_POST['catid']));
					$name=htmlspecialchars(strip_tags($_POST['name']));
					$model=htmlspecialchars(strip_tags($_POST['model']));
					$options=htmlspecialchars(strip_tags($_POST['options']));
					$price=htmlspecialchars(strip_tags($_POST['price']));
					$description=htmlspecialchars(strip_tags($_POST['description']));
					$sort=htmlspecialchars(strip_tags($_POST['sort']));				
					$update=$products_options->edit_product($connect, $id, $catid, $name, $model, $options, $price, $description, $sort);
					if (!$update){
						echo "Error!";
					} else {
						echo '<div class="left">Товар отредактирован!</div>';
						$url->url('products_controller.php', 'Назад');
					}
				break;				
				case 'addimg_form':
					$id=htmlspecialchars(strip_tags($_POST['productid']));
					$show=$products_options->show_img($connect, $id);
					$pic->pic($show,'products');
					$imgform->form('products_controller.php?param=addimg', $id, 'productid');
				break;
				case 'addimg':
					$id=htmlspecialchars(strip_tags($_POST['productid']));
					foreach ($_FILES["pictures"]["error"] as $key => $error) {
						if ($error == UPLOAD_ERR_OK) {
							$tmp_name = $_FILES["pictures"]["tmp_name"][$key];
							// basename() может спасти от атак на файловую систему;
							// может понадобиться дополнительная проверка/очистка имени файла
							$name = basename($_FILES["pictures"]["name"][$key]);
							$name=htmlspecialchars(strip_tags($name));
							if (preg_match("/\.(jpg|jpeg|png)$/", $name)) {
								$name=$id.$name;
								//echo $name;
								$addimage=$products_options->upload_img($connect, $id, $name);
								if (!$addimage){
									echo "Error!";
								} else {
									echo '<div class="container-fluid">Изображение сохранено</div>';									
								}
								move_uploaded_file($tmp_name, "data/$name");
							} else {
								echo '<div class="container-fluid">Неверный формат файла</div>';
							}
						}
					}
					$url->url('products_controller.php','Назад');
				break;
				case 'delete_img':
					$id=htmlspecialchars(strip_tags($_POST['imgid']));
					$delete=$products_options->delete_img($connect, $id);
					if (!$delete){
						echo "Error!";
					} else {
						echo '<div class="container-fluid">Картинка удалена</div>';
						$url->url('products_controller.php','Назад');
					}						
				break;
				
				case 'delete':
					$id=htmlspecialchars(strip_tags($_POST['productid']));
					$delete=$products_options->delete_product($connect, $id);
					if (!$delete){
						echo "Error!";
					} else {
						echo '<div class="left">Товар удален!</div>';
						$url->url('products_controller.php', 'Назад');
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