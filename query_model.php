<?php
	class model{
		public function insertRequest ($connect, $name, $phone, $close){			
			$insert=$connect->prepare("insert into `call_requests` (name, phone, close) values ('$name', '$phone', '$close')");
			if (!$insert->execute()) {
				return 0;
			} else {
				return 1;
			}			
		}
		/*public function insertOrder ($connect, $name, $phone, $email, $address, $city, $state, $zip, $country, $category, $product, $qty, $price, $delivery, $pay, $close){			
			$insert=$connect->prepare("insert into `orders` (clientName, clientPhone, clientEmail, clientAddress, clientCity, clientState, clientZip, clientCountry, productCat, productName, productCol, productPrice, delivery, pay, status) 
								values ('$name', '$phone', '$email', '$address', '$city', '$state', '$zip', '$country', '$category', '$product', '$qty', '$price', '$delivery', '$pay', '$close')");
			if (!$insert->execute()) {
				return 0;
			} else {
				return 1;
			}			
		}*/	
/////////////////////		
		public function insertOrderDetails ($connect, $id, $name, $phone, $email, $address, $city, $state, $zip, $country, $category, $product, $qty, $price, $delivery, $pay, $close){			
			$insert=$connect->prepare("insert into `order_details` (id, clientName, clientPhone, clientEmail, clientAddress, clientCity, clientState, clientZip, clientCountry, productCat, productName, productCol, productPrice, delivery, pay, status) 
								values ('$id', '$name', '$phone', '$email', '$address', '$city', '$state', '$zip', '$country', '$category', '$product', '$qty', '$price', '$delivery', '$pay', '$close')");
			if (!$insert->execute()) {
				return 0;
			} else {
				return 1;
			}			
		}
		public function insertOrder ($connect, $name, $phone, $price, $close){			
			$insert=$connect->prepare("insert into `order` (clientName, clientPhone, productPrice, status) 
								values ('$name', '$phone', '$price', '$close')");
			if (!$insert->execute()) {
				return 0;
			} else {
				return 1;
			}			
		}		
		public function getOrderId ($connect){			
			$select=$connect->prepare("select `id` from `order` order by `id` desc limit 1");
			if (!$select->execute()) {
				return 0;
			} else {
				return $select;
			}			
		}		
/////////////////////		
		public function selectProductCat ($connect, $catid){
			$select=$connect->prepare("select * from `products` where `catId`='$catid'");
			if (!$select->execute())
				return 0;
			return $select;
		}		
		public function selectProductCatPag ($connect, $catid, $min, $max){
			$select=$connect->prepare("select * from `products` where `catId`='$catid' limit $min, $max");
			if (!$select->execute())
				return 0;
			return $select;
		}
		public function selectProductCatIndex ($connect){
			$select=$connect->prepare("select * from `products` order by rand() limit 4");
			if (!$select->execute())
				return 0;
			return $select;
		}		
		public function selectIndexProductPic ($connect, $productId){
			$select=$connect->prepare("select image from `images` where `parentId`='$productId' limit 1");
			if (!$select->execute())
				return 0;
			return $select;
		}
		public function selectProduct ($connect, $productId){
			$select=$connect->prepare("select * from `products` where `id`='$productId'");
			if (!$select->execute())
				return 0;
			return $select;
		}
		public function selectProductPic ($connect, $productId){
			$select=$connect->prepare("select image from `images` where `parentId`='$productId'");
			if (!$select->execute())
				return 0;
			return $select;
		}		
		public function selectCat ($connect){
			$select=$connect->prepare("select * from `categories`");
			if (!$select->execute())
				return 0;
			return $select;
		}		
		//метод вычисляет общую стоимость всех элементов корзины
		public function calculate_price($connect, $cart){			
			$price=0.0;
			if (is_array($cart)){
				foreach($cart as $id => $qty){
					$select=$connect->prepare("select price from products where id='".$id."'");
					if (!$select->execute()){
						return 0;
					} else {						
						$item_price=$select->fetchColumn();
						$price+=$item_price*$qty;
					}
				}
			}
			return $price;
		}		
		//метод подсчета общего количества элементов в корзине
		public function calculate_items ($cart){
			$items=0;
			if (is_array($cart)){
				foreach ($cart as $id => $qty){
					$items+=$qty;
				}
			}
			return $items;
		}				
	}
?>