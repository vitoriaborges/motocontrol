      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"  style="color: #00008B">MOTOCONTROL</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://localhost/motocontrol">Inicio</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entregadores <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="main.php?menu=1">Cadastro</a></li>
                  <li><a href="listaEntregadores.php">Listagem</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspoup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="main.php?menu=2">Cadastro</a></li>
                  <li><a href="listaClientes.php">Listagem</a></li>
                </ul>
              </li>
              <li>
              <?php
              $name = "usuário não logado";
              if(isset($_SESSION['name'])){
                $name = $_SESSION['name'];
              }
              ?>
              <p class="navbar-text"> <?php echo "Olá $name!"; ?> <a href='logout.php'> Clique aqui para sair</a> </p> 
              </li>
            </nav>
