<!DOCTYPE html>
<html lang="pt-br">
<head>
 
</head>
<body>
<?php 

  $identregador;
  $nome;
  $rg;
  $cnh;
  $cpf;
  $dt_nascimento;
    
  $op = "mostra";
  if(isset($_SESSION['rows'])){

    $ent = $_SESSION['rows'][0];

    $identregador = $ent['identregador'];
    $nome = $ent['nome'];
    $rg = $ent['rg'];
    $cnh = $ent['cnh'];
    $cpf = $ent['cpf'];
    $dt_nascimento = $ent['dt_nascimento'];
    $op = "salva";

  }

  ?>
 <div class="container-fluid">

  <div class="row">
  <form action="controllers/ClienteController.php" method="post">
    <div class="col-md-4">
      <p><strong>ID</strong></p>
  	  <input type="text" id="name" name="name" value="<?php echo $identregador ?>">
    </div>
	
  <div class="col-md-4">
      <p><strong>RG</strong></p>
      <input type="text" id="rg" name="rg" value="<?php echo $rg ?>">
    </div>

	<div class="col-md-4">
      <p><strong>CPF</strong></p>
  	  <input type="text" id="cpf" name="cpf" value="<?php echo $cpf ?>">
    </div>
	
	<div class="col-md-4">
      <p><strong>Nome</strong></p>
  	  <input type="text" id="name" name="name" value="<?php echo $nome ?>">
    </div>
	
	<div class="col-md-4">
      <p><strong>CNH</strong></p>
  	  <input type="text" id="cnh" name="cnh" value="<?php echo $cnh ?>">
    </div>
	
    <div class="col-md-4">
      <p><strong>Data de Nascimento</strong></p>
  	  <input type="text" id="dt_nascimento" name="dt_nascimento" value="<?php echo $dt_nascimento ?>">
 </div>
 
 <hr />

</body>
</html>