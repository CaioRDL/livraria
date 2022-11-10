<?php

require('conecta.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$query = "INSERT INTO `clientes`(`nome_cli`, `cpf`, `telefone_cli`, `email_ci`) VALUES ('$nome','$cpf','$telefone','$email')";

$result = mysqli_query($conexao, $query);

if (!$result) {
    echo "Erro ao salvar!!";  
} else {
    header('location: clientes.html');
}

?>