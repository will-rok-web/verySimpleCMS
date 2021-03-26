<?php
	class db_connect {
		private $hostname='localhost';
		private $username='root';
		private $password='';
		private $dbname='e-shop';
		private $usertable='users';

		private $connect;
		private $error;

		public function connect(){
			// set destenation (database connect)
			$destenation='mysql:host='.$this->hostname.';dbname='.$this->dbname;
			//set Options
			$options= array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			// Create New PDO instance
			try{
				$this->connect=new PDO($destenation, $this->username, $this->password, $options);				
				return $this->connect;
			}
			// Catch any errors here
			catch(PDOException $e){
				$this->error=$e->getMessage();
				die();
			}   
		}
	}
?>