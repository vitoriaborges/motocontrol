<!DOCTYPE html>
<html lang="pt-br">
<head>
 
</head>
<body>
<?php 

  $idcliente;
  $nome;
  $endereco;
  $cep;
  $telefone;
  $cnpj;

  $op = "edita";
  if(isset($_SESSION['rows'])){
    
    $cli = $_SESSION['rows'][0];

    $idcliente = $cli['idcliente'];
    $nome = $cli['nome'];
    $endereco = $cli['endereco'];
    $cep = $cli['cep'];
    $telefone = $cli['telefone'];
    $cnpj = $cli['cnpj'];
    $op = "salva";
  }


  ?>
 <div class="container-fluid">

  <div class="row">
  <form action="controllers/ClienteController.php" method="post">
    <div class="col-md-4">
      <p><strong>ID</strong></p>
  	  <input type="text" id="name" name="name" value="<?php echo $idcliente ?>">
    </div>
	
  <div class="col-md-4">
      <p><strong>Endereço</strong></p>
      <input type="text" id="name" name="name" value="<?php echo $endereco ?>">
    </div>

	<div class="col-md-4">
      <p><strong>Telefone</strong></p>
  	  <input type="text" id="name" name="name" value="<?php echo $telefone ?>">
    </div>
	
	<div class="col-md-4">
      <p><strong>Nome</strong></p>
  	  <input type="text" id="name" name="name" value="<?php echo $nome ?>">
    </div>
	
	<div class="col-md-4">
      <p><strong>CEP</strong></p>
  	  <input type="text" id="name" name="name" value="<?php echo $cep ?>">
    </div>
	
    <div class="col-md-4">
      <p><strong>CNPJ</strong></p>
  	  <input type="text" id="name" name="name" value="<?php echo $cnpj ?>">
 </div>
 
 <hr />

</body>
</html>