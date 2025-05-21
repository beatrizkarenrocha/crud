<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM produtos WHERE id = $id");
$produto = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $conn->query("UPDATE produtos SET nome='$nome', preco='$preco', descricao='$descricao' WHERE id = $id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Editar Produto</h1>
    <form method="post">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $produto['nome'] ?>" required>
        
        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?>" required>
        
        <label>Descrição:</label>
        <textarea name="descricao"><?= $produto['descricao'] ?></textarea>
        
        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php" class="button">Voltar</a>
</div>
</body>
</html>
