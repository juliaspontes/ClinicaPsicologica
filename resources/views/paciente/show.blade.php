<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Paciente</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header {
            background-color: #ff8c00;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
            background-color: white; /* Fundo branco */
            padding: 15px; /* Espaçamento interno */
            border-radius: 8px; /* Bordas arredondadas */
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Sombra leve */
        }
        .label {
            font-weight: bold; /* Destaque para os rótulos */
        }
        .container {
            margin-top: 30px;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>
<body>

<div class="header">
    <h2>Registro de Paciente</h2>
</div>

<div class="container flex-grow-1">
<div class="form-group">
        <label class="label" for="nome">Nome:</label>
        <p>{{$paciente->nome}}</p>
    </div>
    <div class="form-group">
        <label class="label" for="data_nascimento">Data:</label>
        <p>{{ \Carbon\Carbon::parse($paciente->data_nascimento)->format('d/m/Y') }}</p>
    </div>
    <div class="form-group">
        <label class="label" for="endereco">Endereço:</label>
        <p>{{$paciente->endereco}}</p>
    </div>
    <div class="form-group">
        <label class="label" for="telefone">Telefone:</label>
        <p>{{$paciente->telefone}}</p>
    </div>
    <div class="form-group">
        <label class="label" for="email">E-mail:</label>
        <p>{{$paciente->email}}</p>
    </div>
</div>

<footer>
    <p>&copy; 2024 Clínica de Psicologia - Toledo Prudente. Todos os direitos reservados.</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
