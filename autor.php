<?php

require('conecta.php');

$nome = $_POST['nome'];

$query = "INSERT INTO `autores`(`nome_autor`) VALUES ('$nome')";

$result = mysqli_query($conexao, $query);

if (!$result) {
    echo "Erro ao salvar!";
} else {
   header('location: autor.html');
}


?>