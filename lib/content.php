<?php
	class header_content {
		
		public function content($title, $description, $keywords){
?>
<!--<!doctype html>-->
<!DOCTYPE html>
<html lang="ru">
  <head>
	<title><?php echo $title;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $description;?>">
	<meta name="keywords" content="<?php echo $keywords;?>">    	
    <!-- Bootstrap core CSS -->
	<!--<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
	<link href="bootstrap-4.3.1-dist/css/style.css" rel="stylesheet">   -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-glyphicons.css">	

  </head>
<body>
<?php
		}
	};
?>
<?php
	class navbar {
		public function nav($result){			
?>
	<div class="fixed-top">
	<div class="container-fluid">
	<div class="row rowCustom">
	<div class="col-sm d-none d-md-block">
		<p align="left">
			<a href="#">
				<img src="img\ico\youtube_button.png" width="17px" height="17px">
			</a>&nbsp<a href="#">
				<img src="img\ico\instagram_blue.png" width="17px" height="17px">
			</a>&nbsp<a href="#">
				<img src="img\ico\vk_eng.png" width="17px" height= "17px">
			</a>&nbsp<a href="#">
				<img src="img\ico\facebook.png" width="17px" height= "17px">
			</a>
		</p>
	</div>
	<div class="col-sm">
		<p align="right" style="font-family:arial; font-size:11pt;">
			<a href="#">
				<img src="img\ico\skype.png" width="17px" height= "17px">
			</a>&nbsp<a href="#">
				<img src="img\ico\whatsapp.png" width="17px" height= "17px">
			</a>&nbsp<a href="#">
				<img src="img\ico\viber.png" width="17px" height= "17px">
			</a>&nbsp<a href="#">
				<img src="img\ico\telegram.png" width="17px" height= "17px">
			</a>&nbsp<img src="img\ico\phone.png" width="17px" height= "17px">&nbsp<a href="tel:+000000000000">+000-00-000-00-00
			</a>&nbsp<img src="img\ico\phone.png" width="17px" height= "17px">&nbsp<a href="tel:+000000000000">+000-00-000-00-00
			</a>
		</p>
	</div>
	</div>
	</div>
	<!--<nav class="navbar navbar-expand-md navbar-dark">
		<a class="navbar-brand" href="index.php"><span style="font-size:14pt; font-family:Impact">Company Name</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom" aria-controls="#navbarCustom" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCustom">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Index</a>					
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdownCustom" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
					<div class="dropdown-menu" aria-labelledby="dropdownCustom">
						<a class="dropdown-item" href="#">Category_1</a>
						<a class="dropdown-item" href="#">Category_2</a>
						<a class="dropdown-item" href="#">Category_3</a>
					</div>
				</li>				
				<li class="nav-item">
					<a class="nav-link" href="#">Contact us</a>					
				</li>    
	</nav>-->
	<nav class="navbar navbar-expand-md navbar-dark">
		<a class="navbar-brand" href="index.php"><span style="font-size:14pt; font-family:Impact">Company Name</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom" aria-controls="#navbarCustom" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCustom">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Главная</a>					
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdownCustom" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Каталог</a>
					<div class="dropdown-menu" aria-labelledby="dropdownCustom">
					<?php 
						while ($row=$result->fetch()){
							echo '<a class="dropdown-item" href="autocat.php?catId='.$row["CatId"].'">'.$row["CatName"].'</a>';
						}
					?>
						<!--<a class="dropdown-item" href="#">Категория_1</a>
						<a class="dropdown-item" href="#">Категория_2</a>
						<a class="dropdown-item" href="#">Категория_3</a>-->
					</div>
				</li>				
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Контакты</a>					
				</li>				
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item float-right">
					<a class="nav-link" href="card.php"><img src="img\ico\shopping-card.png" width="20px" height= "20px">&nbspКорзина</a>
				</li>
			</ul>					
	</nav>
	</div>	
<div class="imgWrap">	
	<img src="img/slide1.jpg" width="100%">
	<div class="d-none d-md-block">
		<p style="font-family:Arial Black; font-size:20pt">Заказать звонок</br><!--<a class="btn btn-primary" href="#" role="button">Подобрать технику</a>--><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Заказать звонок
</button></p>		
	</div>
</div>
<?php
		}
	};
