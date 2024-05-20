<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .search-bar {
            text-align: center;
            padding: 20px 0;
            position: relative;
        }
        .logo {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 50px;
            height: auto;
        }
        .galeria-container {
            display: flex;
            justify-content: center;
            position: relative;
            z-index: 1;
        }
        .galeria {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            height: 500px;
            width: 100%;
            position: relative;
        }
        .galeria img {
            width: 40%;
            transition: transform 0.5s ease;
            position: absolute;
            left: 50%;
            transform: translateX(-50%) scale(1);
            opacity: 0;
        }
        .galeria img.active {
            opacity: 1;
        }
        .galeria img:hover {
            transform: translateX(-50%) scale(1.2);
        }
        .whatsapp-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .whatsapp-buttons .button-container {
            width: calc(25% - 20px);
            margin: 10px;
            text-align: center;
        }
        .whatsapp-buttons img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
            cursor: pointer;
            transition: transform 0.5s ease; /* Agregamos una transición para suavizar el cambio */
        }
        .whatsapp-buttons img:hover {
            transform: scale(2.1); /* Al pasar el mouse, la imagen se agranda */
        }
        .whatsapp-buttons .product-info {
            font-size: 14px;
            line-height: 2.4;
        }
    </style>
</head>
<body>
    <div class="galeria-container">
        <div class="galeria">
            <img src="produ.png" alt="Imagen 1" class="active">
            <img src="alimen.png" alt="Imagen 2">
            <img src="logo.png" alt="Imagen 3">
        </div>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Buscar..." id="searchInput" oninput="filterProducts()">
    </div>


    <div class="whatsapp-buttons">
    <div class="button-container" data-product-name="Producto 1">
        <a href="https://wa.me/4491797874"><img src="productos/llavero.jpg" alt="Iman"></a>
        <div class="product-info">
            <p>Imanes</p>
            <p>Precio: $30</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Producto 2">
        <a href="https://wa.me/4495844131"><img src="productos/pixel.jpg" alt="Pixel"></a>
        <div class="product-info">
            <p>Pixel art</p>
            <p>Precio: Por Cotizacion</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Producto 3">
        <a href="https://wa.me/4492315186"><img src="productos/licuadora.jpg" alt="Licuadora Portatil Ninja blast Recargable"></a>
        <div class="product-info">
            <p>Licuadora Portatil Ninja blast Recargable</p>
            <p>Precio: $1,360</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Producto 4">
        <a href="https://wa.me/4492315186"><img src="productos/audifonos.jpg" alt="Audifono Bluetooth"></a>
        <div class="product-info">
            <p>Audifono Bluetooth</p>
            <p>Precio: $425</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Producto 5">
        <a href="https://wa.me/4492315186"><img src="productos/aro.jpg" alt="Dispensador Se Jabon"></a>
        <div class="product-info">
            <p>Dispensador Se Jabon</p>
            <p>Precio: $335</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Producto 6">
        <a href="https://wa.me/XXXXXXXXX"><img src="whatsapp6.jpg" alt="WhatsApp 6"></a>
        <div class="product-info">
            <p>Producto 6</p>
            <p>Precio: $35</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Producto 7">
        <a href="https://wa.me/XXXXXXXXX"><img src="whatsapp7.jpg" alt="WhatsApp 7"></a>
        <div class="product-info">
            <p>Producto 7</p>
            <p>Precio: $40</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Soldadura">
        <a href="https://wa.me/XXXXXXXXX"><img src="whatsapp8.jpg" alt="WhatsApp 8"></a>
        <div class="product-info">
            <p>Soldadura</p>
            <p>Precio: $45</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Secadora">
        <a href="https://wa.me/XXXXXXXXX"><img src="whatsapp9.jpg" alt="WhatsApp 9"></a>
        <div class="product-info">
            <p>Secadora</p>
            <p>Precio: $50</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Llavero">
        <a href="https://wa.me/XXXXXXXXX"><img src="whatsapp10.jpg" alt="WhatsApp 10"></a>
        <div class="product-info">
            <p>Llavero</p>
            <p>Precio: $55</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Wafles">
        <a href="https://wa.me/XXXXXXXXX"><img src="whatsapp11.jpg" alt="WhatsApp 11"></a>
        <div class="product-info">
            <p>Wafles</p>
            <p>Precio: $60</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Linterna 12">
        <a href="https://wa.me/XXXXXXXXX"><img src="whatsapp12.jpg" alt="WhatsApp 12"></a>
        <div class="product-info">
            <p>Producto 12</p>
            <p>Precio: $65</p>
        </div>
    </div>
</div>
<script>
        const galeria = document.querySelector('.galeria');
        const imagenes = galeria.querySelectorAll('img');
        let indiceImagen = 0;

        function mostrarSiguienteImagen() {
            imagenes[indiceImagen].classList.remove('active');
            indiceImagen = (indiceImagen + 1) % imagenes.length;
            imagenes[indiceImagen].classList.add('active');
        }

        setInterval(mostrarSiguienteImagen, 3000);

        function filterProducts() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const buttonContainers = document.querySelectorAll('.whatsapp-buttons .button-container');

            buttonContainers.forEach(container => {
                const productName = container.dataset.productName.toLowerCase();
                if (productName.includes(searchInput)) {
                    container.style.display = 'block';
                } else {
                    container.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
