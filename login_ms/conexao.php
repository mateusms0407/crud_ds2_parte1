<?php
session_start();
try {
global $conexao;
$conexao = new PDO("mysql:host=localhost;dbname=crudms;charset=utf8mb4",
"root", "aluno", [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
} catch (PDOException $erro) {
echo "Erro na conexão: " . $erro->getMessage();
}
?>
