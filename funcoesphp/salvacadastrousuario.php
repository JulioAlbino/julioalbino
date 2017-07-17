<?php
session_start();

include_once("conexaobanco.php");


$created = date("Y-m-d h:i:s");
$nome = $_POST['nome'];
$codigo = $_POST['codigo'];
$senha = $_POST['senha'];
$situacoe_id = $_POST['situacao'];
$niveis_acesso_id = $_POST['niveldeacesso'];
$setor = $_POST['setor'];


$sql = "INSERT INTO usuarios (nome, codigo, senha, situacoe_id, niveis_acesso_id, setor, created)
VALUES ('$nome', '$codigo', '$senha', '$situacoe_id', '$niveis_acesso_id', '$setor' , '$created')";

if ($conn->query($sql) === TRUE) {
   header("Location: ../telasphp/cadastrodeusuario.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
?> 
