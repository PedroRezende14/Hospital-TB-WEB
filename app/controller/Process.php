<?php

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $contatos = [];

    if (isset($_POST['tipo']) && isset($_POST['descricao'])) {
        foreach ($_POST['tipo'] as $index => $tipo) {
            $descricao = $_POST['descricao'][$index];
            $contatos[] = ['tipo' => $tipo, 'descricao' => $descricao];
        }
    }

    $dados = [
        'nome' => $nome,
        'cpf' => $cpf,
        'contatos' => $contatos,
    ];

    // Configuração do RabbitMQ
    $host = 'localhost'; // Altere para o IP ou nome do container RabbitMQ se necessário.
    $port = 5672;
    $user = 'guest'; // Altere para o usuário configurado no RabbitMQ, se necessário.
    $password = 'guest';
    $queue = 'cadastro_paciente';

    try {
        // Conexão com o RabbitMQ
        $connection = new AMQPStreamConnection($host, $port, $user, $password);
        $channel = $connection->channel();

        // Declarar a fila
        $channel->queue_declare($queue, false, true, false, false);

        // Publicar a mensagem
        $mensagem = new AMQPMessage(json_encode($dados), ['content_type' => 'application/json']);
        $channel->basic_publish($mensagem, '', $queue);

        // Fechar conexões
        $channel->close();
        $connection->close();

        echo "Dados enviados com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao enviar os dados: " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido.";
}
?>


// ob_start();

// require_once '../models/Pessoa.php';
// require_once 'PessoaController.php';
// require_once 'ContatoController.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST["nome"]) && isset($_POST["cpf"])) {
//         $pessoa = new Pessoa();
//         $pessoa->setNome($_POST["nome"]);
//         $pessoa->setCpf($_POST["cpf"]);

//         $pessoaController = new PessoaController();
//         $pessoaId = $pessoaController->inserir($pessoa);

//         if ($pessoaId && !empty($_POST["tipo"]) && !empty($_POST["descricao"])) {
//             $contatoController = new ContatoController();

//             foreach ($_POST["tipo"] as $index => $tipo) {
//                 if (!empty($tipo) && !empty($_POST["descricao"][$index])) {
//                     $contato = new Contato();
//                     $contato->setIdPessoa($pessoaId);
//                     $contato->setTipo($tipo);
//                     $contato->setDescricao($_POST["descricao"][$index]);
//                     $contatoController->inserir($contato);
//                 }
//             }
//         }
//         header('Location: ../views/Cadastro.php');
//         exit;
//     }
// }

// ob_end_flush();
// ?>