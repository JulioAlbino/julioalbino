<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="imagens/favicon.ico">
    <title>Intranet Bragagnolo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
  </head>
<body>

<!-- inicio menu -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">
        <?php 
          echo "Usuario: ";
        ?>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> sair</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- fim menu / inico container --> 
    
<div class="container">
    <div class="col-md-12 text-center">
        <img src="..\imagens\logo.jpg" class="img-rounded" style="width:400px;height:200px;">
    </div>
        <div class="col-sm-4 col-sm-offset-4 text-center">
            <form class="form-signin" method="POST" action="../funcoesphp/validalogin.php">
                <h2 class="form-signin-heading">Intranet Bragagnolo</h2>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="codigo" id="inputCodigo" class="form-control" placeholder="Codigo" required autofocus>
                    </div>
                </div>        
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                    </div>
                </div>
                <button class="btn btn-sm btn-success " type="submit"><i class="glyphicon glyphicon-ok"></i> Acessar</button>
            </form>

	  <p class="text-center text-danger">
			   <?php if(isset($_SESSION['loginErro'])){
				    echo $_SESSION['loginErro'];
				    unset($_SESSION['loginErro']);
			   }?>
		</p>
		<p class="text-center text-success">
			   <?php 
			     if(isset($_SESSION['logindeslogado'])){
				      echo $_SESSION['logindeslogado'];
				      unset($_SESSION['logindeslogado']);
			   }?>
		</p>
            </div>
</div> <!-- /container -->

</body>
</html>
