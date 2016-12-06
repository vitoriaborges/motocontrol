<!DOCTYPE html>
<html>
<head>
	<title>Edita</title>
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

	<div class="form-group col-md-4">
		<form action="controllers/ClienteController.php" method="post">
			<div class="input-group">
				<label for="name">Nome</label>
				<input type="text" class="form-control" id="name" name="name" value="<?php echo $nome ?>" size="60" required autofocus>
			</div>

			<div class="input-group">
				<label for="endereco">Endereço</label>
				<input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $endereco ?>" placeholder="" required autofocus>
			</div>

			<div class="input-group">
				<label for="cep">Cep</label>
				<input type="text" class="form-control" id="cep" name="cep" value="<?php echo $cep ?>" placeholder="xxxxx-xx" required autofocus>
			</div>

			<div class="input-group">
				<label for="telefone">Telefone</label>
				<input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone ?>" placeholder="(xxx)xxxx-xxxx" required autofocus>
			</div>


			<div class="input-group">
				<label for="cnpj">Cnpj</label>
				<input type="text" class="form-control" id="cnpj" name="cnpj" value="<?php echo $cnpj ?>" placeholder="00.000.000/0000-00" required autofocus>
			</div>

			<hr />

			<!-- MODAL -->
			<div class="modal fade" id="insert-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="modalLabel">Mensagem de Confirmação</h4>
						</div>
						<div class="modal-body">Cliente atualizado!</div> 
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">OK</button>
							<input type="hidden" name="op" value="upd">
						</div>

					</div>
				</div>
			</div>

			<div class="input-group">
				<button  type="button" value="Enviar" class="btn btn-primary" data-toggle="modal" data-target="#insert-modal">Salvar</button>
				<button type="reset" class="btn btn-default">Cancelar </button>
				<input type="hidden" id="op" name="op" value="upd"> 
				<input type="hidden" id="idcliente" name="idcliente" value="<?php echo $idcliente ?>">
			</div>
			
		</form>
	</div>

</body>
</html>

