<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFDAFF; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 80%;
            padding: 50px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .text-container {
            flex: 1;
            text-align: left;
            padding-left: 20px;
        }
        .text-container h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
        }
        .text-container p {
            color: #666;
            line-height: 1.6;
            font-size: 18px;
            margin-bottom: 30px;
        }
        .image-container {
            flex: 1;
            text-align: center;
        }
        .image-container img {
            border-radius: 20px;
            max-width: 70%;
            height: auto;
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
            color: #ffffff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
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
        <div class="image-container">
            <img src="\eu.jpg" alt="Sobre">
        </div>
        <div class="text-container">
            <h1>Sobre mim</h1>
            <p>Sou estudante de Engenharia de Software, apaixonada pelo design de interfaces. Atuo como UI & UX Designer em uma startup. Meu foco são as criações de telas web e mobile que priorizam a usabilidade e a experiência do usuário, meu objetivo é simplificar e inovar constantemente, buscando proporcionar a melhor experiência para o usuário final.</p>
        </div>
    </div>
</body>
</html>
