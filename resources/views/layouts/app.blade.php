<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HypeSneaks - Zapatillas Exclusivas</title>
    <style>
        body { font-family: 'Helvetica Neue', Arial, sans-serif; background: #f4f4f4; color: #333; margin: 0; padding: 0; }
        header { background: #111; color: #fff; text-align: center; padding: 30px 20px; }
        header h1 { margin: 0; font-size: 2.5em; font-weight: 800; letter-spacing: -1px; }
        header p { color: #aaa; margin-top: 10px; }
        .container { max-width: 1200px; margin: 40px auto; padding: 0 20px; }
        .product-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; }
        .product-card { background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); transition: transform 0.2s; }
        .product-card:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(0,0,0,0.1); }
        .brand { color: #888; font-size: 0.85em; text-transform: uppercase; font-weight: bold; letter-spacing: 1px; }
        .price { color: #111; font-weight: 800; font-size: 1.5em; margin: 15px 0; }
        button { background: #111; color: white; border: none; padding: 12px; border-radius: 6px; cursor: pointer; width: 100%; font-weight: bold; font-size: 1em; transition: background 0.2s; }
        button:hover { background: #333; }
    </style>
</head>
<body>
    <header>
        <h1>HypeSneaks</h1>
        <p>Las zapatillas más buscadas de la cultura urbana</p>
    </header>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>