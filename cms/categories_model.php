<?php 
	class categories_model{
		//Выбор категории
		public function select_cat($connect){
			//Выбрать все из таблицы категорий
			$select=$connect->prepare("select * from `categories`");
			if (!$select->execute())
				return 0;
			return $select;
		}
		//Возвращает результат выбора из таблицы категорий в виде массива, этот метод нужен для построения меню
		public function cat_tree($connect){			
			$select=$connect->prepare("select * from `categories`");
			if (!$select->execute()){
				return 0;
			} else {
				//Возвращает массив содержащий все записи из таблицы categories
				$result = $select->fetchAll(PDO::FETCH_OBJ);
				//Перебор массива (делает из одномерного массива - двумерный, в котором, ключ - RootCatId (id родительской категории))
				//$return = array();
				foreach ($result as $value) { //Обходим массив
					$return[$value->RootCatId][] = $value;
				}
				return $return;
			}
		}
		
		//Выбор родительской категории
		public function select_root_cat($connect){
			//Выбрать все из таблицы категорий, где уровень вложенности больше 0
			$select=$connect->prepare("select * from `categories` where `Top`>0");
			if (!$select->execute())
				return 0;
			return $select;
		}
		//Выбор категории по ее id
		public function select_cat_by_id($connect, $catid){
			$select=$connect->prepare("select * from `categories` where `CatId`='$catid'");
			if (!$select->execute())
				return 0;
			return $select;
		}
		/*Создание категории.Если при создании не передать уровень вложенности для самой первой родительской категории, то вернет ошибку
		Если при создании подкатегории не передать родительскую категорию, то вернет ошибку*/
		public function create_cat($connect, $rootcatid='', $cattop='', $catname, $catimg='', $catdescription=''){
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
		}
		//Редактирование категории
		public function edit_cat($connect, $catid, $catname, $catimg='', $catdescription=''){
			$update=$connect->prepare("update `categories` set `CatName`='$catname', `CatImg`='$catimg', `CatDescription`='$catdescription' where `CatId`='$catid'");
			if (!$update->execute())
				return 0;
			return 1;
		}//Удаление категории
		public function delete_cat($connect, $catid){
			//получить все подктегории, для данной категории
			$getsubcat=$connect->prepare("select `CatId` from `categories` where `RootCatId`='$catid'");
			$getsubcat->execute();
			//если категория имеет подкатегории, то ее нельзя удалить
			if ($getsubcat->fetch()!=0){
				return 0;
			}
			//если категория подкатегорий не имеет, то удалить ее
			else {
				$delete=$connect->prepare("delete from `categories` where `CatId`='$catid'");
				if (!$delete->execute())
					return 0;
				return 1;
			}	
		}
	}
?>			