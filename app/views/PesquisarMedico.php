<?php
ob_start();
require_once '../models/Medico.php';
require_once '../controller/MedicoController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nome"]) && isset($_POST["cpf"]) && isset($_POST["especialidade"]) && isset($_POST["faculdade"])) {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        if ($id) {
            $medico = new Medico();
            $medico->setNome($_POST["nome"]);
            $medico->setCpf($_POST["cpf"]);
            $medico->setEspecialidade($_POST["especialidade"]);
            $medico->setFaculdade($_POST["faculdade"]);
            $medico->setId($id);

            $medicoController = new MedicoController();
            $medicoController->atualizar($medico);

            header('Location: PesquisarMedico.php');
        }
    }
}
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Médico</title>
    <link rel="stylesheet" href="styler.css">
    <script>
        function validarFormulario() {
            var cpf = document.getElementById('cpf').value;
            cpf = cpf.replace(/[^\d]+/g, '');
            if (cpf.length !== 11) {
                alert('Por favor, insira um CPF válido com 11 dígitos.');
                return false;
            }
            return true; 
        }
    </script>
</head>

<body>

    <h1 class="titulo-painel">Pesquisar Médico</h1>

    <div class="formulario-pesquisa">
        <form action="" method="get">
            <label for="pesquisa">Pesquisar por nome ou CPF:</label>
            <input type="text" id="pesquisa" name="pesquisa" required>
            <button type="submit">Pesquisar</button>
        </form>
    </div>

    <?php
    if (isset($_GET['pesquisa'])) {
        $pesquisa = $_GET['pesquisa'];
        $medicoController = new MedicoController();
        $resultados = $medicoController->pesquisa($pesquisa);

        if (!empty($resultados)) {
            echo "<h2>Resultados da pesquisa:</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Nome</th><th>CPF</th><th>Especialidade</th><th>Faculdade</th><th>Ações</th></tr>";
            foreach ($resultados as $medico) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($medico['nome']) . "</td>";
                echo "<td>" . htmlspecialchars($medico['cpf']) . "</td>";
                echo "<td>" . htmlspecialchars($medico['especialidade']) . "</td>";
                echo "<td>" . htmlspecialchars($medico['faculdade']) . "</td>";
                echo "<td>
                        <a href='AtualizarMedico.php?id=" . $medico['id'] . "'>Editar</a> | 
                        <a href='ExcluirMedico.php?id=" . $medico['id'] . "' onclick='return confirm(\"Tem certeza que deseja excluir este médico?\");'>Excluir</a>
                      </td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum médico encontrado.</p>";
        }
    }
    ?>

</body>

</html>