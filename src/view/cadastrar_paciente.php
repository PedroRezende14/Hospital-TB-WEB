<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Atendimento Médico</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8001/#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastrar_medico.php">Cadastrar Médico</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastrar_paciente.php">Cadastrar Paciente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="realizar_consulta.php">Realizar Consulta</a>
                </li>
            </ul>
        </div>
    </nav>



    <div class="container mt-5">
        <h2 class="text-center">Cadastro de Pessoa</h2>
        <form id="cadastroForm" action="../controller/processa_cadastro_pessoa.php" method="post" onsubmit="return validarFormulario()">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade" required>
            </div>
            <div class="form-group">
                <label for="doenca">Doença</label>
                <input type="text" class="form-control" id="doenca" name="doenca">
            </div>
            <div class="form-group">
                <label for="prioridade">Prioridade</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="prioridade" id="prioridade1" value="1" required>
                    <label class="form-check-label prioridade-1" for="prioridade1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="prioridade" id="prioridade2" value="2" required>
                    <label class="form-check-label prioridade-2" for="prioridade2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="prioridade" id="prioridade3" value="3" required>
                    <label class="form-check-label prioridade-3" for="prioridade3">3</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="prioridade" id="prioridade4" value="4" required>
                    <label class="form-check-label prioridade-4" for="prioridade4">4</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="prioridade" id="prioridade5" value="5" required>
                    <label class="form-check-label prioridade-5" for="prioridade5">5</label>
                </div>
            </div>
            <div class="form-group">
                <label for="tipo_sanguineo">Tipo Sanguíneo</label>
                <select class="form-control" id="tipo_sanguineo" name="tipo_sanguineo" required>
                    <option value="">Selecione</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="form-group">
                <label for="observacoes">Observações</label>
                <textarea class="form-control" id="observacoes" name="observacoes" maxlength="100" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <script src="scripts.js"></script>
</body>
</html>
