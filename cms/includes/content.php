<?php
	class loginForm {
		public function form(){
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">    
    <title>Вход</title>
    <!-- Bootstrap core CSS -->
	<!--<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
	<link href="bootstrap-4.3.1-dist/css/style.css" rel="stylesheet">   -->
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap-4.3.1-dist/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-glyphicons.css">
  </head>
<body>
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<form class="form" method="post" action="index.php">
	<div class="form-group">
		<label for="login">Логин:</label>
		<input type="text" class="form-control" id="login" name="login" placeholder="Логин">    
	 </div>
	<div class="form-group">
		<label for="password">Пароль:</label>
		<input type="password" class="form-control" id="password" name="password" placeholder="Пароль">    
	</div>
	<center><button type="submit" class="btn btn-primary">Войти</button></center>
</form>
</div>
</div>
</body>
</html>
<?php
		}
	};
?>
<?php
	class header_content {
		
		public function content(){
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">    
    <title>Категории</title>
    <!-- Bootstrap core CSS -->
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
	<link href="bootstrap-4.3.1-dist/css/style.css" rel="stylesheet">    

  </head>
<body>
<?php
		}
	};
?>
<?php
	class navbar{
		public function nav(){
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">VerySimpleCMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Главная <!--<span class="sr-only">(current)</span>--></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="categories_controller.php">Категории</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="products_controller.php">Товары</a>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Заказы</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="orders_controller.php">Новые заказы</a>
          <a class="dropdown-item" href="orders_controller.php?param=closed_orders">Закрытые заказы</a>          
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Звонки</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="call_controller.php">Новые заявки</a>
          <a class="dropdown-item" href="call_controller.php?param=closed_orders">Закрытые заявки</a>          
        </div>
      </li>
	  <!--<li class="nav-item">
        <a class="nav-link" href="#">Пользователи (клиенты)</a>
      </li>-->
	  <li class="nav-item">
        <a class="nav-link" href="users_controller.php">Пользователи (системные)</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->      
    </ul>
    <!--<form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Search">
    </form>-->
	
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" href="logout.php">Выход</a>
		</li>
    </ul>
	
  </div>
</nav>

<?php
		}
	};
?>

<?php
	class body_content {
		public function index_admin(){
?>
<div class="left">
<h1>Добро пожаловать!</h1>
<p>Добро пожаловать в систему управления сайтом! Для управления нужным разделом перейдите по ссылке.</p>
</div>
<?php
		}
	};
?>

<?php
	class footer_content {
		public function content(){
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="bootstrap-4.3.1-dist/js/jquery-3.5.1.slim.min.js"><\/script>')</script><script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
<script>
function goBack() {
  window.history.back();
}
</script> 
</body>
</html>
<?php
		}
	};
?>
<?php
	class form {
		public function form_header($destination){
?>
<form class="form" method="post" action="<?php echo $destination;?>">
<?php
		}
		public function form_footer(){
?>			
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
<?php
		}
	};
?>

<?php
	class product_form extends form {
		public function form_body($result){
?>	
  <!--<div class="form-group">
    <label for="catid">Категория:</label>
    <input type="text" class="form-control" id="catname" name="catid" placeholder="Категория">    
  </div>
  <div class="form-group">
    <label for="catname">Уровень вложенности (только для 1-й родительской категории):</label>
    <input type="text" class="form-control" id="topcat" name="topcat" placeholder="Вложенность">    
  </div>-->
  <div class="form-group">
    <label for="catid">Категория:</label>
    <select class="form-control" id="catid" name="catid">
		<option value="" selected>Категория</option>
<?php
			//$result->execute();
			while ($row=$result->fetch()){
				if ($row['Top']>0){
					echo '<option value="'.$row["CatId"].'">'.$row['CatName'].'</option>';
				}
			}
?> 
	</select>
  </div>
  <div class="form-group">
    <label for="name">Наименование:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Наименование">    
  </div>
  <div class="form-group">
    <label for="model">Модель:</label>
    <input type="text" class="form-control" id="model" name="model" placeholder="Модель">    
  </div>
  <div class="form-group">
    <label for="options">Параметры:</label>
    <input type="text" class="form-control" id="options" name="options" placeholder="Параметры">    
  </div>
  <div class="form-group">
    <label for="price">Цена:</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Цена">    
  </div>
  <div class="form-group">
    <label for="description">Описание (макс 800 символов):</label>
    <textarea class="form-control" id="description" name="description" placeholder="Описание"></textarea>    
  </div>
  <div class="form-group">
    <label for="sort">Наличие:</label>
    <input type="text" class="form-control" id="sort" name="sort" placeholder="Наличие">    
  </div>  
<?php
		}
	};
