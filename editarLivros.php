<?php

require('conecta.php');

$id = intval($_GET['idlivro']);

if (count($_POST) > 0) {
    $id = $_GET['idlivro'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $valor = $_POST['valor'];
    $editora = $_POST['editora'];
    $genero = $_POST['genero'];
    $edicao = $_POST['edicao'];

    $erro = '';
    if (empty($titulo)) {
        $erro = 'Preencha o título.';
    }

    if ($erro) {
        echo "<p style='color: red;'>$erro</p>";
    } else {
        $sql = "UPDATE `livros` SET `titulo`='$titulo',`autor`='$autor',`valor`='$valor',`editora`='$editora',`genero`='$genero',`edicao`='$edicao' WHERE idlivro = '$id' ";
    }

    $dados_atualizados = $conexao->query($sql) or die($conexao->error);

    if ($dados_atualizados) {
        echo "<h1 style='color: aquamarine;'>Atualizado com sucesso!</h1>";
    } else {
        die("ERROR: Não atualizado! $sql");
    }
}

$sql_livro = "SELECT * FROM `livros` WHERE idlivro = '$id'";
$query_livro = $conexao->query($sql_livro) or die($conexao->error);
$livro = $query_livro->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <main>
        <nav class="menu__livraria">
            <a href="livros.html">Cadastro de Livros</a> |
            <a href="autor.html">Cadastro de Autores</a> |
            <a href="editora.html">Cadastro de Editora</a> |
            <a href="generos.html">Cadastro de Gêneros</a> |
            <a href="clientes.html">Cadastro de Clientes</a> |
            <a href="vendas.html">Cadatro de Vendas</a>
        </nav>
    </main>
    <div class="formulario__livraria">
        <fieldset class="novo">
            <legend class="legenda">
                Cadastro de Livros:
            </legend>
            <form action="" method="post" class="formulario">
                <input value="<?php echo $livro['titulo']; ?>" type="text" name="titulo" id="titulo" placeholder="Título do Livro" required><br><br>

                <input value="<?php echo $livro['autor']; ?>" type="text" name="autor" id="autor" placeholder="Autor" required><br><br>

                <input value="<?php echo $livro['valor']; ?>" type="text" name="valor" id="valor" placeholder="Valor" required><br><br>

                <input value="<?php echo $livro['editora']; ?>" type="text" name="editora" id="editora" placeholder="Editora" required><br><br>

                <input value="<?php echo $livro['genero']; ?>" type="text" name="genero" id="genero" placeholder="Gênero" required><br><br>

                <input value="<?php echo $livro['edicao']; ?>" type="text" name="edicao" id="edicao" placeholder="Edição" required>

                <input type="reset" value="Limpar" name="limpar" class="bttn__limpar">
                <input type="submit" value="Atualizar" name="atualizar" class="bttn_salvar">
            </form>
        </fieldset>
    </div>
</body>

</html>