<?php
$host = 'localhost'; // ou seu host
$db = 'exercicio11';
$user = 'root'; // seu usuário
$pass = ''; // sua senha

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>