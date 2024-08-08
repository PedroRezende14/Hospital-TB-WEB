<?php

class MedicoController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function cadastrarMedico($dados)
    {
        $sql = "INSERT INTO medicos (nome, cpf, email, idade, sexo, formacao, especialidade) 
                VALUES (:nome, :cpf, :email, :idade, :sexo, :formacao, :especialidade)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':cpf', $dados['cpf']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':idade', $dados['idade']);
        $stmt->bindParam(':sexo', $dados['sexo']);
        $stmt->bindParam(':formacao', $dados['formacao']);
        $stmt->bindParam(':especialidade', $dados['especialidade']);

        if ($stmt->execute()) {
            echo "Médico cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar médico.";
        }
    }
}
