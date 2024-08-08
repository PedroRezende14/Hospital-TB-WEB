<?php

class PessoaController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function cadastrarPaciente($dados)
    {
        $sql = "INSERT INTO pacientes (nome, cpf, idade, doenca, prioridade, tipo_sanguineo, observacoes) 
                VALUES (:nome, :cpf, :idade, :doenca, :prioridade, :tipo_sanguineo, :observacoes)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':cpf', $dados['cpf']);
        $stmt->bindParam(':idade', $dados['idade']);
        $stmt->bindParam(':doenca', $dados['doenca']);
        $stmt->bindParam(':prioridade', $dados['prioridade']);
        $stmt->bindParam(':tipo_sanguineo', $dados['tipo_sanguineo']);
        $stmt->bindParam(':observacoes', $dados['observacoes']);

        if ($stmt->execute()) {
            echo "Paciente cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar paciente.";
        }
    }
}
