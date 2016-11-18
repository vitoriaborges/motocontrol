<!DOCTYPE html>

  <?php 
  include ('menu.php');
  include ('header.php'); 
   ?>

<html lang="pt-br">
<head>
         <script type="text/javascript">
            $(function () {
                $('#datepicker').datetimepicker();
            });
        </script>
</head>
<body>
	<h3>Dados:</h3>
	
	<div class="form-group col-md-4">
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<td>1001</td>
				<th>Data de Nascimento</th>
				<td>26/06/1985</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>Nome</th>
				<td>Jorge Rodrigo Castro</td>
				<th>CNH</th>
				<td>1457896322</td>
			</tr>
			<tr>
				<th>RG</th>
				<td>2448563210</td>
				<th>CPF</th>
				<td>36694215802</td>

			</tr>
		</tbody>
	</div>
	</table>

<!-- CALENDARIO -->
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
                inline: true,
                sideBySide: true
            });
        });
    </script>
</div>
	
</body>