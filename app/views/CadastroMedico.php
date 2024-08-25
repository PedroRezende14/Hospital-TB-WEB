<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="styler.css">
</head>

<body>

    <h1 class="titulo-painel">Cadastro de Medico</h1>
    <br>
    <a href="../../index.php"><button type="button" class="botao-voltar">Voltar</button></a>


    <div class="formulario-cadastro">
        <form id="cadastroForm" action="../controller/ProcessMedico.php" method="post">

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" required>

            <label for="cpf">CPF:</label>
            <input name="cpf" id="cpf" type="text" required>

            <label for="especialidade">Especialidade:</label>
            <input name="especialidade" id="especialidade" type="text" required>

            <label for="faculdade">Faculdade:</label>
            <input name="faculdade" id="faculdade" type="text" required>

            <button type="submit">Enviar</button>

        </form>
    </div>

    <script>
     

        document.getElementById('cadastroForm').addEventListener('submit', function (event) {
            const cpf = document.getElementById('cpf').value;
            const contatos = document.querySelectorAll('.contato');

            if (!/^\d{11}$/.test(cpf)) {
                alert('Por favor, insira um CPF válido.');
                event.preventDefault();
                return;
            }

            for (let i = 0; i < contatos.length; i++) {
                const tipo = contatos[i].querySelector('select').value;
                const descricao = contatos[i].querySelector('input').value;

                if (tipo === 'email' && !/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(descricao)) {
                    alert('Por favor, insira um email válido.');
                    event.preventDefault();
                    return;
                }

                if (tipo === 'celular' && !/^\d{10,11}$/.test(descricao)) {
                    alert('Por favor, insira um número de telefone válido.');
                    event.preventDefault();
                    return;
                }
            }
        });
    </script>
</body>

</html>
