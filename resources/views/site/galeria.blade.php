<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
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
        .gallery-container {
            text-align: center; 
            max-width: 800px;
        }
        .gallery-title {
            font-size: 36px;
            margin-bottom: 30px;
            color: #333;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .gallery-item {
            width: 30%; 
            margin: 10px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden; 
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px;
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
    <div class="gallery-container">
        <h1 class="gallery-title">Galeria de Fotos</h1>
        <div class="gallery">
            <div class="gallery-item">
                <img src="\eu.jpg" alt="Imagem 1">
            </div>
            <div class="gallery-item">
                <img src="\eu.jpg" alt="Imagem 2">
            </div>
            <div class="gallery-item">
                <img src="\eu.jpg" alt="Imagem 3">
            </div>
            <div class="gallery-item">
                <img src="\eu.jpg" alt="Imagem 4">
            </div>
            <div class="gallery-item">
                <img src="\eu.jpg" alt="Imagem 5">
            </div>
            <div class="gallery-item">
                <img src="\eu.jpg" alt="Imagem 6">
            </div>
        </div>
    </div>
</body>
</html>
