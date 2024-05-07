<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <style>
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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFDAFF;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            padding-top: 80px; 
        }
        .container {
            width: 80%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 20px;
            width: 300px;
        }
        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #78287E;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #6b226e;
        }
        p {
            color: #666;
            line-height: 1.6;
            font-size: 16px;
            margin-bottom: 10px;
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
        <div class="card">
            <h2>Entre em Contato</h2>
            <form>
                <input type="text" placeholder="Nome" required><br>
                <input type="email" placeholder="Email" required><br>
                <textarea placeholder="Mensagem" rows="6" required></textarea><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div class="card">
            <h2>Informações de Contato</h2>
            <p><strong>Endereço:</strong> Rua Antônio Gregório Ferreira, 180 - Guarapuava, PR</p>
            <p><strong>Telefone:</strong> (42) 98444-0597</p>
            <p><strong>Email:</strong> biancadpteixeira@gmail.com</p>
        </div>
    </div>
</body>
</html>
