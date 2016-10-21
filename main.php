<html lang="en">
  <head>    
  <title>Tela Principal</title>
  
  <?php 

  	include ('header.php'); 
  	include ('checklogin.php'); 

  	?>

  </head>
   <body>
<?php

	include('menu.php');

	if(!($_SERVER['REQUEST_METHOD'] === 'POST')){

		if(!isset($_GET['menu'])){
			include('main.html');
		}else{			
			switch ($_GET['menu']){
				case 1:
					include('cadastroEntregadores.php');
					break;					
				case 2:
					include('cadastroCli.html');
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

  </body>
</html>