<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/styles.css">
    <script src="https://kit.fontawesome.com/47e9777af5.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="lista__livros">Lista de Livros Cadastrados</h1>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Valor</th>
            <th>Editora</th>
            <th>Gênero</th>
            <th>Edição</th>
            <th colspan="2">Ação</th>
        </thead>
        <?php
        require('conecta.php');
        $dados = mysqli_query($conexao, "SELECT * FROM `livros`");
        while ($item = mysqli_fetch_assoc($dados)) {
        ?>
            <tr>
                <td><?= $item['idlivro'] ?></td>
                <td><?= $item['titulo'] ?></td>
                <td><?= $item['autor'] ?></td>
                <td><?= $item['valor'] ?></td>
                <td><?= $item['editora'] ?></td>
                <td><?= $item['genero'] ?></td>
                <td><?= $item['edicao'] ?></td>
                <td><a href="editarLivros.php?idlivro=<?php echo $item['idlivro']; ?>" target="_blank"><i class="fa fa-pencil"></a></td>
                <td onclick="verifica('<?= $item["idlivro"];?>')"><a href="#"><i class="fa fa-trash"></a></td>
            </tr>
        <?php } ?>
    </table>

    <script>
        function verifica(recid) {
            if (confirm('Deseja seguir com a exclusão permanente deste item?')) {
                window.location = 'excluirLivros.php?idlivro=' + recid
            }
        }
        
    </script>

</body>

</html>