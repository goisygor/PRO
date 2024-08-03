<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="public\imgs">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: calc(33% - 20px);
            box-sizing: border-box;
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-image img {
            width: 100%;
            height: auto;
        }
        .product-info {
            padding: 15px;
            text-align: center;
        }
        .product-info h2 {
            font-size: 1.5em;
            margin: 0;
        }
        .product-info p {
            margin: 10px 0;
            color: #555;
        }
        .product-price {
            font-size: 1.2em;
            color: #e74c3c;
            margin: 10px 0;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    
    <header>
        <h1>Loja de Produtos</h1>
    </header>
    <nav>
        <a href="/">Home</a>
        <a href="/contato">Contato</a>
        <a href="/produtos">Produtos</a>
    </nav>

    <div class="container">
      
        <div class="product-card">
            <div class="product-image">
                <img src="imagens/1.jpg" alt="Produto 1">
            </div>
            <div class="product-info">
                <h2>Produto 1</h2>
                <p>Descrição detalhada do Produto 1. Ideal para uso diário e muito resistente.</p>
                <p class="product-price">R$ 99,99</p>
            </div>
        </div>
       
        <div class="product-card">
            <div class="product-image">
                <img src="imagens/2.png" alt="Produto 2">
            </div>
            <div class="product-info">
                <h2>Produto 2</h2>
                <p>Descrição detalhada do Produto 2. Perfeito para quem procura qualidade e conforto.</p>
                <p class="product-price">R$ 149,99</p>
            </div>
        </div>

        
        <div class="product-card">
            <div class="product-image">
                <img src="imagens/3.png" alt="Produto 3">
            </div>
            <div class="product-info">
                <h2>Produto 3</h2>
                <p>Descrição detalhada do Produto 3. Excelente escolha para quem valoriza estilo e durabilidade.</p>
                <p class="product-price">R$ 79,99</p>
            </div>
        </div>
       
    </div>

    <footer>
        <p>&copy; 2024 Minha Empresa. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
  -->
<div class="container">
        <h1>Produtos</h1>
        <a href="" class="btn btn-primary">Adicionar Produto</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->quantidade }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


