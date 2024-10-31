<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica de Psicologia - Toledo Prudente</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Fonte Poppins */
            background-color: #f8f9fa; /* Fundo claro */
        }
        .navbar {
            background-color: #ff8c00; /* Laranja escuro */
            padding: 10px 20px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .nav-link {
            color: #fff; /* Texto branco */
            margin: 0 15px; /* Margem entre os links */
        }
        .nav-link:hover {
            color: #fff; /* Manter a cor branca ao passar o mouse */
            text-decoration: none; /* Remover sublinhado ao passar o mouse */
        }
        .btn {
            margin: 0 5px; /* Margem entre os botões */
            border-radius: 20px; /* Bordas arredondadas */
            color: #ff8c00; /* Texto laranja escuro */
            background-color: white; /* Fundo branco */
        }
        .btn:hover {
            background-color: white; /* Manter fundo branco ao passar o mouse */
            color: #ff8c00; /* Texto laranja escuro */
            border: 1px solid #ff8c00; /* Adicionar borda laranja escuro ao passar o mouse */
        }
        .carousel-item {
            height: 300px; /* Altura do carrossel */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #f0f0f0; /* Fundo do carrossel */
        }
        .carousel-item h5 {
            font-size: 1.5rem; /* Tamanho do texto das novidades */
            color: #333; /* Cor do texto */
        }
        .depoimento {
            margin-bottom: 30px; /* Espaçamento entre depoimentos */
            display: flex;
            align-items: center; /* Alinhar verticalmente */
            justify-content: space-between; /* Espaçar os itens */
        }
        .depoimento img {
            border-radius: 50%; /* Tornar a imagem circular */
            width: 120px; /* Largura da foto */
            height: 120px; /* Altura da foto */
            object-fit: cover; /* Manter proporção */
            margin-left: 15px; /* Espaçamento à esquerda da imagem */
        }
        .depoimento p {
            flex: 1; /* Permitir que o texto ocupe o espaço restante */
            margin: 0 15px; /* Margens laterais */
            text-align: left; /* Alinhar texto à esquerda */
            font-size: 1.25rem; /* Aumentar o tamanho do texto */
        }
        footer {
            background-color: #343a40; /* Cor de fundo do footer */
            color: white; /* Cor do texto */
            padding: 20px 0; /* Espaçamento interno */
        }
        footer .container {
            display: flex;
            flex-direction: column; /* Alinhamento vertical */
            align-items: center; /* Centralizar conteúdo */
            text-align: center; /* Centralizar texto */
        }
        footer .links {
            margin-top: 10px; /* Espaçamento superior */
        }
        footer a {
            color: white; /* Cor dos links */
            text-decoration: none; /* Remover sublinhado */
            margin: 0 10px; /* Margem entre os links */
        }
        footer a:hover {
            text-decoration: underline; /* Sublinhar ao passar o mouse */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: #ff8c00;">
    <a class="navbar-brand" href="#">
        <img src="https://toledoprudente.edu.br/wp-content/themes/toledoprudente2023/assets/images/logo.png" alt="Logo Toledo" style="height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#sobre" style="color: white;">Sobre Nós</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#depoimentos" style="color: white;">Depoimentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#agendar" style="color: white;">Horários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#profissionais" style="color: white;">Profissionais</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link" style="color: white;">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn" style="background-color: white; color: #ff8c00;">Entrar</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn" style="background-color: white; color: #ff8c00;">Registrar</a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </li>
        </ul>
    </div>
</nav>


<div class="container mt-5">
    <header class="text-center mb-5">
        <h1>Bem-vindo à Clínica de Psicologia da Toledo Prudente</h1>
        <p class="lead">Cuidar da mente é um ato de amor.</p>
    </header>

    <!-- Carrossel de Novidades -->
    <section id="novidades" class="mb-5">
        <h2 class="text-center mb-4">Novidades da Clínica</h2>
        <div id="novidadesCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h5>Início do novo programa de terapia em grupo!</h5>
                </div>
                <div class="carousel-item">
                    <h5>Agende sua consulta online com facilidade!</h5>
                </div>
                <div class="carousel-item">
                    <h5>Novos profissionais especializados na equipe!</h5>
                </div>
            </div>
            <a class="carousel-control-prev" href="#novidadesCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#novidadesCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </section>

    <!-- Depoimentos -->
    <section id="depoimentos">
        <h2 class="text-center mb-4">Depoimentos</h2>

        <div class="depoimento">
            <p>"A terapia me ajudou a entender melhor meus sentimentos e emoções."</p>
            <img src="data:image/jpeg;base64,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" alt="Depoente 1">
        </div>

        <div class="depoimento">
            <img src="data:image/jpeg;base64,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" alt="Depoente 2">
            <p>"Aprendi a lidar com a ansiedade e me sinto mais leve."</p>
        </div>

        <div class="depoimento">
            <p>"A equipe da clínica é maravilhosa! Muito atenciosos."</p>
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPEA8QDxAPEBAPDw8PEBAQEA8QDxAQFRUWFhcRFRUYHSggGB0lHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFxAQFy0dHR8rLS0tLS0tKy0rLS0tLSstKysrLSstLSstLS0tLS0tKysuLS0tKy0tLS0tLSstLS03Lf/AABEIAKsBJgMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAABAgAEBQMGB//EAD8QAAIBAgMFBQUFBgUFAAAAAAABAgMRBCExBRJBUWEGInGBkRMyobHBBzNSYtEUI0Jy8PEkU4KS4RVDc6Ky/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQF/8QAHxEBAQEAAgMBAAMAAAAAAAAAAAECAxEhMUESIjJR/9oADAMBAAIRAxEAPwC0h0KhkfOe86HQqGRQyGQqGQQyCBBQBGAggQIAgEhCFEIRnjtv9uqdJulhIftFXRy/7UHyus5P08SydlvT2LZx/bKX+bTyuvfhqvM+Q7Qr47Gu+IrNR/y45U1/oWXm7mZX2Pu6S9YmpMev0WcnXcy+7QqKSvFqS5ppr4DHwXB4vE4V71CtOnne0JNRb0zi8n5o932b+0OM92ljkqcskq0V+7k+c1/D46eBbx/Z5Ym/lnT35BYSTSaaaaTTWaa5oY5tgQhAIAIGAABIUAASAKAYUAAYwoAAwsDABCECqyHQqHRgMhkKh0AyCgIZFBQUAYIKCAIBCAIEIQ54msqcJzekISm/BK4Hju1+16lWpLA0G4xUV+0VFrZ2apxfVa+Jn4DY0IRSSSXQXZUcp1Kj71STqTlrdybbz/rQu/8AVqMbbzaXgTXd8T07YkzO77dKmDglwMrG0VZ5cDYoY/DVco1U3yfdfxKm0KcVnfI567nx2zZfrx2Mp24GdKHM9BtGdNfxIwq1aGdn8D08Vtnp5eeZl9vZfZ52ilSqQwdWV6VS6oN6wnr7O/J8Op9MPgWGqNOM4Pv05RnF8pRd18Uj7tgsQqtKlVWlSnCovCST+peSfXLFdiBAc20AEgAAwgABGEAAAEAAYAgAAGFgKAAJAquh0KhkYDIZAQyAKGQEMgCFAQUVBCQhAxCEAJmdpZWwmI/NT3P9zUfqaZl9poXwlfpGMvSSf0KrxMIX3Y6QVnK3Hki1jMbh40++6cVok7Xb+ZxwlLfurtZWyditiNlQjCUIYeV5NuUlWa3nZrNvPRvK5nFn2u+pevEZuGxFF1Fu2zeTTyzNbtBRlGjv3yyK+zOz8oyjUqxjBQtuRXem7Zr+7L3aFp4e2d78dGNXM1OquJr83udPJbN2fLFTfetGPvP6A2jhqNF7kXCb495NgwjlC8VnCTu4NtKVuDtquhzx0ZzqOcoO75Zx8k8l4Hp8d+3ksvXfSUKKTUo5Z5rofYOyE74HC9Ke5/tbj9D49hVuu2fgz7F2Tp7uCw60vBy8pScl8GTk9JhrkIA5NoQhAAyEABABAAGAIAAAIAABhAUAgQAcEOhEMjCnQyEQ6AZDIRDoAhQAhBCAKAKCAIBPKbW2rXdXEUrblCFqbl3W5Xgm27rLW2p6o8d2hoKdapFrub0ZTlrm4RSbjq0rcDG71HbgkuvLhsWMd7M0dq4ylQi5ZN8F1POVcQ6c5bv4n6GRjMZKtiI07OSp2bWWcnZ38roZxdWul3Mxv4rbcoOmpYaVZzjvJp2inyXDIrdoe0cJ0IwdOUJatPgdamNg1uyxFKilZJJpyMXa1GlKKbrud/dbs/RnTOZfbGta+MaGPg8rNZ3vlkaeExilC+nNGG6WfdlGXzF9rKD5dODPRrimp4ebPNrN8tecN6Vz2XYLtDVqVng6kt+EKO9SlupOKjZbl1qrPjyPC0ar8mjX+zSbePhycK3o4tv5Ifj+KXfen14hCHBtCEIAABYAIAgAIAhAAAIAABhYCgEIQCuh0Ih0YUyGQqGQDIZCIZAMgoCCARhQhBCBEAJl7Z2fKonOlue1UWrTbjGXK7Sfy4moELLZ6fONqYKdCfs5venuQk5LSUmrtrpe/ocMHsunW9qpJpzSe9F2kmstfJHoe3sFFUKts7yhJ/l1Xxv6mNs6ssmieZfDtLNTy2dg4KhhaKjChGtWV7upUVOEu61e6Taf/JYxO3cV3FLDbLpuE6k4p1K0rKV9LQtdJ634GZiXKS7rafQ8ttLA4lttu50zv/U1jPX1Y2tjJVHKM6eD3rNJ0YSVo97W+vvXPMfs6SfHqWKmGnF975iS0O+fXt5d9d+ulnZGGniKsKULb1SW5G+i6votT6J2J7JPBN1q1nXlFwtGW9GEW7uzstUo/Hnlk/ZnsduU8VL3YXp0+s3bel5LLzfI+iHPe/kXOftQhCHNtAMIGACEABGAgAIAIAAQgAIxQsBRABABwQ6EQ6MKZDIVDIBkMhUEBkECCAQgQUEEIAgQICAea7apSjRg+PtG/JRX1PDqpKg7fw8HyPadqat60I/hp385N/ojAxuGUkZ/XV8vRnPeXHD7eh7su67a8CvtLbNNtWnfojK2jsqUc0m10zMOrTadmn8T0Y486+vPvl3n4v43H70nZ3RXjUbZXSHovM7zMk6ea6tvdfWfs1qXwlSP4K8l5OMX+p608J9mFbLEw/8AFNf+yfyR7s8u/wCz0T0hCAMqhCAAgGQjAACEKABhAwIKEAEAQBRCEIBwQyEQyMKdDJiIZAOmMmIggOMImG4DkQobgMEoYjalOElBPfm892Nslzb4FKttKUt5e6lll+puYtamLWtVxUI6vNcFr58jB27tqvCVKNBQipbznKS33layXBavPoCM8nwurGfXeefC6f1N3HWfHt1nFPqpWrTnNzqPelLV2S0VtF4Akx6sORXk9bnjtdZHT2yWTV0eZ29SgndaybsuSNrFVO6+Z5LHSlKTbuduDPd7cefXWeuleTRKazJYiPa+e0sHtWthZxq0J7s1lzjKPGMlxTPabO+0um91YjDzi3ZOVGSnG/PdlZr1Z881yHpUePoZuc323n9W+H2/Z22MPiEvY1YSbV9y6U14xeZePh1Ocobu63GW8pKSylFrinwPa7K7bTjuwrwVT88cp+LWjOWuLr09H5r3gCjs7a1HEXVOXeWbhJWlbnyfkXTlZ0yICAAgCAZRAEYGBAEYAIAIAqEAQo4oY5pjJmB0QUImMmQMhhUFFDIk6iiryaS5sDlZXZhVMQ6labfu0u7FcL8ZfQ3jH6bzn9NSrtFJ2irvrln4GBtTa8oxlKTu81CHC/NoavifZwc3rJ7sPF8TDr03Oq4y0VpeTTO0zJ6dpmRd2XvXdST71RLPqaOJekedmyvSSSUeB3re9C/4bs02es7R9CvPNby8/wBf66Haq7x8Wc6b3QK9OnZ2ej06dBcVhORYxEOMbtcuK/VFeWLys8+TR5uXh+5JXnsfOSus8jK/ZpzejsenhTU5Xkk/Q0nhoJZRXkc86ufHTO+Oavl4KrgpLhkVZws7HssZh1LLurp/Yz1s6N9N75eh6OPWr7jhvgnxj4TDXzenz6Iu0sPa7lw4fQ0vZKOqzS0EnDuPm2js3njmYpSpJJy5ZnPAq73nx08CxtJWpPq4r1Y9GKik+aVvEq9eXehWlGd4Ozjo+J6nZ3alxVq6cktWl319GeUw0bNX8Wd8VSvC65peRmyX2XPcfSMHjadaKnSkpJ+TXiuB3PmFDaM6VbdpytuxTv1f9j3Gw9tRxC3ZWjVirtcJL8UTjvj68uNz01xWS4LmGUIwXBcCMBGwXAhAXBcKJAXIUcEMhEMjAdDIRDIB0FCoFSooxcnok2IK2Or/AMK4a+JlpW3+dSS9DpUm3m9WrvzKlWp8j1ZnU6erM6jN2viN+vTor3aa3md5wtWT/FTj8P7mTgJb2IqyeedjXxD79J9F6PI0R2pZtXO2Ll30uUUg0l3orhkc09+pN/msiNO9V91epR327lvGVLR8DNoTu/FhO1iM34PgV61m81Z84uzfjzOsnmcMTlmBzVF8Jx8JK3yOsYT0vT5ZNv6Aoc35HeM730KRXeHtrJvwVvmJN2VopRvlfWT8yy2VZ5voiFVty48qat0HlkSehTpj7bdlGP5izRS3F5f2K+2I/dv8xaoLK3gy/GJ7rrThmi3QV7o5Ulkd8Osr9CNvNup+/rP86ivJI1MLiXCUJp2lGSkmul8vPTzMaj99Wb0jORbp1XJ3/hSdl48TTz5vh9Yo1VOMZLSUVJeDVx7mD2Rxe/RlBvOlLL+WWa+O8blzyanV6Yo3BcALkBBcALgG5BSXANyC3IUc0MhUMjAZDIVDIBkZ+2q1owjxnNLyWf6F9GBtyt/iKEPyyfmb453pvjn8i1Z6lXEz7reWQ055v0KU5d2ouUbnpehl7LVt6X4nJm1WzlSV7dxX9TCwT0X5rG/UXeg+UUviwT0tqW7Gc+OcY+YlKSpQu/eeYteorRXW5TxFVy8OVyDpWqOUJvLQqbPqXT+JaoxvCfgZOBlnJdSo1JTFxDvH1OTHlLugJTmreB3vZJcynRefqWL3BDt5M4RzR3krR6s5PKwacqz0QKbvcGIZMMEUtpwvB842kChU3lHyLdeN7roZ+Ddm1yZWL7aN8rcW0W5StG3O5Qg+8i1Wll4J/qRp5WrO9apHhvbz6tpF+DMqb/fz/m+hoQkbebF9vTdksVu4hRvlVg4eazXyfqe3ufLcFiHTqU5L+GUZejufUFJNJrRq68Dz8089ro1wXBcFzkyILguC4BBclwAEgCFCIZCoKOYdDIRDFDI8htyv/jKb6Sj8D1lR92Xgzwu2ZNYil4/Q7cM9124p9W69aKyldX4/qU5StN53U6cllzVn+p1xRTgu9b+b5HZ1rngo963U2qkrNdDHwf3nmaFZ5+gqZ9Bi692rcMjk5ZI4VH/9JfMNR5AaeAlvRqce76GJTe7VkjX2X7s/5WY9X71grRnUy8gUn3Sre78i1R91+YI4033mXYZlCnq/65l+lw8gsPJnCep3ev8AXQr1dfUKrV3qHCnOpx8jrRVvgGRrPveRn2tJ9S9iShX18ypVjBVLu/L+kWMRKyl4GfgXb1Rbxb7rBPTy8vvp+P0LlGpcoz+8qvx+RYwuqNPJx3ys1Z2lC2ufofTOz+I9phqT4xW4/wDTl8rHy5/eL+T9T33YmT9lUXBSi15r/g5cvp0vp6S4GQB5mUAQDAICAANyAIUf/9k=" alt="Depoente 3">
        </div>
    </section>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div>
            <p>&copy; 2024 Clínica de Psicologia - Toledo Prudente. Todos os direitos reservados.</p>
        </div>
        <div class="links">
            <a href="#sobre">Sobre Nós</a> | 
            <a href="#novidades">Novidades</a> | 
            <a href="#contato">Contato</a>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2
