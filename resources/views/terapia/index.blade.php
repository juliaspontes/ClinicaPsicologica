<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Terapias Psicológicas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Garante que o corpo ocupe pelo menos a altura da tela */
        }
        .header {
            background-color: #ff8c00;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-primary {
            background-color: #ff8c00; /* Cor laranja */
            color: white; /* Texto branco */
            border-radius: 20px; /* Bordas arredondadas */
            border: none; /* Remove a borda */
            outline: none; /* Remove o contorno ao focar */
        }
        .btn-primary:hover {
            background-color: #e07b00; /* Laranja mais escuro ao passar o mouse */
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
            text-align: center;
            margin-top: auto; /* Empurra o footer para o fundo */
        }
        .new-record {
            margin: 20px 0; /* Espaçamento em torno do botão */
        }
    </style>
</head>
<body>

<div class="header">
    <h2>Gerenciar Terapias Psicológicas</h2>
</div>

<div class="container mt-4 flex-grow-1">
    <div class="new-record text-left">
        <a href="/terapia/create" class="btn btn-primary">
            Novo Registro
        </a>
        <a href="/dashboard" class="btn btn-primary">
            Retornar
        </a>
    </div>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Data da Sessão</th>
                <th>Paciente</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($terapia as $a)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($a->data_sessao)->format('d/m/Y') }}</td>
                    <td>{{ $a->paciente->nome }}</td>
                    <td>
                        <a href="/terapia/{{ $a->id }}" class="btn btn-secondary">
                            Ver Registro
                        </a>
                        <a href="/terapia/{{ $a->id }}/edit" class="btn btn-warning">
                            Alterar Registro
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<footer>
    <p>&copy; 2024 Clínica de Psicologia - Toledo Prudente. Todos os direitos reservados.</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
