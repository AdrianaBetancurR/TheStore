<!DOCTYPE html>
<html>
<head>
    <title>TheStore - Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .producto {
            display: inline-block;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 200px;
            text-align: center;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .producto img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .producto button {
            background-color: black; /* Cambiado a negro */
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 2px;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>
        <img src="imagenes/logo.png" alt="Logo de TheStore">
        <nav>
            <a href="inicio.html">Inicio</a> |
            <a href="productos.html">Productos</a> |
            <a href="New.html">New Product</a> 
        </nav>
    </header>
    <main>
      
        <div class="producto">
            <img src="Imagenes/Blusa.jpg" alt="Blusa ">
            <h2><strong>Blusa </strong></h2>
            <p>Precio: $56.000</p>
            <button>Añadir al carrito</button>
        </div>
<div class="producto">
    <img src="Imagenes/Camisa.jpg" alt="Camisa azul">
    <h2><strong>Camisa azul</strong></h2>
    <p>Precio: $75.000</p>
    <button>Añadir al carrito</button>
</div>

<div class="producto">
    <img src="Imagenes/Pantalón.jpg" alt="Pantalón negro">
    <h2><strong>Pantalón </strong></h2>
    <p>Precio: $90.000</p>
    <button>Añadir al carrito</button>
</div>

<div class="producto">
    <img src="Imagenes/Zapatos.jpg" alt="Zapatos blancos">
    <h2><strong>Zapatos blancos</strong></h2>
    <p>Precio: $120.000</p>
    <button>Añadir al carrito</button>
</div>
<div class="producto">
    <img src="Imagenes/Falda.jpg" alt="Falda ">
    <h2><strong>Falda </strong></h2>
    <p>Precio: $65.000</p>
    <button>Añadir al carrito</button>
</div>

<div class="producto">
    <img src="Imagenes/Gorra.jpg" alt="Gorra negra">
    <h2><strong>Gorra negra</strong></h2>
    <p>Precio: $30.000</p>
    <button>Añadir al carrito</button>
</div>

<div class="producto">
    <img src="Imagenes/Cinturon.jpg" alt="Cinturón ">
    <h2><strong>Cinturón </strong></h2>
    <p>Precio: $45.000</p>
    <button>Añadir al carrito</button>
</div>

<div class="producto">
    <img src="Imagenes/Reloj.jpg" alt="Reloj ">
    <h2><strong>Reloj </strong></h2>
    <p>Precio: $150.000</p>
    <button>Añadir al carrito</button>
</div>
</body>
</html>
