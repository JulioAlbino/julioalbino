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
 	<h1 class="form-signin-heading text-center">Relatorio Totalizador</h1>
 	  <form name="relatorio" method="post" action="#">	
		<div>
          	<div class="col-md-12 text-center" style="margin-top:30px;">
              <button class="btn btn-sm btn-success" type="submit"><i class="glyphicon glyphicon-folder-open"></i> &nbsp;Atualizar</button>
          	</div>
		</div>
	  </form>
</div>

	<div class="text-center" style= "margin:10px;">
		<div class="row">
		<div class="col-sm-1">
		<h3>Descrição</h3>
		<h3>Sim</h3>
		<h3>Não</h3>
		</div>
		<div class="col-sm-10" style= "margin:10px;">
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
				</tr>
			</thead>
		
			
		<?php
		include_once("../funcoesphp/conexaobanco.php");

			$sql = "SELECT COUNT(resposta1) AS teste FROM avalicaodeseguranca WHERE resposta1='Sim'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<tr><td>"
 					.$row["teste"]."</td>";
    		}

    		$sql = "SELECT COUNT(resposta2) AS teste FROM avalicaodeseguranca WHERE resposta2='Sim'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}

    		$sql = "SELECT COUNT(resposta3) AS teste FROM avalicaodeseguranca WHERE resposta3='Sim'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}

    		$sql = "SELECT COUNT(resposta4) AS teste FROM avalicaodeseguranca WHERE resposta4='Sim'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}

    		$sql = "SELECT COUNT(resposta5) AS teste FROM avalicaodeseguranca WHERE resposta5='Sim'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}

    		$sql = "SELECT COUNT(resposta6) AS teste FROM avalicaodeseguranca WHERE resposta6='Sim'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}

    		$sql = "SELECT COUNT(resposta7) AS teste FROM avalicaodeseguranca WHERE resposta7='Sim'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}

    	
    		$sql = "SELECT COUNT(resposta1) AS teste FROM avalicaodeseguranca WHERE resposta1='Não'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<tr><td>"
        		.$row["teste"]."</td>";
    		}

			$sql = "SELECT COUNT(resposta2) AS teste FROM avalicaodeseguranca WHERE resposta2='Não'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}

    		$sql = "SELECT COUNT(resposta2) AS teste FROM avalicaodeseguranca WHERE resposta2='Não'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}
    		
    		$sql = "SELECT COUNT(resposta3) AS teste FROM avalicaodeseguranca WHERE resposta3='Não'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}
    		
    		$sql = "SELECT COUNT(resposta4) AS teste FROM avalicaodeseguranca WHERE resposta4='Não'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}
    		
    		$sql = "SELECT COUNT(resposta5) AS teste FROM avalicaodeseguranca WHERE resposta5='Não'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}
    		
    		$sql = "SELECT COUNT(resposta6) AS teste FROM avalicaodeseguranca WHERE resposta6='Não'";
			$result = $conn->query($sql);

    		while($row = $result->fetch_assoc()) {
       			echo "<td>"
        		.$row["teste"]."</td>";
    		}

    		
		?>
     	</table>
     	</div>
     	</div>
 		
  		<?php
		
		$conn->close();
		?> 
	</div>

<!-- fim conteiner -->
</body>
</html>