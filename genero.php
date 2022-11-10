<?php

require('conecta.php');

$genero = $_POST['genero'];

$query = "INSERT INTO `generos`(`nomegenero`) VALUES ('$genero')";

$result = mysqli_query($conexao, $query);

if (!$result) {
    echo "Erro ao salvar!";
} else {
   header('location: generos.html');
}

?>