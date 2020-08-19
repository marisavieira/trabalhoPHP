<?php

include"conexao.inc";

$nome = $_POST["nome"];
$email = $_POST["email"];
$data = $_POST["data"];
$descoberta = $_POST["descoberta"];
$mensagem = $_POST["mensagem"];

$sql = "INSERT INTO contato (nome, email, data, descoberta, mensagem) VALUES ('$nome', '$email', '$data', '$descoberta', '$mensagem')";
if (mysqli_query($conn, $sql)) {			
		echo"<script language='javascript' type='text/javascript'>alert('Enviado com sucesso!');window.location.href='../paginas/contato.html';</script>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
}
mysqli_close($conn);
?>