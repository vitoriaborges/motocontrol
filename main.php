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
					include('listagemEntregadores.php');
					break;
				case 3:
					include('cadastroCli.html');
					break;	
				case 4:
					include('listagemClientes.php');
					break;
				case 5:
					include('frequencia.html');
					break;
				case 6:
					include('editaCli.php');
					break;
				case 7:
					include('editaEnt.php');
					break;
				case 8:
					include('dadosCli.php');
					break;
				case 9:
					include('visuCli.php');
					break;
				case 10:
					include('visuEnt.php');
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