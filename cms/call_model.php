<?php 
	class call_model{
		public function select_calls($connect){
			$select=$connect->prepare("select * from `call_requests` where `close`='new' order by `id` desc");
			if (!$select->execute())
				return 0;
			return $select;
		}
		public function select_calls_c($connect){
			$select=$connect->prepare("select * from `call_requests` where `close`='close' order by `id` desc");
			if (!$select->execute())
				return 0;
			return $select;
		}		
		public function delete_call($connect, $callid){
			$delete=$connect->prepare("delete from `call_requests` where `id`='$callid'");
			if (!$delete->execute())
				return 0;
			return 1;
		}
		public function edit_call($connect, $callid, $close){
			$update=$connect->prepare("update `call_requests` set `close`='$close' where `id`='$callid'");
			if (!$update->execute())
				return 0;
			return 1;
		}		
	}
?>