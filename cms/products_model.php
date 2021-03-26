<?php 
	class products_model{
		//Выбор товаров
		public function select_products($connect){
			//Выбрать все из таблицы товаров
			$select=$connect->prepare("select * from `products`");
			if (!$select->execute())
				return 0;
			return $select;
		}		
		//Выбор категории товара
		public function select_product_cat($connect){
			//Выбрать все из таблицы категорий
			//$where=-1;
			$select=$connect->prepare("select * from `categories` where `Top`=1");
			if (!$select->execute())
				return 0;
			return $select;
		}
		//Выбор товара по его id
		public function select_product_by_id($connect, $productid){
			$select=$connect->prepare("select * from `products` where `id`='$productid'");
			if (!$select->execute())
				return 0;
			return $select;
		}
		/*Создание категории.Если при создании не передать уровень вложенности для самой первой родительской категории, то вернет ошибку
		Если при создании подкатегории не передать родительскую категорию, то вернет ошибку*/
		/*public function create_cat($connect, $rootcatid='', $cattop='', $catname, $catimg='', $catdescription=''){
			if ($rootcatid=='' && $cattop==''){
				return 0;
			}
			//Если указана родительская категория			
			if ($rootcatid!=''){
				//то получить уровень вложенности для данной подкатегории
				$gettop=$connect->prepare("select `Top` from `categories` where `CatId`='$rootcatid'");
				if (!$gettop->execute()){
					return 0;
				} else {
					$row=$gettop->fetch();
					//путем того, что отнять от уровня вложенности родительской категории 1
					$cattop=$row['Top']-1;	
				}
			}
			//создать категорию
			$insert=$connect->prepare("insert into `categories` (RootCatId, Top, CatName, CatImg, CatDescription) values ('$rootcatid', '$cattop', '$catname', '$catimg', '$catdescription')");
			if (!$insert->execute()) {
				return 0;
			} else {
				return 1;
			}			
		}*/
		public function create_product($connect, $catid, $name, $model, $options, $price, $description, $sort){			
			//создать товар
			$insert=$connect->prepare("insert into `products` (catid, name, model, options, price, description, sort) values ('$catid', '$name', '$model', '$options', '$price', '$description', '$sort')");
			if (!$insert->execute()) {
				return 0;
			} else {
				return 1;
			}
		}			
		//Редактирование товара
		public function edit_product($connect, $productid, $catid, $name, $model, $options, $price, $description, $sort){
			$update=$connect->prepare("update `products` set `catid`='$catid', `name`='$name', `model`='$model', `options`='$options', `price`='$price', `description`='$description', `sort`='$sort' where `id`='$productid'");
			if (!$update->execute())
				return 0;
			return 1;
		}//Удаление товара
		public function delete_product($connect, $productid){			
			/*$delete=$connect->prepare("delete from `products` where `id`='$productid'");
			if (!$delete->execute())
				return 0;
			return 1;*/	

			$select=$connect->prepare("select * from `images` where `parentId`='$productid'");
			if (!$select->execute()) {
				return 0;
				exit;
			}
			
			if ($select->rowCount()>0){
				$delete=$connect->prepare("DELETE products, images FROM products INNER JOIN images WHERE images.parentId=products.id AND products.id='$productid'");//("delete from `cars` where `id`='$carid'");
			} else {
				$delete=$connect->prepare("delete from `products` where `id`='$productid'");
			}
			if (!$delete->execute())
				return 0;
			return 1;
			
		}
		
		public function upload_img($connect, $id, $name){
			/*$select=$connect->prepare("select `id` from `cars` where `id`='$id'");
			if (!$select->execute()){
				return 0;
				exit;
			}
			while ($row=$select->fetch()){
				$parentId=$row["id"];				
			}*/
			//$parentId=$id;
			$insert=$connect->prepare("insert into `images` (parentId, image) values ('$id', '$name')");
			if (!$insert->execute()) {
				return 0;
			} else {
				//$select=$connect->prepare("select `id` from `cars` where )
				return 1;
			}		
		}
		public function show_img ($connect, $productid){
			$select=$connect->prepare("select * from `images` where `parentId`='$productid'");
			if (!$select->execute())
				return 0;
			return $select;
		}
		public function delete_img ($connect, $imgid){
			$delete=$connect->prepare("delete from `images` where `id`='$imgid'");
			if (!$delete->execute())
				return 0;
			return 1;
		}
		
	}
?>			