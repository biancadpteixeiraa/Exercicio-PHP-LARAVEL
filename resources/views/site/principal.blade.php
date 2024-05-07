<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFDAFF;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        nav {
            background-color: #6b226e;
            padding: 20px 0;
            text-align: center;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
        }
        h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            font-size: 18px;
            line-height: 1.6;
        }
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
            object-position: top; 
        }
        .quote {
            font-style: italic;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('site.principal') }}">Principal</a>
        <a href="{{ route('site.contato') }}">Contato</a>
        <a href="{{ route('site.sobre-nos') }}">Sobre nós</a>
        <a href="{{ route('site.galeria') }}">Galeria</a>
    </nav>
    <div class="container">
        <img src="eu.jpg" alt="Foto de Perfil" class="profile-pic">
        <h1>Bem-vindo à Minha Página Inicial</h1>
        <p>Sou estudante de Engenharia de Software, apaixonada pelo design de interfaces. Atuo como UI & UX Designer em uma startup. Meu foco são as criações de telas web e mobile que priorizam a usabilidade e a experiência do usuário, meu objetivo é simplificar e inovar constantemente, buscando proporcionar a melhor experiência para o usuário final.</p>
        <p class="quote">"O design não é apenas como algo se parece, mas principalmente como algo funciona." - Steve Jobs</p>
    </div>
</body>
</html>
