<head>
	<?php

	if(!isset($_SESSION)) {
 	  session_start();
 	}

	if(!isset($_SESSION['user'])){
			header("location:index.php?msgCode=1");
	}

	?>
</head>