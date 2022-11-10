<?php

require('conecta.php');

$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$query = "INSERT INTO `editora`(`nome_editora`, `cnpj`, `endereco`, `telefone`, `email`) VALUES ('$nome','$cnpj','$endereco','$telefone','$email')";

$result = mysqli_query($conexao, $query);

if (!$result) {
    echo "Erro ao salvar!";
} else {
   header('location: editora.html');
}

?>