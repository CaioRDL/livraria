<?php

require('conecta.php');

$recid = $_GET['idlivro'];

$query = "DELETE FROM `livros` WHERE idlivro = $recid";

$result = mysqli_query($conexao, $query);

if (!$result) {
    echo "Erro ao excluir!";
} else {
    header('location: listalivros.php');
}

?>