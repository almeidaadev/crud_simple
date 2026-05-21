
<?php
$host = 'localhost';
$username = 'root';
$dbname = 'crud';
$password = '';

// DSN específica para MySQL (ajuste o prefixo para outros bancos, ex: pgsql)
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

// Opções de configuração recomendadas
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lança exceções em caso de erro
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Retorna resultados como arrays associativos
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa preparações nativas para maior segurança
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Conexão estabelecida com sucesso.";
} catch (PDOException $e) {
    // Em produção, registre o erro no log em vez de exibir na tela
    error_log("Erro de conexão: " . $e->getMessage());
    die("Erro na conexão com o banco de dados.");
}
?>   