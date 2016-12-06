<!DOCTYPE html>
<html>
<head>
	<title>Edita</title>
</head>
<body>


	<?php 

	$identregador;
	$nome;
	$rg;
	$cnh;
	$cpf;
	$dt_nascimento;
 		

	$op = "edita";
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

	<div class="form-group col-md-4">
    <form action="controllers/EntregadorController.php" method="post">
       <div class="input-group">
        <label for="name">Nome</label> 
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $nome; ?>" size="60" required autofocus>
      </div>

      <div class="input-group">
        <label for="rg">RG</label>
        <input type="text" class="form-control" id="rg" name="rg" value="<?php echo $rg ?>" required autofocus>
      </div>

      <div class="input-group">
        <label for="cnh">CNH</label>
        <input type="text" class="form-control" id="cnh" name="cnh" value="<?php echo $cnh ?>" required autofocus>
      </div>

      <div class="input-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $cpf ?>" required autofocus>
      </div>

      <label for="dt_nascimento">Data de Nascimento</label>
      <div class="input-group date col-md-2" id="datepicker">
        <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" value="<?php echo $dt_nascimento ?>" size="5" required autofocus>
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>

			<hr />

			<div class="input-group">
				<button  type="submit" value="Enviar" class="btn btn-primary">Salvar</button>
				<button type="reset" class="btn btn-default">Cancelar </button>
				<input type="hidden" id="op" name="op" value="upd"> 
				<input type="hidden" id="identregador" name="identregador" value="<?php echo $identregador ?>">
			</div>
			
		</form>
	</div>

</body>
</html>

