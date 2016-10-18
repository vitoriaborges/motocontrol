<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Tela Principal</title>

    <!-- Bootstrap core CSS -->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


  </head>

<?php
	include('menu.html');

	if(!($_SERVER['REQUEST_METHOD'] === 'POST')){

		if(!isset($_GET['menu'])){
			include('main.html');
		}else{			
			switch ($_GET['menu']){
				case 1:
					include('cadastroEntregadores.php');
					break;					
				case 2:
					echo 'É 2';
					break;	
				case 3:
					echo 'É 3';
					break;					
				default:
					echo 'Menu inválido!';
					break;
			}
		}

	}else{
		echo 'É post!';
	}

?>
</html>