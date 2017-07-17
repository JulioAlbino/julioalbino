<?php
session_start();

include_once("conexaobanco.php");


$created = date("Y-m-d h:i:s");
$userid = $_SESSION['usuarioId'];
$codigo = $_SESSION['usuarioCodigo'];	
$resposta1 = $_POST['Pergunta1'];
$resposta2 = $_POST['Pergunta2'];
$resposta3 = $_POST['Pergunta3'];
$observacao1 = $_POST['comentario'];


$sql = "INSERT INTO avalicaodeseguranca (resposta1, resposta2, resposta3, idusuario, observacao1, dateavalicao, codigo)
VALUES ('$resposta1', '$resposta2', '$resposta3', '$userid', '$observacao1', '$created', '$codigo')";

if ($conn->query($sql) === TRUE) {
   header("Location: ../telasphp/avaliacaodeseguranca.php?salvou=TRUE");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

 