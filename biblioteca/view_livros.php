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

$sql = "SELECT id, titulo, autor, genero, ano, sinopse FROM livros";
$result = $conn->query($sql);

echo "<div class='container'>";
echo "<h1>Livros Cadastrados</h1>";
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Título</th><th>Autor</th><th>Gênero</th><th>Ano</th><th>Sinopse</th><th>Ações</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["titulo"]. "</td><td>" . $row["autor"]. "</td><td>" . $row["genero"]. "</td><td>" . $row["ano"]. "</td><td>" . $row["sinopse"]. "</td>";
        echo "<td><a href='update_livro.php?id=" . $row["id"] . "'>Editar</a> | <a href='delete_livro.php?id=" . $row["id"] . "'>Excluir</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
echo "<br><a href='create_livro.php' class='button'>Cadastrar Novo Livro</a>";
echo "</div>";

$conn->close();
?>
<link rel="stylesheet" type="text/css" href="styles.css">
