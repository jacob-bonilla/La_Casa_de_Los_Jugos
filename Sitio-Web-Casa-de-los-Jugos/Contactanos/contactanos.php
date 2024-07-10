<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos | La Casa de los Jugos</title>
    <meta name="description" content="Ponerse en conctacto con la empresa">
    <link rel="shortcut icon" href="img/contactanos.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Englebert:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Copse:wght@400&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <header>
        <div class="btns-header">
            <a href="/Inicio/Index.html" class="button">
                <img src="img/flecha.png" alt="" class="flecha-left">
                Inicio
            </a>
        </div>
    </header>

    <main class="main-contenido">
        <div id="contactanos-form">

            <section class="datos-contactanos">
                <div class="title-container">
                    <h2>Sigamos en contacto</h2>
                </div>
                <div class="info-container">
                    <div class="info">
                        <h4>Horario local Arboledas</h4>
                        <p>Lunes a Viernes</p>
                        <p>7:30 AM - 3:30 PM</p>
                    </div>
                    <div class="info">
                        <h4>Telefono</h4>
                        <p>(+507) 1234 4577</p>
                    </div>
                    <div class="info">
                        <h4>Email</h4>
                        <p>correo@casadelosjugos.com</p>
                    </div>
                    <div class="info-social">
                        <a href="https://www.instagram.com/la_casadelosjugos"><i class="fab fa-instagram"></i>@la_casadelosjugos</a>
                    </div>
                </div>
            </section>

            <form class="form-datos">
                <div class="title-container">
                    <h2>Dejanos tus datos y pronto te contactaremos</h3>
                </div>
                <div class="form-container">
                    <div class="form-column1">
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre Completo:</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Escriba aqui" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="form-label">Teléfono:</label>
                            <input type="tel" id="telefono" name="telefono" placeholder="Escriba aqui" required>
                        </div>
                    </div>
                    <div class="form-column2">
                        <div class="form-group">
                            <label for="email" class="form-label">Correo electrónico:</label>
                            <input type="email" id="correo" name="correo" placeholder="Escriba aqui" required>
                        </div>
                        <div class="form-group">
                            <label for="motivo" class="form-label"> Motivo para contactar:</label>
                            <textarea id="motivo" name="motivo" placeholder="Escriba aquí" required rows="4"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="check" name="check">
                    <label required for="check">Acepta las políticas de tratamiento de datos.</label>
                </div>
            </form>
        </div>
        <div class="form-buttons">
            <button type="submit" id="enviar" class="submit-button">ENVIAR</button>
            <button type="button" id="cancelar" class="cancel-button">CANCELAR</button>
        </div>
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
</body>

</html>

<!-- -->