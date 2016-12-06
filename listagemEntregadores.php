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

          <form action="controllers/EntregadorController.php" method="post">
            <input type="hidden" id="op" name="op" value="lista">
            <input type="text" class="form-control" name="entregador" placeholder="Buscar entregador...">
            <button class="btn btn-default" type="submit">Pesquisar</button>
          </form>
          </span>
        </div>
      </div>
    </div>
  </div>
  
  <br>
  <br>

     <?php 

      if (isset($_SESSION['mensagem'])) {
        echo "<div class='alert alert-info'>";
          echo "<strong>Aviso!</strong> ".$_SESSION['mensagem'];
        echo "</div>";
      }
      $_SESSION['mensagem'] = null;
    ?>  

<!--TABELA-->
<div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>CNH</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
            <?php 
            if (isset($_SESSION['rows'])) {
              $rows = $_SESSION['rows'];

              foreach ($rows as $r) { ?>

                <tr>
                    <td><?php print_r($r['identregador']) ?></td>  
                    <td><?php print_r($r['nome']) ?></td> 
                    <td><?php print_r($r['rg']) ?></td>  
                    <td><?php print_r($r['cnh']) ?></td>  
                    <td><?php print_r($r['cpf']) ?></td>
                    <td><?php print_r($r['dt_nascimento']) ?></td>   

                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="./controllers/EntregadorController.php?op=mostra&id=<?php print_r($r['identregador']) ?>">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="./controllers/EntregadorController.php?op=edita&id=<?php print_r($r['identregador']) ?>">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="./controllers/EntregadorController.php?op=del&id=<?php print_r($r['identregador']) ?>">Excluir</a>
                    </td>
                </tr>
        <?php   
              }
            $_SESSION['rows'] = null;
            } else{
                echo "<tr><td>Informe parametros para pesquisa</td></tr>";
            }
         ?>
            </tbody>
         </table>
 
     </div>
 </div> 
</body>