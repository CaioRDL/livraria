<?php

require('conecta.php');

$valor = $_POST['valor'];
$cliente = $_POST['cliente'];
$data = $_POST['data'];

$query = "INSERT INTO `vendas`(`valor`, `cliente`, `data`) VALUES ('$valor','$cliente','$data')";

$result = mysqli_query($conexao, $query);

if (!$result) {
    echo "Erro ao salvar!!";
} else {
    header('location: vendas.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vendas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <main>
        <nav class="menu__livraria">
            <a href="cadastrolivro.php">Cadastro de Livros</a> |
            <a href="autor.html">Cadastro de Autores</a> |
            <a href="editora.html">Cadastro de Editora</a> |
            <a href="generos.html">Cadastro de Gêneros</a> |
            <a href="clientes.html">Cadastro de Clientes</a> |
            <a href="selectVenda.php">Cadatro de Vendas</a>
        </nav>
    </main>
    <fieldset class="novo">
        <legend class="legenda">Cadastro de Vendas:</legend>
        <form action="vendas.php" method="post" class="formulario">
            <label for="">ISBN:</label><br>
            <select name="isbn" id="isbn" class="select">
                <option value="">Selecione...</option>
                <?php
                $query = "SELECT * FROM `livros`";
                $result = mysqli_query($conexao, $query);
                while ($linha = mysqli_fetch_assoc($result)) {
                ?>

                    <option value="<?php echo $linha['idlivro']; ?>"> <?php echo $linha['titulo']; ?>

                    </option>


                <?php  } ?>
            </select>

            <label for="">Valor:</label><br>
            <input type="text" name="valor" id="valor" required><br>

            <label for="">Cliente:</label><br>
            <input type="text" name="cliente" id="cliente" required><br>

            <label for="">Data da Venda:</label><br>
            <input type="date" name="data" id="data" required><br>

            <input type="reset" value="Limpar" name="limpar" class="bttn__limpar">
            <input type="submit" value="Enviar" name="enviar" class="bttn_salvar">
        </form>
    </fieldset>

</body>

</html>