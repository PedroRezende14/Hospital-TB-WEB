<?php

require_once '../config/Conexao.php';
require_once '../models/Medico.php';

class MedicoController
{
    private $conn;

    public function __construct()
    {
        $this->conn = (new Conexao())->connect();
    }

    public function inserir(Medico $medico)
    {
        $query = 'INSERT INTO medicos (nome, cpf, especialidade, faculdade) VALUES (:nome, :cpf, :especialidade, :faculdade)';
        $stmt = $this->conn->prepare($query);

        $nome = $medico->getNome();
        $cpf = $medico->getCpf();
        $especialidade = $medico->getEspecialidade();
        $faculdade = $medico->getFaculdade();

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':especialidade', $especialidade);
        $stmt->bindParam(':faculdade', $faculdade);

        if ($stmt->execute()) {
            return $this->conn->lastInsertId();
        }
        return false;
    }

    public function deletar($id)
    {
        $query = 'DELETE FROM medicos WHERE id = :id';
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return "Médico deletado";
        }
        return "Erro ao deletar médico";
    }

    public function pesquisarTodos()
    {
        $query = 'SELECT * FROM medicos';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function pesquisarPorId($id)
    {
        $query = 'SELECT * FROM medicos WHERE id = :id';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar(Medico $medico)
    {
        $query = 'UPDATE medicos SET nome = :nome, cpf = :cpf, especialidade = :especialidade, faculdade = :faculdade WHERE id = :id';
        $stmt = $this->conn->prepare($query);

        $id = $medico->getId();
        $nome = $medico->getNome();
        $cpf = $medico->getCpf();
        $especialidade = $medico->getEspecialidade();
        $faculdade = $medico->getFaculdade();

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':especialidade', $especialidade);
        $stmt->bindParam(':faculdade', $faculdade);

        if ($stmt->execute()) {
            return 'Médico atualizado com sucesso.';
        } else {
            return 'Erro ao atualizar médico.';
        }
    }
}
?>