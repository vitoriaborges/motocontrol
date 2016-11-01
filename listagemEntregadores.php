<!DOCTYPE html>
<html lang="pt-br">
<head>

  <?php include ('checklogin.php'); ?>


  <title>Entregadores</title>
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
    
     <div style="overflow:hidden;">
    <div class="form-group">
        <div class="row">
            <div class="col-md-8">
                <div id="datetimepicker"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker({
                inline: true;
                sideBySide: true;
            });
        });
    </script>
</div>

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"  style="text-align:center">Tabela de Pagamento</div>

      <!-- Table -->
      <table class="table">
       <tr>
       <th >Nome</th>
        <th>RG</th> 
        <th>CNH</th>
        <th>CPF</th> 
        <th>Data de Nascimento</th>
      </tr>
      <tr>
        <td>Jorge Castro</td>
        <td>1548963204</td> 
        <td>4589630147</td>
        <td>15423659802</td>
        <td>11/06/1980</td>
      </tr>
   </table>
 </div>-->

</body>