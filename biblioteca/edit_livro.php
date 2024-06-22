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

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];
$sinopse = $_POST['sinopse'];

$sql = "UPDATE livros SET titulo='$titulo', autor='$autor', genero='$genero', ano='$ano', sinopse='$sinopse' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<div class='container'>";
    echo "Livro atualizado com sucesso";
    echo "<br><a href='view_livros.php' class='button'>Ver Cadastros</a>";
    echo "<br><a href='create_livro.php' class='button'>Cadastrar Novo Livro</a>";
    echo "</div>";
} else {
    echo "Erro ao atualizar livro: " . $conn->error;
}

$conn->close();
?>
<link rel="stylesheet" type="text/css" href="styles.css">
