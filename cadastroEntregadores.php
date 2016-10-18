<!DOCTYPE html>
<html lang="pt-br">
<head>
 <title>Cadastro de Entregadores</title>
         <script type="text/javascript">
            $(function () {
                $('#datepicker').datetimepicker();
            });
        </script>
</head>
<body>

  <div class="form-group col-md-4">
    <form action="tcc1.html">
       <div class="input-group">
        <label for="name">Nome</label> 
        <input type="text" class="form-control" id="name" size="60">
      </div>

      <div class="input-group">
        <label for="rg">RG</label>
        <input type="text" class="form-control" id="rg" placeholder="9999999999">
      </div>

      <div class="input-group">
        <label for="cnh">CNH</label>
        <input type="text" class="form-control" id="cnh" placeholder="00000000000">
      </div>

      <div class="input-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00">
      </div>

      <label for="dt_nasc">Data de Nascimento</label>
      <div class="input-group date col-md-2" id="datepicker">
        <input type="date" class="form-control" id="dt_nasc" size="5">
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
    </form>	

    <hr />

    <div class="input-group">
      <button  type="submit" class="btn btn-primary">Salvar</button>
      <a href="tcc1.html" class="btn btn-default">Cancelar</a>
    </div>

  </div>

</body>
</html>