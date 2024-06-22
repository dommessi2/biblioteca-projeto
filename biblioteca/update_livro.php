<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT * FROM livros WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Livro não encontrado";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Livro</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Editar Livro</h1>
        <form action="edit_livro.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            Título: <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>"><br>
            Autor: <input type="text" name="autor" value="<?php echo $row['autor']; ?>"><br>
            Gênero: <input type="text" name="genero" value="<?php echo $row['genero']; ?>"><br>
            Ano: <input type="number" name="ano" value="<?php echo $row['ano']; ?>"><br>
            Sinopse: <textarea name="sinopse"><?php echo $row['sinopse']; ?></textarea><br>
            <input type="submit" value="Salvar">
        </form>
        <a href="view_livros.php" class="button">Ver Cadastros</a>
    </div>
</body>
</html>