?>

<?php
	class body {
		public function howWork(){			
?>
	<center><h1>Как мы работаем?</h1></center>	
	<div class="card-deck">    
		<div class="card">
			<div class="card-body">
				<ul>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>												
				</ul>
			</div>
			</div>    
		<div class="card">
			<div class="card-body">
				<ul>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>																	
				</ul>
			</div>
		</div>   
		<div class="card">
			<div class="card-body">
				<ul>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>
					<li>Некоторое описание</li>																
				</ul>
			</div>
		</div>
	</div>
	</br><center><button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModal">Заказать звонок</button><br /><br /></center>
<?php
		}		
		public function containerFluid ($arg){
			if ($arg=="start"){
?>
<div class="container-fluid">
<?php
			} else {				
?>
</div>
<?php
			}
		}
	};
?>

<?php 
	class index extends body {
		public function text(){
?>
	<center><button class="btn btn-primary d-md-none bMargin" data-toggle="modal" data-target="#exampleModal">Подобрать технику</button></center>

	<center><h1>Описание компании</h1></center>
	<p>
		Описание компании Описание компании Описание компании Описание компании Описание компании Описание компании Описание компании	
	</p>
	<center><h1>Наши партнеры</h1></center>
	<p>Мы работаем с такими партнерами как:</p>
	
	<div class="card-deck">
		<div class="card">
			<div class="card-body">
				<center><img class="imgIn" src="img/partner.png"></center>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<center><img class="imgIn" src="img/partner.png"></center>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<center><img class="imgIn" src="img/partner.png"></center>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<center><img class="imgIn" src="img/partner.png"></center>
			</div>
		</div>
	</div>
<?php
		}		
		public function ourWork($result, $head, $connect, $options, $controller, $href){			
?>	
	<center><h1><?php echo $head;?></h1></center>
	<div class="card-deck">
<?php
			$i=0;
			while ($row=$result->fetch()){
				if ($i==4){
					echo '</div><br /><div class="card-deck">';
					$i=0;
				}
?>		
		<div class="col-md-3">
		<div class="card">			
			<img class="card-img-top" src="cms\data\<?php $picres=$options->$controller($connect, $row['id']); $picres=$picres->fetch(); echo $picres['image'];?>" width="240px" height="180px">
			<div class="card-body">
				<p>
					<center><b><?php echo $row['name'].' '.$row['model'];?></b></center>
					Характеристика: <?php echo $row['options'];?></br>															
				</p>
			</div>
			<div class="card-footer">
				<center><b>Стоимость: <?php echo $row['price'];?> usd</b><br><a class="btn btn-danger" href="<?php echo $href;?>?id=<?php echo $row['id'];?>" role="button">Подробнее</a></center>
			</div>
		</div>
		</div>		
<?php
				$i++;				
			}
?>
	</div>
	<br />	
<?php
		}
	};
?>
<?php 
	class productCat extends body {
		public function content($result, $head, $connect, $options, $controller, $href){			
?>

	<center><button class="btn btn-primary d-md-none bMargin" data-toggle="modal" data-target="#exampleModal">Заказать звонок</button></center>
	<center><h1><?php echo $head;?></h1></center>
	<div class="card-deck">
<?php
			$i=0;
			while ($row=$result->fetch()){
				if ($i==4){
					echo '</div><br /><div class="card-deck">';
					$i=0;
				}
?>		
		<div class="col-md-3">
		<div class="card">			
			<img class="card-img-top" src="cms\data\<?php $picres=$options->$controller($connect, $row['id']); $picres=$picres->fetch(); echo $picres['image'];?>" width="240px" height="180px">
			<div class="card-body">
				<p>
					<center><b><?php echo $row['name'].' '.$row['model'];?></b></center>
					Характеристика: <?php echo $row['options'];?></br>															
				</p>
			</div>
			<div class="card-footer">
				<center><b>Стоимость: <?php echo $row['price'];?> usd</b><br><a class="btn btn-danger" href="<?php echo $href;?>?id=<?php echo $row['id'];?>" role="button">Подробнее</a></center>
			</div>
		</div>
		</div>	
<?php
				$i++;				
			}
?>
	</div>
<?php			
		}
	};
