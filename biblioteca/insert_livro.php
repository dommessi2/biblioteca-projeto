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

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];
$sinopse = $_POST['sinopse'];

$sql = "INSERT INTO livros (titulo, autor, genero, ano, sinopse)
VALUES ('$titulo', '$autor', '$genero', '$ano', '$sinopse')";

echo "<link rel='stylesheet' type='text/css' href='styles.css'>";
echo "<div class='container'>";
if ($conn->query($sql) === TRUE) {
    echo "<div class='message'>Novo livro cadastrado com sucesso</div>";
    echo "<a href='create_livro.php' class='button'>Cadastrar Novo Livro</a>";
    echo "<a href='view_livros.php' class='button'>Ver Cadastros</a>";
} else {
    echo "<div class='message'>Erro: " . $sql . "<br>" . $conn->error . "</div>";
    echo "<a href='create_livro.php' class='button'>Tentar Novamente</a>";
}
echo "</div>";

$conn->close();
?>
