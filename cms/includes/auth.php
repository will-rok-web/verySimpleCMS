<?php
	require_once 'db_connect.php';
	class auth {
		
		public function login ($username, $password){
			$connect=new db_connect;
			$connect=$connect->connect();
			if (!$connect){
				return 0;
			}
				//$username=$connect->real_escape_string($username);
				//$password=$connect->real_escape_string($password);
			$result=$connect->prepare("select * from `system_users` where `name`='$username' and `pass`=sha1('$password')");
			if (!$result->execute()){
				return 0;
			}
			if ($result->rowCount()>0){
				return 1;
			}
			else{
				return 0;
			}		
		}
		public function check_admin_user(){
			if (isset($_SESSION['admin_user'])){
				return true;
			}
			else{
				return FALSE;
			}
		}
	}
		/*function change_password($username, $old_password, $new_password){
			if (login($username, $old_password)){
				if (!($conn=db_connect())){
					return FALSE;
				}
				$query="update admin set password=sha1('$new_password') where username='$username'";
				$result=$conn->query($query);
				if (!$result){
					return FALSE;
				}
				else{
					return TRUE;
				}
			}
			else {
				return FALSE;
			}
		}*/
?>