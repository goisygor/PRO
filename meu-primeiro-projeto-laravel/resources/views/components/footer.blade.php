<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodapé Exemplo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .footer-links {
            margin: 10px 0;
        }
        .footer-links a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
            transition: color 0.3s;
        }
        .footer-links a:hover {
            color: #ccc;
        }
        .footer-info {
            font-size: 0.9em;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="index.html">Home</a>
                <a href="contato.html">Contato</a>
                <a href="produtos.html">Produtos</a>
            </div>
            <div class="footer-info">
                <p>&copy; 2024 Minha Empresa. Todos os direitos reservados.</p>
                <p>Rua Exemplo, 123 - Cidade, Estado - CEP 00000-000</p>
            </div>
        </div>
    </footer>

</body>
</html>
