<?php
if (isset($_POST['email'])) {
    require('conecta.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT `senha` FROM `usuarios` WHERE email = '$email';";
    $result = mysqli_query($conexao, $query) or die("Não foi possível executar.");

    $usuario = $result->fetch_assoc();

    if (password_verify($senha, $usuario['senha'])) {
        header('location: cadastrolivro.php');
    } else {
        echo "Senha não confere!";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/reset.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Cadastro de Usuários</title>
</head>

<body>
    <h1 class="titulo__login">Insira seu email e sua senha:</h1>
    <div class="login">

        <form action="" method="post" class="formulario__login">
            <input type="email" name="email" id="" placeholder="email@exemplo.com" required><br><br>

            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required><br><br>

            <button type="submit" class="cadastro">Consultar</button>
        </form>
    </div>

</body>

</html>