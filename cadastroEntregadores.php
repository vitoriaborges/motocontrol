<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include ('checklogin.php'); ?>

 <title>Cadastro de Entregadores</title>
         <script type="text/javascript">
            $(function () {
                $('#datepicker').datetimepicker();
            });
        </script>
</head>
<body>

<?php 
  if(isset($_GET['ident'])){
    // busca o cliente pelo ID
  }

?>

  <div class="form-group col-md-4">
    <form action="controllers/EntregadorController.php" method="post">
       <div class="input-group">
        <label for="name">Nome</label> 
        <input type="text" class="form-control" id="name" name="name" size="60" required autofocus>
      </div>

      <div class="input-group">
        <label for="rg">RG</label>
        <input type="text" class="form-control" id="rg" name="rg" placeholder="9999999999" required autofocus>
      </div>

      <div class="input-group">
        <label for="cnh">CNH</label>
        <input type="text" class="form-control" id="cnh" name="cnh" placeholder="00000000000" required autofocus>
      </div>

      <div class="input-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required autofocus>
      </div>

      <label for="dt_nascimento">Data de Nascimento</label>
      <div class="input-group date col-md-2" id="datepicker">
        <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" size="5" required autofocus>
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-calendar"></span>
        </span>
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
           <div class="modal-body">Entregador inserido com sucesso!</div> 
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">OK</button>
                <input type="hidden" name="op" value="ins">
            </div>

        </div>
    </div>
  </div>

    <div class="input-group">
      <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#insert-modal">Salvar</button>
      <button type="reset" class="btn btn-default">Cancelar </button>
      <input type="hidden" name="op" value="ins">
    </div>

    </form> 
  </div>

</body>
</html>