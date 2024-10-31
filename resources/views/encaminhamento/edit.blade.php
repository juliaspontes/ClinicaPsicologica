<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Encaminhamento Psicológico</title>
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
    <h2>Edição de Encaminhamento Psicológico</h2>
</div>

<div class="container flex-grow-1">
    <form method="POST" action="/encaminhamento/{{$encaminhamento->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="data_encaminhamento">Data</label>
            <input type="date" id="data_encaminhamento"
                value='{{$encaminhamento->data_encaminhamento}}' name="data_encaminhamento" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select disabled id="paciente_id" name="paciente_id" class="form-control" required>
                @foreach($pacientes as $p)
                    <option value="{{ $p->id }}"
                        {{ $p->id == $encaminhamento->paciente_id ? 'selected' : '' }}>
                        {{ $p->nome }}</option>
                @endforeach
            </select>
        </div>
        <!-- Observações -->
        <div class="form-group">
            <label for="profissional_encaminhado">Profissional Encaminhando</label>
            <textarea id="profissional_encaminhado" name="profissional_encaminhado" class="form-control" rows="3" required>
                {{ $encaminhamento->profissional_encaminhado }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="descricao_encaminhamento">Descrição do Encaminhando</label>
            <textarea id="descricao_encaminhamento" name="descricao_encaminhamento" class="form-control" rows="2" required>
                {{ $encaminhamento->descricao_encaminhamento }}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<footer>
    <p>&copy; 2024 Clínica de Psicologia - Toledo Prudente. Todos os direitos reservados.</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
