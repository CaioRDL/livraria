<?php
require('conecta.php');
$query = "SELECT * FROM `autores`";
$result = mysqli_query($conexao, $query);

$query_editora = "SELECT * FROM `editora`";
$result_editora = mysqli_query($conexao, $query_editora);

$query_genero = "SELECT * FROM `generos`";
$result_genero = mysqli_query($conexao, $query_genero);

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
    <div class="formulario__livraria">
        <fieldset class="novo">
            <legend class="legenda">
                Cadastro de Livros:
            </legend>
            <form action="livro.php" method="post" class="formulario">
                <input type="text" name="titulo" id="titulo" placeholder="Título do Livro" required><br><br>

                <select name="autor" id="autor" class="select" aria-placeholder="Selecione o Código do Autor">
                    <option value="">Selecione o autor</option><br><br>
                    <?php
                    while ($linha = mysqli_fetch_assoc($result)) {
                    ?>

                        <option value="<?php echo $linha['idautor']; ?>"><?php echo $linha['nome_autor']; ?></option>
                    <?php  } ?>
                </select><br><br>

                <input type="text" name="valor" id="valor" placeholder="Valor" required><br><br>

                <select name="editora" id="editora" class="select" aria-placeholder="Selecione o Código da Editora">
                    <option value="">Selecione a editora</option><br><br>

                    <?php
                    while ($linha = mysqli_fetch_assoc($result_editora)) {
                    ?>

                        <option value="<?php echo $linha['ideditora']; ?>"><?php echo $linha['nome_editora']; ?></option>
                    <?php  } ?>
                </select><br><br>
                <select name="genero" id="genero" class="select" aria-placeholder="Selecione o Código do Gênero">
                    <option value="">Selecione o gênero</option><br><br>
                    <?php
                    while ($linha = mysqli_fetch_assoc($result_genero)) {
                    ?>

                        <option value="<?php echo $linha['idgenero']; ?>"><?php echo $linha['nomegenero']; ?></option>
                    <?php  } ?>
                </select><br><br>

                <input type="text" name="edicao" id="edicao" placeholder="Edição" required>

                <input type="reset" value="Limpar" name="limpar" class="bttn__limpar">
                <input type="submit" value="Enviar" name="enviar" class="bttn_salvar">
            </form>
        </fieldset>
    </div>
</body>

</html>