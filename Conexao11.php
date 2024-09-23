<?php
$host = 'localhost';
$db = 'sistema_alunos';
$user = 'seu_usuario';
$pass = 'sua_senha';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>