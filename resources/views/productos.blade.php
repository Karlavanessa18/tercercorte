<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Tienda Virtual Mi Barrio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 20px;
        }

        main {
            width: 90%;
            max-width: 1100px;
            margin: 30px auto;
        }

        .productos {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .producto {
            background: white;
            padding: 20px;
            border-radius: 10px;
            flex: 1 1 200px;
            text-align: center;
        }

        .producto h3 {
            color: #222;
        }

        .precio {
            color: #16803c;
            font-weight: bold;
        }

        a {
            color: #087bce;
        }
    </style>
</head>
<body>

    <header>
        <h1>Nuestros productos</h1>
        <p>Tienda Virtual Mi Barrio</p>
    </header>

    <main>
        <p><a href="/">← Volver al inicio</a></p>

        <div class="productos">
            <div class="producto">
                <h3>Arroz</h3>
                <p>Arroz de 1 kg</p>
                <p class="precio">$4.000</p>
            </div>

            <div class="producto">
                <h3>Leche</h3>
                <p>Leche de 1 litro</p>
                <p class="precio">$4.500</p>
            </div>

            <div class="producto">
                <h3>Huevos</h3>
                <p>Huevos frescos</p>
                <p class="precio">$12.000</p>
            </div>
        </div>
    </main>

</body>
</html>