?>
<?php 
	class card extends body{
		public function content($head, $connect, $options, $cart, $change=true){
?>
	<center><button class="btn btn-primary d-md-none bMargin" data-toggle="modal" data-target="#exampleModal">Заказать звонок</button></center>
	<center><h1><?php echo $head;?></h1></center>
	<form class="form" method="post" action="card.php">
	<div class="row">
		<div class="col-sm-3">
			<h3>Товар</h3>
		</div>
		<div class="col-sm-3">
			<h3>Цена</h3>
		</div>
		<div class="col-sm-3">
			<h3>Количество</h3>
		</div>
		<div class="col-sm-3">
			<h3>Всего</h3>
		</div>
	</div>
	<hr />
	<?php 
			foreach ($cart as $id => $qty) {
				$product=$options->selectProduct($connect, $id);
				$product=$product->fetch();
	?>
	<div class="row">
		<div class="col-sm-3">
			<h5><?php echo '<a href="itemauto.php?id='.$product['id'].'">'.$product['name'].' '.$product['model'].'</a>';?></h5>
		</div>
		<div class="col-sm-3">
			<h5><?php echo number_format($product['price'], 2);?></h5>
		</div>
		<div class="col-sm-3">
			<h5><?php if ($change==true) {echo '<div class="col-sm-3"><input class="form-control" type="text" name="'.$id.'" value="'.$qty.'" size="3"></div>';} else {echo $qty;}?></h5>
		</div>
		<div class="col-sm-3">
			<h5><?php echo number_format($product['price']*$qty,2);?></h5>
		</div>
	</div>
	<hr />
	<?php	
			}
	?>
	<div class="row">
		<div class="col-sm-6"></div>
		<div class="col-sm-3"><?php echo '<h5>Всего товаров: '.$_SESSION['items'].'</h5>';?></div>
		<div class="col-sm-3"><?php echo '<h5>На сумму: '.number_format($_SESSION['total_price'], 2).'</h5>';?></div>
	</div>
	<hr />
	<?php
			if ($change == true) {
	?>
	<div class="row">
		<div class="col-sm-9"><input type="hidden" name="save" value="true"/></div>
		<div class="col-sm-3"><button type="submit" class="btn btn-sm btn-success">Сохранить изменения</button></div>
	</div>
	<hr />
	<?php
			}
	?>
	</form>
<?php
		}
	};
?>		

<?php
	class checkoutForm extends body{
		public function checkout($head){
?>
			<center><button class="btn btn-primary d-md-none bMargin" data-toggle="modal" data-target="#exampleModal">Заказать звонок</button></center>
			<center><h1><?php echo $head;?></h1></center>
			<br />
			<form class="form" action="purchase.php" method="post">
				<div class="row">
					<div class="col-sm-3">
						<h4>ФИО</h4>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="name" value="" maxlength=40 size=40 required>
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-3">
						<h4>Номер телефона</h4>
					</div>
					<div class="col-sm-4">
						<input type="tel" class="form-control" name="phone" required pattern="[0-9_-]{9}" maxlength="9" title="Формат: 29 999 99 99">
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-3">
						<h4>E-mail</h4>
					</div>
					<div class="col-sm-4">
						<input type="email" class="form-control" name="email" value="" maxlength=40 size=40 required>
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-3">
						<h4>Адрес</h4>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="address" value="" maxlength=40 size=40 required>
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-3">
						<h4>Город/село</h4>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="city" value="" maxlength=40 size=40 required>
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-3">
						<h4>Область</h4>
					</div><br />
					<div class="col-sm-4">
						<input type="text" class="form-control" name="state" value="" maxlength=40 size=40 required>
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-3">
						<h4>Почтовый индекс</h4>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="zip" value="" maxlength=40 size=40 required>
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-3">
						<h4>Страна</h4>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="country" value="" maxlength=40 size=40 required>
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-3">
						<h4>Способ доставки</h4>
					</div>
					<div class="col-sm-4">
						<select class="form-control" name="delivery" id="delivery">
							<option default selected value="Курьер">Курьером</option>
							<option value="Почта">Почтовая доставка</option>
						</select>
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-3">
						<h4>Способ оплаты</h4>
					</div>
					<div class="col-sm-4">
						<select class="form-control" name="pay" id="pay" disabled>
							<option default selected value="Наличными">Наличными</option>
							<option value="Почтовый платеж">Почтовый платеж</option>
						</select>
						<input type="hidden" name="hpay" id="hpay" value="Наличными" />
					</div>
				</div>
			 <br />  
        <h6>Пожалуйста, щелкните на кнопке "Купить" для того, чтобы подтвердить покупку,
          либо <a href="index.php">Продолжите покупки</a></h6>		
		<center>
			<button type="submit" class="btn btn-lg btn-success">Купить</button>				
		</center><br />      
  </form>  
<?php			
		}
	};