?>

<?php
	class cat_form extends form {
		public function form_body($result){
?>	
  <div class="form-group">
    <label for="catname">Название категории:</label>
    <input type="text" class="form-control" id="catname" name="catname" placeholder="Название категории">    
  </div>
  <div class="form-group">
    <label for="catname">Уровень вложенности (только для 1-й родительской категории):</label>
    <input type="text" class="form-control" id="topcat" name="topcat" placeholder="Вложенность">    
  </div>
  <div class="form-group">
    <label for="rootcatname">Родительская категория:</label>
    <select class="form-control" id="rootcatname" name="rootcatname">
		<option value="" selected>Родительская категория</option>
<?php
			//$result->execute();
			while ($row=$result->fetch()){
				if ($row['Top']>0){
					echo '<option value="'.$row["CatId"].'">'.$row['CatName'].'</option>';
				}
			}
?> 
	</select>
  </div>
  <div class="form-group">
    <label for="catimgname">Ссылка на картинку для категории:</label>
    <input type="text" class="form-control" id="catimgname" name="catimgname" placeholder="Pic">    
  </div>
  <div class="form-group">
    <label for="catdescription">Описание категории (макс 800 символов):</label>
    <textarea class="form-control" id="catdescription" name="catdescription" placeholder="Описание"></textarea>    
  </div>  
<?php
		}
	};
?>

<?php
	class edit_product_form extends form {
		public function form_body($result){
			while ($row=$result->fetch()){
?>	
  <input type="hidden" name="id" value="<?php echo $row['id'];?>">
  <input type="hidden" id="catid" name="catid" value="<?php echo $row['catId'];?>">
  <div class="form-group">
    <label for="name">Наименование:</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'];?>">    
  </div>  
  <div class="form-group">
    <label for="model">Модель:</label>
    <input type="text" class="form-control" id="model" name="model" value="<?php echo $row['model'];?>">    
  </div>
  <div class="form-group">
    <label for="options">Параметры:</label>
    <input type="text" class="form-control" id="options" name="options" value="<?php echo $row['options'];?>">    
  </div>
  <div class="form-group">
    <label for="price">Цена:</label>
    <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price'];?>">    
  </div>
  <div class="form-group">
    <label for="description">Описание (макс 800 символов):</label>
    <textarea class="form-control" id="description" name="description"><?php echo $row['description'];?></textarea>    
  </div>  
  <div class="form-group">
    <label for="sort">Наличие:</label>
    <input type="text" class="form-control" id="sort" name="sort" value="<?php echo $row['sort'];?>">    
  </div>
<?php
			}
		}
	};
?>

<?php
	class edit_cat_form extends form {
		public function form_body($result){
			while ($row=$result->fetch()){
?>	
  <input type="hidden" name="catid" value="<?php echo $row['CatId'];?>">
  <div class="form-group">
    <label for="catname">Название категории:</label>
    <input type="text" class="form-control" id="catname" name="catname" value="<?php echo $row['CatName'];?>">    
  </div>
 
  <div class="form-group">
    <label for="catimgname">Ссылка на картинку для категории:</label>
    <input type="text" class="form-control" id="catimgname" name="catimgname" value="<?php echo $row['CatImg'];?>">    
  </div>
  <div class="form-group">
    <label for="catdescription">Описание категории (макс 800 символов):</label>
    <textarea class="form-control" id="catdescription" name="catdescription"><?php echo $row['CatDescription'];?></textarea>    
  </div>  
<?php
			}
		}
	};
