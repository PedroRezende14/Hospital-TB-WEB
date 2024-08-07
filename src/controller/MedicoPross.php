<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $formacao = $_POST['formacao'];
    $especialidade = $_POST['especialidade'];

    // Conectar ao banco de dados e salvar os dados
    // $conn = new mysqli('hostname', 'username', 'password', 'database');
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // $sql = "INSERT INTO medicos (nome, cpf, email, idade, sexo, formacao, especialidade) VALUES ('$nome', '$cpf', '$email', '$idade', '$sexo', '$formacao', '$especialidade')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "Cadastro realizado com sucesso!";
    // } else {
    //     echo "Erro: " . $sql . "<br>" . $conn->error;
    // }

    // $conn->close();
    echo "Cadastro realizado com sucesso!";
}
?>
