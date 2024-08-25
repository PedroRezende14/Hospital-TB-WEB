<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento Médico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .carousel-item {
            text-align: center;
            position: relative;
        }
        .carousel-item img {
            display: block;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
        }
        .carousel-item .carousel-caption {
            position: static;
            margin-top: 15px;
        }
        .carousel-item h5, .carousel-item p {
            margin: 0;
            padding: 0;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black;
        }
        .espaco{
            margin: 2% auto;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Atendimento Médico</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="app/views/Cadastro.php">Cadastro de Paciente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="app/views/CadastroMedico.php">Cadastro de Paciente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="app/views/PesquisarContatos.php">Lista Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="app/views/PesquisarPessoa.php">Lista paciente</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Cabeçalho -->
    <header class="bg-primary text-white text-center py-3 espaco">
        <h1>Bem-vindo ao Sistema de Atendimento Médico</h1>
    </header>

    <!-- Carrossel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="app/img/Medica.jpg" class="d-block" alt="Slide 1">
                <div class ="espaco">
                    <h5>Bem-vindo ao nosso sistema</h5>
                    <p>Seu atendimento médico na palma da mão.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="app/img/medico.jpg" class="d-block" alt="Slide 2">
                <div class ="espaco">
                    <h5>Cadastrar Médico</h5>
                    <p>Adicione novos médicos ao sistema com facilidade.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="app/img/pasciente.jpg" class="d-block" alt="Slide 3">
                <div class ="espaco">
                    <h5>Realizar Consulta</h5>
                    <p>Marque consultas de forma rápida e prática.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <!-- Botões de Ação -->
    <div class="container text-center mt-5">
        <a href="app/views/Cadastro.php" class="btn btn-primary btn-lg mx-2">Cadastrar Paciente</a>
        <a href="app/views/PesquisarContatos.php" class="btn btn-secondary btn-lg mx-2">Lista de contatos</a>
        <a href="app/views/PesquisarPessoa.php" class="btn btn-success btn-lg mx-2">Lista de Pacientes</a>
        <a href="app/views/CadastroMedico.php" class="btn btn-primary btn-lg mx-2">Cadastrar Medico</a>
        <a href="app/views/PesquisarMedico.php" class="btn btn-success btn-lg mx-2">De medico de Pacientes</a>
    </div>
   
    <!-- Rodapé -->
    <footer class="bg-primary text-white text-center py-3 mt-5">
        <p>&copy; 2024 Sistema de Atendimento Médico. Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