?>
<?php
	class user_form extends form{
		public function form_body(){			
?>
  <div class="form-group">
    <label for="username">Имя пользователя:</label>
    <input type="text" class="form-control" id="username" name="username">    
  </div>
 
  <div class="form-group">
    <label for="password">Пароль:</label>
    <input type="password" class="form-control" id="password" name="password">    
  </div>
<?php
		}
	};
?>

<?php
	class image_form {
		public function form($destination, $id, $idname) {
?>

<div class="container-fluid">
	<div class="col-md-4">
	</br>
		<form class="form" method="post" enctype="multipart/form-data" action="<?php echo $destination;?>">
			<div class="form-group">
				<input type="hidden" class="form-control" name="<?php echo $idname;?>" value="<?php echo $id; ?>"/>
				<input multiple type="file" class="form-control" name="pictures[]" />
			</div>
			<button type="submit" class="btn btn-primary">Загрузить</button>
		</form>
	</div>
</div>	

<?php
		}
	};
?>
<?php 
	class view_pic {
		public function pic($result, $destination){
?>
<div class="container-fluid">
<!--<table class="table table-bordered table-hover">-->
	<!--<thead class="thead-inverse">
		<tr>
			<th>Id</th>
			<th>Марка</th>
		</tr>
	</thead>-->
<?php
			$i=0;
			while ($row=$result->fetch()){
				if ($i==0)
					echo '<br /><div class="row">';
?>
	<div class="col-md-2"><form method="post" action="<?php echo $destination;?>_controller.php?param=delete_img" class="form"><center><input type="hidden" name="imgid" value=<?php echo $row['id'];?>><img src="data/<?php echo $row['image'];?>" width="100px" height="75px"><br /><hr /><button type="submit" class="btn btn-sm btn-outline-danger">Удалить</button></center></form></div>
<?php
				if ($i==4) {
					echo '</div>';
					$i=0;
					continue;
				}
				$i++;
			}
?>
<!--</table>-->
</div>
<?php
		}
	};
?>

