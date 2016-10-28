<?php 

require_once 'DbConn.php';

	class Login
	{
		private $user;
		private $password;
		private $nome;

		function getUser()
		{
			return $this->user;
		}

		function getNome()
		{
			return $this->nome;
		}

		function __construct($user, $password)
		{
			$this->user = $user;
			$this->password = $password;
			$this->nome = "";
		}
		
		function checkLogin()
		{
			$conn = new DbConn();
 			$c = $conn->getConn();
 			$list = $c->query("Select nome from Usuarios where login = '$this->user' and senha='".md5($this->password)."' limit 1");
 			if($list->num_rows == 0)
 			{
 				return false;
 			}else
 			{
			    $info = $list->fetch_row();
 				$this->nome = $info[0];
 				return true;
 			}
 			
		}
	}
 ?>