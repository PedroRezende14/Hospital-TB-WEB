<?php
require_once '../config/database.php';
require_once '../controller/PessoaController.php';

$controller = new MedicoController($pdo);

$dados = [
    'nome' => $_POST['nome'],
    'cpf' => $_POST['cpf'],
    'email' => $_POST['email'],
    'idade' => $_POST['idade'],
    'sexo' => $_POST['sexo'],
    'formacao' => $_POST['formacao'],
    'especialidade' => $_POST['especialidade'],
];

$controller->cadastrarMedico($dados);