<?php
	class view_orders {
		
		public function options($param, $text){
?>
<div class="container-fluid">
	<a href="selection_controller.php?param=<?php echo $param;?>"><?php echo $text;?></a>
</div>
<?php
		}
		public function orders($result){
?>
<div class="container-fluid">
<table class="table table-bordered table-hover">
	<thead class="thead-inverse">
		<tr>
			<th>Id</th>
			<th>Клиент</th>
			<th>Телефон</th>
			<!--<th>E-mail</th>
			<th>Адрес</th>
			<th>Город</th>
			<th>Область</th>
			<th>Почтовый Индекс</th>
			<th>Страна</th>
			<th>Категория</th>
			<th>Товар</th>
			<th>Количество</th>-->						
			<th>Сумма заказа</th>
			<!--<th>Доставка</th>
			<th>Оплата</th>-->			
			<th colspan=2 align="center">Действия</th>
		</tr>
	</thead>
<?php
			while ($row=$result->fetch()){
				echo '<tr><td>'.$row['id'].'</td><td>'
								.$row['clientName'].'</td><td>'
								.$row['clientPhone'].'</td><td>'
								/*.$row['clientEmail'].'</td><td>'
								.$row['clientAddress'].'</td><td>'
								.$row['clientCity'].'</td><td>'
								.$row['clientState'].'</td><td>'
								.$row['clientZip'].'</td><td>'
								.$row['clientCountry'].'</td><td>'
								.$row['productCat'].'</td><td>'
								.$row['productName'].'</td><td>'
								.$row['productCol'].'</td><td>'*/																
								.$row['productPrice'].'</td><td>'
								/*.$row['delivery'].'</td><td>'
								.$row['pay'].'</td><td>'*/;
								echo '<form method="post" action="orders_controller.php?param=details"><input type="hidden" name="orderid" value='.$row['id'].'>
										<button class="btn btn-sm btn-outline-primary" type="submit">Просмотреть заказ</button>
									</form></td><td>';
								if ($row['status']=='new'){
									echo '<form method="post" action="orders_controller.php?param=close"><input type="hidden" name="orderid" value='.$row['id'].'>
										<button class="btn btn-sm btn-outline-primary" type="submit">Закрыть</button>
									</form></td></tr>'; 
									continue;
								}
								echo $row['status'].'</td></tr>';
			}
?>
</table>
</div>
<?php
		}
		public function order_details ($result){
			while ($row=$result->fetch()){
				echo '<div class="container-fluid">';
				echo 'id заказа: '.$row['id'].'<br />';
				echo 'Имя клиента: '.$row['clientName'].'<br />';
				echo 'Телефон клиента: '.$row['clientPhone'].'<br />';
				echo 'E-mail клиента: '.$row['clientEmail'].'<br />';
				echo 'Адрес клиента: '.$row['clientAddress'].'<br />';
				echo 'Город/село: '.$row['clientCity'].'<br />';
				echo 'Район: '.$row['clientState'].'<br />';
				echo 'Почтовый код: '.$row['clientZip'].'<br />';
				echo 'Страна: '.$row['clientCountry'].'<br />';
				echo 'Категория товара: '.$row['productCat'].'<br />';
				echo 'Наименование товара: '.$row['productName'].'<br />';
				echo 'Количество единиц товара: '.$row['productCol'].'<br />';
				echo 'Стоимость: '.$row['productPrice'].'<br />';
				echo 'Способ доставки: '.$row['delivery'].'<br />';
				echo 'Способ оплаты: '.$row['pay'].'<br />';
				$total_price+=$row['productPrice'];
				echo '<hr /></div>';
			}
			echo '<div class="container-fluid">Итого общая сумма заказа: '.$total_price.'<br /> <button class="btn btn-sm btn-outline-primary" onclick="goBack()">Go Back</button><br /><br /><br /></div>';
			
		}
	};
?>

<?php
	class view_calls {
		
		public function options($param, $text){
?>
<div class="container-fluid">
	<a href="selection_controller.php?param=<?php echo $param;?>"><?php echo $text;?></a>
</div>
<?php
		}
		public function calls($result){
?>
<div class="container-fluid">
<table class="table table-bordered table-hover">
	<thead class="thead-inverse">
		<tr>
			<th>Id</th>
			<th>Клиент</th>
			<th>Телефон</th>				
			<th colspan=2 align="center">Статус</th>
		</tr>
	</thead>
<?php
			while ($row=$result->fetch()){
				echo '<tr><td>'.$row['id'].'</td><td>'
								.$row['name'].'</td><td>'
								.$row['phone'].'</td><td>';								
								if ($row['close']=='new'){
									echo '<form method="post" action="call_controller.php?param=close"><input type="hidden" name="callid" value='.$row['id'].'>
										<button class="btn btn-sm btn-outline-primary" type="submit">Закрыть</button>
									</form></td></tr>'; 
									continue;
								}
								echo $row['close'].'</td></tr>';
			}
?>
</table>
</div>
<?php
		}
	};
?>

