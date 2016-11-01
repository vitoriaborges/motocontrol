<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Tela de Login</title>

  <?php 

  include ('header.php');

  $msgText = "mensagem não especificada";
  $tipoMsg = "";

  if(isset($_GET['msgCode'])){
    $tipoMsg = true;
    switch ($_GET['msgCode']) {
      case 1:
        $msgText = "Usuário não autenticado!";
        $tipoMsg = "erro";
        break;
      case 2:
        $msgText = "Usuário e/ou senha inválidos!";
        $tipoMsg = "erro";
        break;
      case 3: 
        $msgText = "Usuário desconectado com sucesso!";
        $tipoMsg = "msg";
      default:
        break;
    }
  }


  ?>

</head>

<body>
	
  <div class="container">

    <form class="form-signin" data-toggle="validator" role="form" action="login.php" method="post" >
      <h2 class="form-signin-heading">MOTOCONTROL</h2>
      <label for="user" class="sr-only">Username</label>
      <input type="text" name="user" id="user" class="form-control" placeholder="Username" required autofocus>
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" id="user" class="form-control" placeholder="Password" required>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar usuario
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <br />

      <?php if(strcasecmp($tipoMsg, "erro") == 0) { ?>

        <div class="alert alert-danger">
          <strong>Erro!</strong> <?php echo $msgText; ?>
        </div>

      <?php } elseif(strcasecmp($tipoMsg, "msg") == 0){ ?>

        <div class="alert alert-info">
          <strong>Aviso!</strong> <?php echo $msgText; ?>
        </div>

      <?php } ?>

    </form>

  </div>

</body>
</html>
