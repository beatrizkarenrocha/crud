<?php
$host = 'localhost';
$db = 'crud_db';
$user = 'root';
$pass = '';

// Criando conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificando conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
