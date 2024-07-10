<?php
//llamado a la matriz de productos
include 'matriz-prod.php';

$productosPorPagina = 3;
$paginaActual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$totalPaginas = ceil(count($productos) / $productosPorPagina);
$inicio = ($paginaActual - 1) * $productosPorPagina;
$productosPagina = array_slice($productos, $inicio, $productosPorPagina);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | La Casa de los Jugos</title>
    <meta name="description" content="Aqui se ecnuentran los productos de la tienda">
    <link rel="shortcut icon" href="img/productos.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jua:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Copse:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Englebert:wght@400&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <header>
        <div class="btns-header">
            <a href="/Inicio/Index.html" class="button">
                <img src="img/flecha.png" alt="" class="flecha-left">
                Inicio
            </a>
            <a href="/MiCotizacion/cotizacion.php" id="ver-cotizacion" class="button">
                <span class="counter" id="contador-cotizacion">0</span>
                Ver cotización
                <img src="img/flecha.png" alt="" class="flecha-right">
            </a>
        </div>
    </header>

    <main class="main">
        <section class="product-list">
            <?php foreach ($productosPagina as $producto) : ?>

                <div class="producto" data-imagen="<?= $producto['img'] ?>" data-nombre="<?= $producto['nombre'] ?>">
                    <img src="<?= $producto['img'] ?>" alt="<?= $producto['nombre'] ?>">
                    <div class="product-detalle1">
                        <h3><?= $producto['nombre'] ?></h3>
                        <p><?= $producto['descripcion'] ?></p>
                    </div>
                    <div class="product_detalle2">
                        <button id="ingred-btn" class="ingredientes-btn">Ingredientes</button>
                        <!--<div class="ingredientes-overlay hidden">
                            <div class="ingredientes-content">
                                <ul>
                                    ?php foreach ($producto['ingredientes'] as $ingrediente) : ?>
                                        <li>?= $ingrediente ?></li>
                                    ?php endforeach; ?>
                                </ul>
                                <button class="close-ingredientes">Cerrar</button>
                            </div>
                        </div>-->
                        <!--// Overlay de confirmación de envío -->
                        <div id="ingredientes-overlay" class="overlay hidden">
                            <button id="close-ingred" class="close-ingredientes">Cerrar</button>
                            <div class="ingredientes-content" id="ingred-texto">
                            </div>
                        </div>
                        <div class="h-cant">Cantidad</div>
                        <div class="cantidad">
                            <button class="restar">--</button>
                            <span class="cantidad-num">0</span>
                            <button class="sumar">+</button>
                        </div>
                        <button class="agregar-btn" data-imagen="<?= $producto['img'] ?>" data-nombre="<?= $producto['nombre'] ?>">AGREGAR</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <section class="section-paginas">
        <div class="btns-paginas
            <?php
            if ($paginaActual === 1) {
                echo ' btns-pagina-primera';
            } elseif ($paginaActual === $totalPaginas) {
                echo ' btns-pagina-ultima';
            }
            ?>">

            <?php if ($paginaActual > 1) : ?>
                <a href="?pagina=<?= $paginaActual - 1 ?>" class="button">
                    <img src="img/flecha.png" alt="" class="flecha-left">
                    Página anterior
                </a>
            <?php endif; ?>
            <?php if ($paginaActual < $totalPaginas) : ?>
                <a href="?pagina=<?= $paginaActual + 1 ?>" class="button">
                    Siguiente página
                    <img src="img/flecha.png" alt="" class="flecha-right">
                </a>
            <?php endif; ?>
        </div>
    </section>

    <!--PIE DE PAGINA-->
    <footer class="footer">
        <div class="container">
            <div class="footer-group">
                <div class="footer-section">
                    <h3>Nosotros</h3>
                    <ul>
                        <li><a href="/conocenos/conocenos.html">Conócenos</a></li>
                        <li><a href="/Contactanos/contactanos.php">Contáctanos</a></li>
                        <li><a href="">Beneficios</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Tienda</h3>
                    <ul>
                        <li><a href="/VerProductos/productos.php">Productos</a></li>
                        <li><a href="/MiCotizacion/cotizacion.php">Mi Cotización</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Desarrolladores</h3>
                    <ul>
                        <li><a href="">Estudiantes de UTP</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Mantente actualizado</h3>
                    <div class="footer-social">
                        <a href="https://www.instagram.com/la_casadelosjugos"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-group">
                <div class="footer-section2">
                    <p>&copy; 2024 <b>La Casa De Los Jugos<b> - Todos Los Derechos Reservados</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Overlay de agregado -->
    <div id="agregado-overlay" class="overlay hidden">
        <div class="overlay-content">
            <p>Agregado exitosamente</p>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>

</html>

<!-- -->