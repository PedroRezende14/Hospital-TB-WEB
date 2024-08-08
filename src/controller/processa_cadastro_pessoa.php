<?php
require_once '../config/database.php';
require_once '../controller/PessoaController.php';
$controller = new PessoaController($pdo);

$dados = [
    'nome' => $_POST['nome'],
    'cpf' => $_POST['cpf'],
    'idade' => $_POST['idade'],
    'doenca' => $_POST['doenca'],
    'prioridade' => $_POST['prioridade'],
    'tipo_sanguineo' => $_POST['tipo_sanguineo'],
    'observacoes' => $_POST['observacoes'],
];

$controller->cadastrarPaciente($dados);