?>
<?php 
	class itemProduct extends body {
		public function content($res, $respic){
?>
	<center><button class="btn btn-primary d-md-none bMargin" data-toggle="modal" data-target="#exampleModal">Подобрать технику</button></center>
<?php
			while ($row=$res->fetch()){
?>
	<center><h1><?php echo $row['name'].' '.$row['model'];?></h1></center>
	<div class="row">
		<div class="col-md-6">
			<div id="gallery">
				<div id="panel">				
					<img id="largeImage" width="530px" height="auto" src="" />					
				</div>				
				<div id="thumbs">
				<?php 
				$i=0;
				while ($rowpic=$respic->fetch()){
				?>
					<img id="img<?php echo $i;?>" src="cms/data/<?php echo $rowpic['image'];?>" width="100px" height="75px" />
				<?php
					$i++;
				}
				?>					
				</div>
			</div>				
		</div>
		<div class="col-md-6">
			<p><b>Марка:</b> <?php echo $row['name'];?></p>
			<p><b>Модель:</b> <?php echo $row['model'];?></p>
			<p><b>Параметры:</b> <?php echo $row['options'];?></p>			
			<p><b>Цена:</b> <?php echo $row['price'];?> usd</p>
			<p><b>Описание:</b> <?php echo $row['description'];?></p>
			<form method="get" action="card.php">
				<button type="submit" class="btn btn-danger" name="new" value="<?php echo $row['id'];?>">В корзину</button>
			</form>
		</div>
	</div>
			<?php
			}
			?>
<?php
		}
	};
?>
<?php
	class contacts extends body{
		public function content(){
?>
<center><h1>Контакты</h1></center>
<h5>Некоторое описание</h5>
<h5>Некоторое описание</h5>
<h5>Некоторое описание</h5>
<h5>Некоторое описание<br />
<h5>Телефоны<br />
<h5><img src="img\ico\phone.png" width="17px" height= "17px"> +000-00-000-00-00<br />
	<img src="img\ico\phone.png" width="17px" height= "17px"> +000-00-000-00-00</h5>
<h5>Мессенджеры: <a href="#"><img src="img\ico\skype.png" width="45px" height= "45px"></a>
								&nbsp<a href="#"><img src="img\ico\whatsapp.png" width="45px" height= "45px"></a>
								&nbsp<a href="#"><img src="img\ico\viber.png" width="45px" height= "45px"></a>
								&nbsp<a href="#"><img src="img\ico\telegram.png" width="45px" height= "45px"></a></br>
</h5>
<h5>Мы на карте</h5>
<div></div>
<?php
		}
	};
?>
<?php
	class plug extends body{
		public function inwork(){
			echo '<center><img src="img/inwork.png"></center>';
		}
		public function err(){
			echo '<center><img src="img/err.png"></center>';
		}
			
	};
