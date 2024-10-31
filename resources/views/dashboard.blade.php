<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            background-color: #ff8c00; /* Cor laranja */
            color: white;
            padding: 10px 20px;
        }
        .navbar .logo {
            font-size: 1.5rem;
            font-weight: 600;
        }
        .sidebar {
            width: 60px; /* Largura inicial da sidebar */
            background-color: #ff8c00; /* Cor laranja */
            color: white;
            height: calc(100vh - 60px); /* Altura total da tela menos a altura da nav */
            position: fixed;
            top: 60px; /* Coloca a sidebar logo abaixo da nav */
            transition: width 0.3s;
            overflow: hidden;
            padding: 10px; /* Adiciona espaço interno */
        }
        .sidebar.expanded {
            width: 200px; /* Largura quando expandida */
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 15px 0; /* Aumenta o espaço entre os itens */
            display: flex;
            align-items: center; /* Alinha os itens ao centro */
            padding: 10px 5px; /* Adiciona espaço interno */
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: background-color 0.3s;
            width: 100%; /* Faz o link ocupar toda a largura do item */
        }
        .sidebar ul li a:hover {
            background-color: #e07b00; /* Laranja mais escuro ao passar o mouse */
        }
        .sidebar .icon {
            width: 24px;
            height: 24px;
            margin-right: 10px; /* Espaço entre ícone e descrição */
        }
        .sidebar .description {
            display: none; /* Inicialmente oculto */
        }
        .sidebar.expanded .description {
            display: inline; /* Mostra descrição quando expandida */
        }
        .content {
            margin-left: 80px; /* Aumenta a margem para o conteúdo */
            padding: 20px;
            flex-grow: 1;
            transition: margin-left 0.3s;
        }
        .sidebar.expanded + .content {
            margin-left: 220px; /* Ajusta a margem quando a sidebar está expandida */
        }
        .btn-primary {
            color: #e07b00; /* Texto branco */
            border: none; /* Remove a borda */
            outline: none; /* Remove o contorno ao focar */
        }
        .board, .novidades {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #007BFF;
            border-radius: 8px;
            background-color: #e9f5ff;
        }
        .table {
        border-collapse: collapse; /* Remove o espaço entre as bordas das células */
        }
        .table th, .table td {
            padding: 10px; /* Reduz o espaçamento interno */
            font-size: 14px; /* Tamanho da fonte menor */
        }
        .table th {
            background-color: #e9f5ff; /* Cor de fundo para cabeçalho */
            font-weight: bold; /* Negrito para os títulos */
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #e9f5ff; /* Cor de fundo alternada */
        }

    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <div class="d-flex justify-content-between w-100">
        <div class="logo">
            <a class="navbar-brand" href="#">
                <img src="https://toledoprudente.edu.br/wp-content/themes/toledoprudente2023/assets/images/logo.png" alt="Logo Toledo" style="height: 30px;">
            </a>
        </div>
        <div class="dropdown">
            <button class="btn btn-link text-white dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item btn-primary">Sair</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <ul>
        <li><a href="/agendamento"><i class="fas fa-calendar icon"></i><span class="description">Agendamento</span></a></li>
        <li><a href="/avaliacao"><i class="fas fa-pencil-alt icon"></i><span class="description">Avaliação</span></a></li>
        <li><a href="/diagnostico"><i class="fas fa-hospital-user icon"></i><span class="description">Diagnóstico</span></a></li>
        <li><a href="/encaminhamento"><i class="fas fa-people-arrows icon"></i><span class="description">Encaminhamento</span></a></li>
        <li><a href="/paciente"><i class="fas fa-users icon"></i><span class="description">Pacientes</span></a></li>
        <li><a href="/prescricao"><i class="fas fa-pills icon"></i><span class="description">Prescrição</span></a></li>
        <li><a href="/problema"><i class="fas fa-bug icon"></i><span class="description">Condição</span></a></li>
        <li><a href="/terapia"><i class="fas fa-hospital-user icon"></i><span class="description">Terapia</span></a></li>
        <li><a href="/tratamento"><i class="fas fa-hand-holding-heart icon"></i><span class="description">Tratamento</span></a></li>
    </ul>
</div>

<!-- Main Content -->
<div class="content" id="content">
    <h3>Bem-vindo a DashBoard!</h3>

    <div class="board">
    <h4>Agendamentos da Semana</h4>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Horário</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamento as $a)
            <tr>
                <td class="align-middle">{{ $a->paciente->nome }}</td>
                <td class="align-middle">{{ \Carbon\Carbon::parse($a->hora_agendamento)->format('H:i') }}</td>
                <td class="align-middle">{{ \Carbon\Carbon::parse($a->data_agendamento)->format('d/m/Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <div class="novidades">
        <h4>Novidades Interessantes da Psicologia</h4>
        <ul>
            <li><strong>Estudo revela:</strong> A prática da meditação pode reduzir a ansiedade em 40%.</li>
            <li><strong>Novidade:</strong> Terapias digitais estão se tornando populares entre jovens adultos.</li>
            <li><strong>Artigo:</strong> A importância da empatia no tratamento psicológico.</li>
            <li><strong>Palestra:</strong> 'Saúde Mental no Ambiente de Trabalho' – 05/11 às 19h.</li>
        </ul>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');

    sidebar.addEventListener('mouseenter', () => {
        sidebar.classList.add('expanded');
    });

    sidebar.addEventListener('mouseleave', () => {
        sidebar.classList.remove('expanded');
    });

    // Ajuste inicial para garantir que a sidebar comece corretamente
    window.onload = () => {
        if (sidebar.classList.contains('expanded')) {
            sidebar.classList.remove('expanded');
        }
    };
</script>
</body>
</html>
