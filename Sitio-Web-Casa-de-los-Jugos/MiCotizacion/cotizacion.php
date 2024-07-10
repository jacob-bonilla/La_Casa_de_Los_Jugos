<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cotización | La Casa De Los Jugos</title>
    <meta name="description" content="Aqui se realiza la cotizacion de productos">
    <link rel="shortcut icon" href="img/solicitud.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jua:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Copse:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Iceland:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Englebert:wght@400&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <!-- ?php
    include_once("conexion.php");

    Cconexion::ConexionBD();
    ?>-->
    <header class="header">
        <a href="javascript:history.back()" class="button">
            <img src="img/flecha.png" alt="" class="flecha-left">
            Atrás
        </a>
    </header>
    <main class="main-content">
        <form id="cotizacion-form">
            <div class="title-container">
                <h1>Tu Solicitud de Cotización</h1>
                <img id="img-titulo" src="img/solicitud.png" alt="">
            </div>

            <div class="form-container">
                <div class="form-column">
                    <div class="form-group">
                        <label for="nombre" class="form-label"><img src="img/icon-name.png" alt="">Nombre Completo:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Escriba aqui" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label"><img src="img/icon-email.png" alt="">Correo electrónico:</label>
                        <input type="email" id="correo" name="correo" placeholder="Escriba aqui" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="form-label"><img src="img/icon-telefono.png" alt="">Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Escriba aqui" required>
                    </div>
                </div>
                <div class="form-column">
                    <div class="form-group">
                        <label for="provincia" class="form-label"><img src="img/icon-provincia.png" alt="">Provincia:</label>
                        <select id="provincia" name="provincia" required>
                            <option value="">Seleccione</option>
                            <option value="Bocas del Toro">Bocas del Toro</option>
                            <option value="Coclé">Coclé</option>
                            <option value="Colón">Colón</option>
                            <option value="Chiriquí">Chiriquí</option>
                            <option value="Darien">Darien</option>
                            <option value="Herrera">Herrera</option>
                            <option value="Los Santos">Los Santos</option>
                            <option value="Panamá">Panamá</option>
                            <option value="Panamá Oeste">Panamá Oeste</option>
                            <option value="Veraguas">Veraguas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="distrito" class="form-label"><img src="img/icon-distrito.png" alt="">Distrito:</label>
                        <select id="distrito" name="distrito">
                            <option value="">Seleccione</option>
                            <!--Otras opciones de distrito -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="direccion" class="form-label"><img src="img/icon-direccion.png" alt=""> Dirección:</label>
                        <textarea id="direccion" name="direccion" placeholder="Escriba aquí" rows="2"></textarea>
                    </div>

                </div>
            </div>

            <section class="product-selection">
                <table>
                    <div class="titulo-prod-select">
                        <h2>Tus productos seleccionados</h2>
                        <span id="contador-items">0 Item(s)</span>
                    </div>
                    <thead>
                        <tr>
                            <th>Bebida(s)</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>

                    <div>
                        <tbody id="productos-seleccionados">
                            <!--Los productos seleccionados se cargarán aquí-->
                            <tr id="sin-items">
                                <td colspan="4">NO HAY ITEMS EN LA COTIZACION<n><img src="img/icon-productos.png" alt=""></n>
                                </td>
                            </tr>
                        </tbody>
                    </div>
                </table>
            </section>

            <div class="form-check">
                <input type="checkbox" id="check" name="check">
                <label for="check">Marque la casilla si desea recoger en el local.</label>
            </div>

            <div class="form-buttons">
                <button type="submit" id="enviar-cotizacion" class="submit-button">Enviar cotización</button>
                <button type="button" id="cancelar-cotizacion" class="cancel-button">Cancelar cotización</button>
            </div>
        </form>
    </main>

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

    <!--// Overlay de confirmación de envío -->
    <div id="confirmar-envio-overlay" class="overlay hidden">
        <div class="overlay-content">
            <p>¿Confirma enviar la cotización?</p>
            <button id="confirmar-envio" class="button-aceptar">Aceptar</button>
            <button id="cancelar-envio" class="button-cancelar">Cancelar</button>
        </div>
    </div>

    <!--Overlay de confirmación de cancelación -->
    <div id="confirmar-cancelacion-overlay" class="overlay hidden">
        <div class="overlay-content">
            <p>¿Confirma cancelar la cotización?</p>
            <button id="confirmar-cancelacion" class="button-aceptar">Aceptar</button>
            <button id="cancelar-cancelacion" class="button-cancelar">Cancelar</button>
        </div>
    </div>

    <!--Overlay de mensaje -->
    <div id="mensaje-overlay" class="overlay hidden">
        <div class="overlay-content" id="mensaje-texto">
            //!-- El texto del mensaje se cargará aquí --
        </div>
    </div>

    <script src="scripts.js"></script>
</body>

</html>

<!-- -->