<?php
	class view_products {
		
		public function options(){
?>
<div class="left">
	<a href="products_controller.php?param=create_form">Создать товар</a>
</div>
<?php
		}
		public function products($result){
?>
<div class="left">
<table class="table table-bordered table-hover">
	<thead class="thead-inverse">
		<tr>
			<th>Id</th>
			<th>Id категории</th>
			<th>Наименование</th>
			<th>Модель</th>
			<th>Параметры</th>
			<th>Цена</th>
			<th>Наличие</th>
			<th colspan=3 align="center">Действия</th>
		</tr>
	</thead>
<?php
			while ($row=$result->fetch()){
				echo '<tr><td>'.$row['id'].
				'</td><td>'.$row['catId'].
				'</td><td>'.$row['name'].
				'</td><td>'.$row['model'].
				'</td><td>'.$row['options'].
				'</td><td>'.$row['price'].
				'</td><td>'.$row['sort'].
				'</td><td>
				<form method="post" action="products_controller.php?param=edit_form">
					<input type="hidden" name="productid" value='.$row['id'].'>
					<button class="btn btn-sm btn-outline-primary" type="submit">Редактировать</button>
				</form></td><td>'.
				
				'<form method="post" action="products_controller.php?param=addimg_form">
					<input type="hidden" name="productid" value='.$row['id'].'>
					<button class="btn btn-sm btn-outline-primary" type="submit">AddImg</button>
				</form></td><td>'.
				
				'<form method="post" action="products_controller.php?param=delete">
					<input type="hidden" name="productid" value='.$row['id'].'>
					<button class="btn btn-sm btn-outline-danger" type="submit">Удалить</button>
				</form></td></tr>';
			}
?>
</div>
</table>
<?php
		}
	};
?>

<?php
	class view_categories {
		
		public function options(){
?>
<div class="left">
	<a href="categories_controller.php?param=create_form">Создать категорию</a>
</div>
<?php
		}
		public function categories($result){
?>
<div class="left">
<table class="table table-bordered table-hover">
	<thead class="thead-inverse">
		<tr>
			<th>Id Категории</th>
			<th>Id Родительской категории</th>
			<th>Уровень вложенности</th>
			<th>Название</th>
			<th>Изображение</th>
			<th colspan=2 align="center">Действия</th>
		</tr>
	</thead>
<?php
			while ($row=$result->fetch()){
				echo '<tr><td>'.$row['CatId'].
				'</td><td>'.$row['RootCatId'].
				'</td><td>'.$row['Top'].
				'</td><td>'.$row['CatName'].
				'</td><td>'.$row['CatImg'].
				'</td><td>
				<form method="post" action="categories_controller.php?param=edit_form">
					<input type="hidden" name="catid" value='.$row['CatId'].'>
					<button class="btn btn-sm btn-outline-primary" type="submit">Редактировать</button>
				</form></td><td>'.
				'<form method="post" action="categories_controller.php?param=delete">
					<input type="hidden" name="catid" value='.$row['CatId'].'>
					<button class="btn btn-sm btn-outline-danger" type="submit">Удалить</button>
				</form></td></tr>';
			}
?>
</div>
</table>
<?php
		}
	};
?>
<?php
	class view_users {
		
		public function options(){
?>
<div class="left">
	<a href="users_controller.php?param=create_form">Создать пользователя</a>
</div>
<?php
		}
		public function users($result){
?>
<div class="left">
<table class="table table-bordered table-hover">
	<thead class="thead-inverse">
		<tr>
			<th>Id Пользователя</th>
			<th>Имя пользователя</th>
			<!--<th>Пароль</th>-->
			<th colspan=2 align="center">Действия</th>
		</tr>
	</thead>
<?php
			while ($row=$result->fetch()){
				echo '<tr><td>'.$row['id'].
				'</td><td>'.$row['name'].
				'</td><td>'.
				'<form method="post" action="users_controller.php?param=delete">
					<input type="hidden" name="userid" value='.$row['id'].'>
					<button class="btn btn-sm btn-outline-danger" type="submit">Удалить</button>
				</form></td></tr>';
			}
?>
</div>
</table>
<?php
		}
	};
?>
<?php
	class admin_url{
		public function url($destination, $urltext){
?>
<div class="left">
<a href="<?php echo $destination;?>"><?php echo $urltext;?></a>
</div>
<?php
		}
	};
?>
			