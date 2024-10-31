<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
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
        .form-group {
            margin-bottom: 15px; /* Espaçamento entre os campos do formulário */
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
        .container {
            margin-top: 30px; /* Espaçamento superior da container */
        }
    </style>
</head>
<body>

<div class="header">
    <h2>Cadastro de Paciente</h2>
</div>

<div class="container flex-grow-1">
    <form method="POST" action="/paciente">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <textarea id="nome" name="nome" class="form-control" rows="1" required></textarea>
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data</label>
            <input type="date" id="data_nascimento" 
                name="data_nascimento" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <textarea id="endereco" name="endereco" class="form-control" rows="1" required></textarea>
        </div>
        <div class="form-group row">
        <div class="col-md-6">
            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<footer>
    <p>&copy; 2024 Clínica de Psicologia - Toledo Prudente. Todos os direitos reservados.</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>