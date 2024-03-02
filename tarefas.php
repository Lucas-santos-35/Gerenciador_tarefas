<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $prioridade = isset($_POST['prioridade']) ? $_POST['prioridade'] : null; // Verifica se o índice existe
    $data_vencimento = $_POST['data_vencimento'];
    $categoria = $_POST['categoria'];

    // Salve os dados no banco de dados (MySQL) conforme as etapas abaixo.
}

// Etapas para criar o banco de dados MySQL:
// 1. Instale o MySQL e crie um banco de dados chamado "gerenciador_tarefas".
// 2. Crie uma tabela chamada "tarefas" com colunas: id (auto_increment), titulo, descricao, prioridade, data_vencimento, categoria.
// 3. Configure a conexão com o banco de dados no PHP (use mysqli ou PDO).

// Exemplo de conexão com o banco de dados (usando mysqli):
$host = 'localhost'; // Remova os dois pontos
$user = 'root';
$password = '';
$dbname = 'gerenciador_tarefas';

$conn = new mysqli($host, $user, $password, $dbname);
    
if ($conn->connect_error) {
    die('Erro na conexão: ' . $conn->connect_error);
}

// Insira os dados na tabela "tarefas" (use prepared statements para segurança).
// Exemplo:
$sql = 'INSERT INTO gerenciador_tarefas (titulo, descricao, prioridade, data_vencimento, categoria) VALUES (?, ?, ?, ?, ?)';
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssss', $titulo, $descricao, $prioridade, $data_vencimento, $categoria);
$stmt->execute();
$stmt->close();
$conn->close();
?>