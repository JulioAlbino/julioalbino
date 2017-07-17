<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
<?php

  include_once("link.php");

?>
	</head>
<body>

<!-- inicio menu -->

<?php

  include_once("menu.php");

?>

<!-- fim menu / inico container -->

<div class="container">
	<div class="col-md-12 text-center">
		<img src="..\imagens\logo.jpg" class="img-rounded" style="width:400px;height:200px;">
	</div>
	<div class="col-sm-4 col-sm-offset-4 text-center">
		<form class="form-signin" method="POST" action="../funcoesphp/salvacadastrousuario.php">
		  	<div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" required>
               </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="codigo" placeholder="Codigo" required>
            	</div>
            </div>
              <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
               </div>
            </div>
             <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-menu-hamburger"></i></span>
                      	<select name="situacao" class="form-control">
 			      			<option value="1">Ativo</option>
	 		     			<option value="2">Desativado</option>
		      			</select>
               </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-menu-hamburger"></i></span>
                      <select name="niveldeacesso" class="form-control" >
 			        		<option value="1">Usuario</option>
	 		        		<option value="2">Colaborador</option>
			        		<option value="3">Administrador</option>
		        	</select>
                </div>
            </div>
             <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" name="setor" class="form-control" placeholder="Setor" required>
               </div>
            </div>
        	<button class="btn btn-sm btn-success" type="submit"><i class="glyphicon glyphicon-floppy-saved"></i>Enviar</button>
		</form>
	</div>
</div>

<!-- fim conteiner -->

</body>
</html>