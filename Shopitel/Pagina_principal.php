<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopitel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            background-image: radial-gradient(circle at 20% 50%, #69BB59, #20679D, #ffffff); /* Degradado de los colores */
        }
        .background-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.3; /* Ajusta la opacidad según tu preferencia */
            background-image: url('patron.png'); /* Ruta del patrón de fondo */
            z-index: -1; /* Coloca el patrón detrás de todo */
        }
        .header {
            background-color: #ffffff;
            padding: 10px;
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            z-index: 1000;
        }
        .header img {
            height: 50px; /* Ajusta la altura del logo según tu preferencia */
            margin-left: 20px;
        }
        .main-content {
            display: flex;
            margin-top: 70px; /* Espacio para el header fijo */
        }
        .sidebar {
            background-color: #1D8C62; 
            width: 200px;
            height: 100vh;
            padding: 10px;
            box-sizing: border-box;
            position: fixed;
            left: 0;
            top: 70px; /* Espacio para el header fijo */
            transition: transform 0.3s ease;
            transform: translateX(-100%);
        }
        .sidebar.open {
            transform: translateX(0);
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 10px 0;
        }
        .sidebar ul li a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            padding: 10px;
        }
        .content {
            flex: 1;
            padding: 20px;
            margin-left: 220px; /* Espacio para la barra lateral fija */
            text-align: center;
            position: relative; /* Para que los botones se superpongan correctamente */
            z-index: 1; /* Coloca el contenido encima del fondo */
        }
        .button-container {
            margin-top: 20px;
        }
        .button-container img {
            width: 400px; /* Ajusta el tamaño de las imágenes según tu preferencia */
            height: auto;
            margin: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .button-container img:hover {
            transform: scale(1.1); /* Cambia el tamaño de la imagen al pasar el ratón */
        }
        .menu-toggle {
            display: inline-block;
            cursor: pointer;
            color: #1e90ff;
            background-color: #ffffff;
            padding: 10px;
            margin: 10px;
            border: 1px solid #1e90ff;
            border-radius: 5px;
            text-align: center;
            position: fixed;
            top: 15px;
            left: 10px;
            z-index: 1001;
        }
        .footer {
            background-color: #ffffff;
            color: #000000;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .social-icons {
            margin-top: 10px;
        }
        .social-icons a {
            color: #000000;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>

    <div class="background-pattern"></div>

    <div class="header">
        <img src="logo.png" alt="Logo">
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">☰ Menú</div>

    <div class="main-content">
        <div class="sidebar" id="sidebar">
            <ul>
                <li><a href="#opcion1">Acerca de</a></li>
                <li><a href="#opcion2">Quejas y sugerencias</a></li>
                <li><a href="juego.php">Juego
                </a></li>
            </ul>
        </div>

        <div class="content">
            <h1 style="margin-bottom: 20px;">Bienvenido a Shopitel</h1>
            <p style="margin-bottom: 20px;">La página donde compras y vendes.</p>
            <div class="button-container">
                <a href="productos.php"><img src="produ.png" alt="Productos"></a>
                <a href="alimentos.php"><img src="alimen.png" alt="Botón 2"></a>
            </div>
        </div>
    </div>

    <div class="footer">
        Síguenos en nuestras redes sociales:
        <div class="social-icons">
            <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
            <a href="https://api.whatsapp.com/send?phone=4494994020"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <script>
        function toggleMenu() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open');
        }
    </script>

</body>
</html>