?>
<?php
	class footer {
		
		public function content(){
?>
<!-- Modal -->
<form id="mform">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">		
		<h6>Введите имя и номер телефона и мы Вам перезвоним:</h6>
		<div class="form-row">
			<div class="col-md-6">
				<input type="text" class="form-control" required id="fio" placeholder="Ваше имя">
			</div>
			<div class="col-md-6">
				<!--<input type="text" class="form-control" placeholder="Ваш телефон">-->
				<input type="tel" class="form-control" required pattern="[0-9_-]{9}" maxlength="9" title="Формат: 29 999 99 99" placeholder="Номер телефона (9 цифр)" id="userPhone" />
			</div>
		</div>
      </div>
	  	
      <div class="modal-footer">
	  
		<div class="alert alert-success alert-dismissible" id="footerAlertSuccess">
			<button type="button" class="close" id="close" data-dismiss="modal">×</button>
			<strong>Ваша заявка приянята!</strong> Ваша заявка принята, в ближайшее время наши менеджеры свяжутся с Вами.
		</div>
		<div class="alert alert-danger alert-dismissible" id="footerAlertDanger">
			<button type="button" class="close" id="close" data-dismiss="modal">×</button>
			<strong>Ошибка!</strong> Возникли технические проблемы, обновите страницу и попробуйте позже.
		</div>
		<input type="hidden" id="smCheck" name="smCheck" value="" />
        <button type="button" class="btn btn-secondary" id="modalCancel" data-dismiss="modal">Отмена</button>
        <button type="submit" class="btn btn-primary" id="modalSend" onclick="$('#smCheck').val('nospam');">Отправить</button>
      </div>
    </div>
  </div>
</div>
</form>
<div class="container-fluid">
<div class="row footerCustom">
	<div class="col-md">
		Company Name</br>
		Some info
	</div>
	<div class="col-md">
		Write us</br>
		<a href="#">
			<img src="img\ico\skype.png" width="30px" height= "30px">
		</a>&nbsp<a href="#">
			<img src="img\ico\whatsapp.png" width="30px" height= "30px">
		</a>&nbsp<a href="#">
			<img src="img\ico\viber.png" width="30px" height= "30px">
		</a>&nbsp<a href="#">
			<img src="img\ico\telegram.png" width="30px" height= "30px">
		</a></br>
		Follow us:</br>
		<a href="#">
			<img src="img\ico\youtube_text.png" width="30px" height= "30px">
		</a>&nbsp<a href="#">
			<img src="img\ico\instagram_blue.png" width="30px" height= "30px">
		</a>&nbsp<a href="#">
			<img src="img\ico\vk_eng.png" width="30px" height= "30px">
		</a>&nbsp<a href="#">
			<img src="img\ico\facebook.png" width="30px" height= "30px">
		</a></br></br>
	</div>
	<div class="col-md">
		Contact:</br>
		+000-00-000-00-00</br>
		+000-00-000-00-00
	</div>
</div>
</div>	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-3.5.1.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>-->
	<script type="text/javascript">
	<!--
	
		$('#thumbs').delegate('img','click', function(){
			$('#largeImage').attr('src',$(this).attr('src'));			
		});			
		
		$("#delivery").change(function () {
			var delivery=$(this).val();
			if (delivery=='Курьер'){
				$('#pay').val('Наличными');
				$('#hpay').val('Наличными');
			} else {
				$('#pay').val('Почтовый платеж');
				$('#hpay').val('Почтовый платеж');
			}			
		});
		
		$(document).ready(function(){
			$('#largeImage').attr('src',$('#img0').attr('src'));
			$("#footerAlertSuccess").hide();
			$("#footerAlertDanger").hide();
		
			if (typeof ($("#mform").get(0))!=='undefined'){
				$("#mform").get(0).reset();
			}		
			
			$("#mform").submit(function(e) {
				e.preventDefault();				
				var name=$('#fio').val();
				var userPhone=$('#userPhone').val();
				var smCheck=$('#smCheck').val();
				var dest='select';				
				$.ajax({
					url: "query.php",
					type: "POST",
					data: {name: name, userPhone: userPhone, smCheck: smCheck, dest: dest},
					dataType: "text",					
					success: function (answer){
						if (answer=='0'){
							$("#footerAlertDanger").show();
							$("#modalCancel").hide();
							$("#modalSend").hide();							
						} else {
							$("#mform").get(0).reset();
							$("#footerAlertSuccess").show();							
							$("#modalCancel").hide();
							$("#modalSend").hide();							
						}						
					},
					error: function (XMLHttpRequest, textStatus, errorThrown){
						$("#footerAlertDanger").show();						
					}
				});
			});
		});
	-->
	</script>
</body>
</html>
<?php
		}
	};
?>