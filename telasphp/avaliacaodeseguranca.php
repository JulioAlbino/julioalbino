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
		    <h1>Avalição de segurança</h1>

        <?php 
            if (isset($_GET['salvou'])){ ?>
              <div class="alert alert-success" role="alert">Sucesso</div>
        <?php }?>
              </div>
    
    <form name="Pergunras" method="post" action="../funcoesphp/salvaravalicao.php">
        <div class="form-group">
            <div class="input-group">
		            <h4 class="form-signin-heading ">Pergunta 1</h4>
		            <label class="radio-inline">
  	               <input type="radio" name="Pergunta1" value="Sim" required>Sim <br>
  	            </label>
  	            <label class="radio-inline">
  	               <input type="radio" name="Pergunta1" value="Não" required>Não<br>
  	            </label>
            </div>
        </div>
		    <div class="form-group">
            <div class="input-group">
		            <h4 class="form-signin-heading">Pergunta 2</h4>
		            <label class="radio-inline">
  	               <input type="radio" name="Pergunta2" value="Sim" required>Sim <br>
  	            </label>
  	            <label class="radio-inline">
  	               <input type="radio" name="Pergunta2" value="Não" required>Não<br>
  	            </label>
	         </div>
        </div>
        <div class="form-group">
            <div class="input-group">
		            <h4 class="form-signin-heading">Pergunta 3</h4>
		            <label class="radio-inline">
  	               <input type="radio" name="Pergunta3" value="Sim" required>Sim <br>
  	            </label>
  	            <label class="radio-inline">
  	               <input type="radio" name="Pergunta3" value="Não" required>Não<br>
  	            </label>
            </div>
        </div>
	      <div class="form-group">
            <div class="input-group col-sm-12">
              <label for="Comentario">Comentario :</label>
              <textarea name="comentario" class="form-control" rows="5"></textarea>
            </div>
        </div>
        <div class="col-sm-4 col-sm-offset-4 text-center">
            <button class="btn btn-sm btn-success" type="submit"><i class="glyphicon glyphicon-floppy-saved"></i>Enviar</button>
        </div>
    </form>
  </div>
</div>




<!-- fim conteiner -->

</body>
</html>