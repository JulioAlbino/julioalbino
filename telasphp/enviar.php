
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<?php
 	
 		include_once("link.php");
 		include_once("menu.php")

  	?>
</head>
<body>

<div class="container text-center">
    <div class="col-md-12 text-center">	
      <img src="..\imagens\logo.jpg" class="img-rounded" style="width:400px;height:200px;">

<?php
 	


	include_once("../funcoesphp/conexaobanco.php");

	$nome_arquivo ="base1.csv";

	$objeto = fopen($nome_arquivo, 'r');

	while (($dados = fgetcsv($objeto, 1000, ',')) !== FALSE) {


		$sql = "INSERT INTO usuarios (nome, codigo, senha, situacoe_id, niveis_acesso_id)
		select '$dados[0]', '$dados[1]', '$dados[2]', '$dados[3]', '$dados[4]' where not exists (select 1 from usuarios where codigo = '$dados[1]')";

		/*$sql = "INSERT INTO usuarios (nome, codigo, senha, situacoe_id, niveis_acesso_id) VALUES ('$dados[0]', '$dados[1]', '$dados[2]', '$dados[3]', '$dados[4]')";*/
		 
		$conn->query($sql);

		/*echo $sql . "<br>";
		echo '<pre>';
		print_r($dados);
		echo '</pre>';*/

		
			
		
	}

	fclose($objeto);

	

	


?>
<h1>Envio de colaboradores com sucesso</h1>
</body>
</html>