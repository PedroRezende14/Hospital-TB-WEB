<?php
$host = 'db';
$db = 'postgres';
$user = 'postgres';
$pass = '123456';

$dsn = "pgsql:host=$host;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    
    // Set the charset
    $pdo->exec("SET NAMES 'utf8'");

    $sql = "
    DO \$\$
    BEGIN
        IF NOT EXISTS (SELECT 1 FROM pg_tables WHERE schemaname = 'public' AND tablename = 'pacientes') THEN
            CREATE TABLE pacientes (
                id SERIAL PRIMARY KEY,
                nome VARCHAR(255) NOT NULL,
                cpf VARCHAR(11) NOT NULL,
                idade INT NOT NULL,
                doenca VARCHAR(255),
                prioridade INT,
                tipo_sanguineo VARCHAR(10),
                observacoes TEXT
            );
        END IF;
    END
    \$\$;
    ";

    $pdo->exec($sql);
    echo "Table 'pacientes' created successfully.";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
