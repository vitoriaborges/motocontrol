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

  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading"  style="text-align:center">Tabela de Pagamento</div>

    <!-- Table -->
    <table class="table">
     
      <tr>
       <th >Nome</th>
       <th>Endereço</th> 
       <th>Telefone</th>
       <th>CNPJ</th> 
     </tr>
     <tr>
      <td>Sashiburi</td>
      <td>Av. Pereira Passos</td>
      <td>(51) 3222-1400</td>
      <td>06.312.985/0001-77</td>
    </tr>
  </table>
</div>
</body>