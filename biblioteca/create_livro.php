<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cadastrar Livro</h1>
        <form action="insert_livro.php" method="post">
            Título: <input type="text" name="titulo" required><br>
            Autor: <input type="text" name="autor" required><br>
            Gênero: <input type="text" name="genero" required><br>
            Ano: <input type="number" name="ano" required><br>
            Sinopse: <textarea name="sinopse" required></textarea><br>
            <input type="submit" value="Cadastrar">
        </form>
        <a href="view_livros.php" class="button">Ver Cadastros</a>
    </div>
</body>
</html>
