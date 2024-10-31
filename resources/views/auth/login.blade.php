<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Clínica de Psicologia</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('https://example.com/background-image.jpg'); /* URL da imagem de fundo */
            background-size: cover; /* Cobrir toda a tela */
            background-position: center; /* Centralizar a imagem */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Altura total da tela */
            color: white; /* Cor do texto */
        }
        .container {
            max-width: 400px;
            background-color: rgba(255, 140, 0, 0.8); /* Cor de fundo do formulário com transparência */
            padding: 30px; /* Espaçamento interno */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Sombra */
        }
        .btn-primary {
            background-color: #fff; /* Cor do botão */
            color: #ff8c00; /* Cor do texto do botão */
            border: none;
        }
        .btn-primary:hover {
            background-color: #e67e22; /* Cor ao passar o mouse */
            color: white; /* Texto branco ao passar o mouse */
        }
        .form-label {
            font-weight: 600; /* Texto mais destacado */
        }
        .text-center {
            margin-bottom: 20px; /* Espaçamento inferior */
        }
    </style>
</head>
<body>

<div class="container">
    <header class="text-center mb-4">
        <img src="https://toledoprudente.edu.br/wp-content/themes/toledoprudente2023/assets/images/logo.png" alt="Logo Toledo" style="width: 150px; margin-bottom: 15px;">
        <p class="lead">Realize autenticação!</p>
    </header>

    <form method="POST" action="/login"> <!-- Ajuste a rota conforme necessário -->
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" class="form-control" type="email" name="email" required autofocus autocomplete="username" />
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">Senha</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="form-check mb-4">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
            <label for="remember_me" class="form-check-label">Lembrar de mim</label>
        </div>

        <div class="d-flex justify-content-between">
            <a class="text-light" href="/password/request">Esqueceu sua senha?</a>
            <button type="submit" class="btn btn-primary">
                Entrar
            </button>
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
