<?php
	

	class MySql
	{
		private $pdo;
		
		public static function connect(){
			if(!isset($pdo)){
				$pdo = new PDO('CHANGE_ME',CHANGE_ME,'CHANGE_ME');
			}

			return $pdo;
		}
	}
?>
