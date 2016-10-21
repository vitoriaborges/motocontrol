<head>
	<?php

	$validUser = "anderson";
	$validPassword = "111";
	$name = "Anderson Padilha";

	if(isset($_POST['user'])){
		if((strcasecmp($_POST['user'], $validUser) == 0) and (strcasecmp($_POST['password'], $validPassword) == 0)){
			session_start();
			$_SESSION['name'] = $name;
			$_SESSION['user'] = $validUser;
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