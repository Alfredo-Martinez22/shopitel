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
            line-height: 1.4;
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
    <div class="button-container" data-product-name="Litro De Agua">
        <a href="https://api.whatsapp.com/send?phone=3344492762"><img src="alimentos/agua.jpg" alt="Litro De Agua"></a>
        <div class="product-info">
            <p>Litro De Agua </p>
            <p>Precio: $30</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Tamales">
        <a href="https://api.whatsapp.com/send?phone=4492762103"><img src="alimentos/tamal.jpg" alt="Tamales"></a>
        <div class="product-info">
            <p>Tamales</p>
            <p>Precio: $13 c/u </p>
        </div>
    </div>
    <div class="button-container" data-product-name="Gomitas Enchiladas">
        <a href="https://api.whatsapp.com/send?phone=4495845177"><img src="alimentos/gomitas.jpg" alt="Gomitas Enchiladas"></a>
        <div class="product-info">
            <p>Gomitas Enchiladas</p>
            <p>Precio: $15</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Galletas">
        <a href="https://api.whatsapp.com/send?phone=4491295224"><img src="alimentos/galletas.jpg" alt="Galletas"></a>
        <div class="product-info">
            <p>Galletas</p>
            <p>Precio: $10</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Producto 5">
        <a href="https://wa.me/7731813054"><img src="alimentos/chese.jpg" alt="Chesecake"></a>
        <div class="product-info">
            <p>Chesecake</p>
            <p>Precio: $30</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Producto 6">
        <a href="https://wa.me/4492889180"><img src="alimentos/pizza.jpg" alt="Pizza"></a>
        <div class="product-info">
            <p>Pizza</p>
            <p>Precio: $25</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Producto 7">
        <a href="https://wa.me/4495136213"><img src="alimentos/chocobanana.jpg" alt="Chochobananas"></a>
        <div class="product-info">
            <p>Chochobananas</p>
            <p>Precio: $15</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Soldadura">
        <a href="https://wa.me/4494986075"><img src="alimentos/Bolis.jpg" alt="Bolis De Leche"></a>
        <div class="product-info">
            <p>Bolis De Leche</p>
            <p>Precio: $20</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Secadora">
        <a href="https://wa.me/4494986075"><img src="alimentos/Bolis.jpg" alt="Bolis De Agua"></a>
        <div class="product-info">
            <p>Bolis De Agua</p>
            <p>Precio: $15</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Palomitas">
        <a href="https://wa.me/4961306792"><img src="alimentos/palomas.jpg" alt="Palomitas"></a>
        <div class="product-info">
            <p>Palomitas</p>
            <p>Precio: $8</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Wafles">
        <a href="https://wa.me/4494994020"><img src="alimentos/1.png" alt="wafles"></a>
        <div class="product-info">
            <p>Wafles</p>
            <p>Precio: $20</p>
        </div>
    </div>
    <div class="button-container" data-product-name="Linterna 12">
        <a href="https://wa.me/4493055984"><img src="alimentos/bionico.jpg" alt="Bionico"></a>
        <div class="product-info">
            <p>Bionico</p>
            <p>Precio: $25</p>
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

