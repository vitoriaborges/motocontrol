<head>
	<?php

	require_once '/model/Login.php';

	if(isset($_POST['user'])){
		$login = new Login($_POST['user'], $_POST['password']);
		if($login->checkLogin()){
			session_start();
			$_SESSION['name'] = $login->getNome();
			$_SESSION['user'] = $login->getUser();
			header("location:main.php");
		}else{
			session_destroy();
			header("location:index.php?msgCode=2");
		}
	}else{
		echo "Ocorreu um erro de autenticação!";
	}

	?>
</head>