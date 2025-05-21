<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $conn->query("INSERT INTO produtos (nome, preco, descricao) VALUES ('$nome', '$preco', '$descricao')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Adicionar Produto</h1>
    <form method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        
        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" required>
        
        <label>Descrição:</label>
        <textarea name="descricao"></textarea>
        
        <input type="submit" value="Salvar">
    </form>
    <a href="index.php" class="button">Voltar</a>
</div>
</body>
</html>
