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

<!-- tabelaageitar -->
<style>
table, th, td {
    border: 1px solid black;
}
</style>

<!-- inicio menu -->

<?php

  include_once("menu.php");
 
?>

<!-- fim menu / inico container --> 

<div class="container">
 	<h1 class="form-signin-heading text-center">Relatoriode avaliçao feitas</h1>
 	  <form name="relatorio" method="post" action="#">	
		<div>
			<div class="form-group col-md-3">
              <label for="dataini">Data Inicial</label>
              <div class="input-group col-md-3">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input id="dataini" type="date" class="form-control" name="dataini" required>
              </div>
          	</div>
         	<div class="form-group col-md-3">
              <label for="datafim">Data Final</label>
              <div class="input-group col-md-3">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input id="datafim" type="date" class="form-control" name="datafim" required>
              </div>
          	</div>
          	<div class="col-md-3" style="margin-top:30px; ">
              <button class="btn btn-sm btn-success" type="submit"><i class="glyphicon glyphicon-folder-open"></i> &nbsp;Visualizar</button>
          	</div>
		</div>
	  </form>
</div>

	<div class="text-center" style= "margin:10px;">
		<?php
			include_once("../funcoesphp/conexaobanco.php");
				if(count($_POST) > 0){
					$dataini = $_POST['dataini'];
					$datafim = $_POST['datafim'];
					$sql = "SELECT * FROM avalicaodeseguranca where dateavalicao between '$dataini' and '$datafim'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {

		?> 
 	 	<table class="table table-bordered text-center">
    		<thead>
				<tr>
					<th>Voce conseidera empresa segura</th>
					<th>Voce conseidera empresa segura</th>
					<th>Voce conseidera empresa segura</th>
					<th>Voce conseidera empresa segura</th>
					<th>Voce conseidera empresa segura</th>
					<th>Voce conseidera empresa segura</th>
					<th>Voce conseidera empresa segura</th>
				</tr>";
			</thead>
		<?php
    		while($row = $result->fetch_assoc()) {
       			echo "<tr><td>"
        		.$row["resposta1"]."</td><td>"
        		.$row["resposta2"]."</td><td>"
        		.$row["resposta3"]."</td><td>"
        		.$row["resposta1"]."</td><td>"
        		.$row["resposta2"]."</td><td>"
        		.$row["resposta3"]."</td><td>"
        		.$row["observacao1"]."</td>";
    		}
		?>
     	</table>
 		<?php
		} else {
    	?>
     	<h2>Nem um registro encontrato</h2>
  		<?php
		}
		}
		$conn->close();
		?> 
	</div>

<!-- fim conteiner -->
</body>
</html>