<head>
	<?php

	session_start();
	session_destroy();
	header("location:index.php?msgCode=3");

	?>
</head>