<?php 
	class orders_model{
		public function select_orders($connect){
			$select=$connect->prepare("select * from `order` where `status`='new' order by `id` desc");
			if (!$select->execute())
				return 0;
			return $select;
		}
		public function select_orders_c($connect){
			$select=$connect->prepare("select * from `order` where `status`='close' order by `id` desc");
			if (!$select->execute())
				return 0;
			return $select;
		}		
		public function select_order_details($connect, $id){
			$select=$connect->prepare("select * from `order_details` where `id`='$id'");
			if (!$select->execute())
				return 0;
			return $select;
		}		
		public function delete_order($connect, $orderid){
			$delete=$connect->prepare("delete from `orders` where `id`='$orderid'");
			if (!$delete->execute())
				return 0;
			return 1;
		}
		public function edit_order($connect, $orderid, $close){
			$update=$connect->prepare("update `order` set `status`='$close' where `id`='$orderid'");
			if (!$update->execute())
				return 0;
			return 1;
		}		
	}
?>