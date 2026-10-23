<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual Mi Barrio</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        header {
            background-color: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        nav a:hover {
            color: #ffc107;
        }

        main {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .bienvenida {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 8px #ddd;
        }

        .bienvenida h2 {
            color: #222;
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <header>
        <h1>TIENDA VIRTUAL MI BARRIO</h1>
        <p>Todo lo que necesitas, cerca de ti</p>
    </header>

    <nav>
        <a href="/">Inicio</a>
        <a href="#productos">Productos</a>
        <a href="#contacto">Categorias</a>
        <a href="#contacto">Contacto</a>
    </nav>

    <main>
        <section class="bienvenida">
            <h2>¡Bienvenidos a mi tienda virtual!</h2>
            <p>
                Encuentra productos de tu barrio de forma fácil,
                rápida y cómoda.
            </p>
        </section>

        <section id="productos">
            <h2>Nuestros productos</h2>
            <p>Próximamente encontrarás aquí nuestro catálogo de productos.</p>
        </section>

        <section id="contacto">
            <h2>Contacto</h2>
            <p>¡Estamos para ayudarte!</p>
            <a href ="#"> ver productos <a/a>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Tienda Virtual Mi Barrio. Todos los derechos reservados.</p>
    </footer>

</body>
</html>