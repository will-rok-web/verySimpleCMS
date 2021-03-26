<?php 
	class users_model{
		public function select_users($connect){
			$select=$connect->prepare("select * from `system_users`");
			if (!$select->execute())
				return 0;
			return $select;
		}
		public function create_user($connect, $username, $password){
			$insert=$connect->prepare("insert into `system_users` (name, pass) values ('$username', sha1('$password'))");
			if (!$insert->execute()) {
				return 0;
			} else {
				return 1;
			}			
		}
		public function delete_user($connect, $userid){
			$delete=$connect->prepare("delete from `system_users` where `id`='$userid'");
			if (!$delete->execute())
				return 0;
			return 1;
		}
	}
?>			