<?php
ob_start();

require_once '../models/Medico.php';
require_once 'MedicoController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nome"]) && isset($_POST["cpf"]) && isset($_POST["especialidade"]) && isset($_POST["faculdade"])) {
        $medico = new Medico();
        $medico->setNome($_POST["nome"]);
        $medico->setCpf($_POST["cpf"]);
        $medico->setEspecialidade($_POST["especialidade"]);
        $medico->setFaculdade($_POST["faculdade"]);

        $medicoController = new MedicoController();
        $medicoId = $medicoController->inserir($medico);

        if ($medicoId) {
            // Redirecionamento após inserção bem-sucedida
            header('Location: ../views/Cadastro.php');
            exit;
        } else {
            // Tratamento de erro caso a inserção falhe
            echo "Erro ao cadastrar médico.";
        }
    } else {
        // Tratamento de erro caso algum campo esteja faltando
        echo "Todos os campos são obrigatórios.";
    }
}

ob_end_flush();
?>