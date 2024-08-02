<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            color: white;
            padding: 10px 20px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
            display: block;
            transition: background-color 0.3s, color 0.3s;
        }
        nav ul li a:hover {
            background-color: #555;
            color: #fff;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/contato">Contato</a></li>
            <li><a href="/produtos">Produtos</a></li>
        </ul>
    </nav>

</body>
</html>
