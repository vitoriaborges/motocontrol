<!DOCTYPE html>
<html lang="pt-br">
<head>

  <?php include ('checklogin.php'); ?>
  <title>Clientes</title>
</head>
<body>
  <div class="form-group col-md-4">
    <div class="row">
      <div class="col-lg-8">
        <div class="input-group">
          <span class="input-group-btn">
            <input type="text" class="form-control" placeholder="Buscar entregador...">
            <button class="btn btn-default" type="button">Pesquisar</button>
          </span>
        </div>
      </div>
    </div>
  </div>
  
  <br>
  <br>

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
            </div>
            <div class="modal-body">Deseja realmente excluir este item? </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
            </div>
        </div>
    </div>
</div>

<!--TABELA-->
<div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Cep</th>
                    <th>Telefone</th>
                    <th>Cnpj</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1001</td>
                    <td>Sashiburi</td>
                    <td>Av. Pereira Passos</td>
                    <td>91900-200</td>
                    <td>(51) 3222-1400</td>
                    <td>06.312.985/0001-77</td>
                    <td class="actions">
                      <form method="post">
                        <input type="hidden" id="op" name="op" value="del">
                        <input type="hidden" name="id" value="1001">
                      </form>
                        <a class="btn btn-warning btn-xs" href="controllers/ClienteController.php?op=upd&id=1001">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="controllers/ClienteController.php?op=del&id=5" >Excluir</a>
                    </td>
                </tr>
            </tbody>
         </table>
 
     </div>
 </div> 
</body>