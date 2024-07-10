/*Lo necesario para el selector de distrito*/
document.addEventListener('DOMContentLoaded', function () {
    const provinciasYDistritos = {
        'Bocas del Toro': ['Almirante', 'Bocas del Toro', 'Changuinola', 'Chiriquí Grande'],
        'Coclé': ['Aguadulce', 'Antón', 'La Pintada', 'Natá', 'Olá', 'Penonomé'],
        'Colón': ['Chagres', 'Colón', 'Donoso', 'Portobelo', 'Santa Isabel', 'Omar Torrijos Herrera'],
        'Chiriquí': ['Alanje', 'Barú', 'Boquerón', 'Boquete', 'Bugaba', 'David', 'Dolega', 'Gualaca', 'Remedios', 'Renacimiento', 'San Félix', 'San Lorenzo', 'Tolé', 'Tierras Altas'],
        'Darien': ['Chepigana', 'Pinogama', 'Santa Fe'],
        'Herrera': ['Chitré', 'Las Minas', 'Los Pozos', 'Ocú', 'Parita', 'Pesé', 'Santa Maria'],
        'Los Santos': ['Guararé', 'Las Tablas', 'Los Santos', 'Macaracas', 'Pedasí', 'Pocrí', 'Tonosí'],
        'Panamá': ['Balboa', 'Chepo', 'Chimán', 'Panamá', 'San Miguelito', 'Taboga'],
        'Panamá Oeste': ['Arraiján', 'Capira', 'Chame', 'La Chorrera', 'San Carlos'],
        'Veraguas': ['Atalaya', 'Calobre', 'Cañazas', 'La Mesa', 'Las Palmas', 'Montijo', 'Río de Jesús', 'San Francisco', 'Santa Fe', 'Santiago', 'Soná', 'Mariato']
    };

    const provinciaSelect = document.getElementById('provincia');
    const distritoSelect = document.getElementById('distrito');

    provinciaSelect.addEventListener('change', function () {
        const provincia = this.value;
        distritoSelect.innerHTML = '<option value="">Seleccione</option>'; // Reset distrito options
        if (provincia && provinciasYDistritos[provincia]) {
            provinciasYDistritos[provincia].forEach(distrito => {
                const option = document.createElement('option');
                option.value = distrito;
                option.textContent = distrito;
                distritoSelect.appendChild(option);
            });
        }
    });

    //let categoriasSeleccionadas = [];

    const enviarCotizacionBtn = document.getElementById('enviar-cotizacion');
    const cancelarCotizacionBtn = document.getElementById('cancelar-cotizacion');
    const confirmarEnvioOverlay = document.getElementById('confirmar-envio-overlay');
    const confirmarEnvioBtn = document.getElementById('confirmar-envio');
    const cancelarEnvioBtn = document.getElementById('cancelar-envio');
    const confirmarCancelacionOverlay = document.getElementById('confirmar-cancelacion-overlay');
    const confirmarCancelacionBtn = document.getElementById('confirmar-cancelacion');
    const cancelarCancelacionBtn = document.getElementById('cancelar-cancelacion');
    const mensajeOverlay = document.getElementById('mensaje-overlay');
    const mensajeTexto = document.getElementById('mensaje-texto');

    //Acciones del boton enviar
    enviarCotizacionBtn.addEventListener('click', function (event) {
        event.preventDefault(); // Prevenir el envío del formulario
        if (validarCampos()) {
            confirmarEnvioOverlay.classList.remove('hidden');
        } else {
            alert("Por favor, complete todos los campos del formulario.");
        }
    });

    confirmarEnvioBtn.addEventListener('click', function () {
        confirmarEnvioOverlay.classList.add('hidden');
        mensajeTexto.textContent = "Cotización enviada exitosamente. Puede revisar la cotización en su correo.";
        mensajeOverlay.classList.remove('hidden');
        vaciarCampos();
        setTimeout(() => {
            mensajeOverlay.classList.add('hidden');
        }, 3000); // Ocultar el overlay después de 3 segundos
    });

    cancelarEnvioBtn.addEventListener('click', function () {
        confirmarEnvioOverlay.classList.add('hidden');
    });

    //Acciones del boton Cancelar
    cancelarCotizacionBtn.addEventListener('click', function () {
        confirmarCancelacionOverlay.classList.remove('hidden');
    });

    confirmarCancelacionBtn.addEventListener('click', function () {
        confirmarCancelacionOverlay.classList.add('hidden');
        mensajeTexto.textContent = "La cotización ha sido cancelada.";
        mensajeOverlay.classList.remove('hidden');
        vaciarCampos(); //vaciar campos de entrada
        setTimeout(() => {
            mensajeOverlay.classList.add('hidden');
        }, 3000); // Ocultar el overlay después de 3 segundos
    });

    cancelarCancelacionBtn.addEventListener('click', function () {
        confirmarCancelacionOverlay.classList.add('hidden');
    });


    //Funcion para validar que todos los campos esten llenos
    function validarCampos(){
        const nombre = document.getElementById('nombre').value.trim();
        const correo = document.getElementById('correo').value.trim();
        const provincia = document.getElementById('provincia').value.trim();
        const distrito = document.getElementById('distrito').value.trim();
        //const direccion = document.getElementById('direccion').value.trim();
        const telefono = document.getElementById('telefono').value.trim();
        
        return nombre !== "" && correo !== "" && provincia !== "" && distrito !== "" /*&& direccion !== ""*/ && telefono !== "";
    }
    
    // Función para vaciar los campos de entrada
    function vaciarCampos(){
        document.getElementById('cotizacion-form').reset();
    }

    /*Cotizacion vinculado a productos*/
    const productosSeleccionados = document.getElementById('productos-seleccionados');
        const sinItemsRow = document.getElementById('sin-items');
    
        function cargarProductos() {
            let cotizacion = JSON.parse(localStorage.getItem('cotizacion')) || [];
            productosSeleccionados.innerHTML = '';
            if (cotizacion.length === 0) {
                productosSeleccionados.appendChild(sinItemsRow);
            } else {
                cotizacion.forEach(producto => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td><img src="${producto.imagen}" alt="${producto.nombre}" width="50"></td>
                        <td>${producto.nombre}</td>
                        <td>${producto.cantidad}</td>
                        <td><button class="eliminar" data-nombre="${producto.nombre}">🗑️</button></td>
                    `;
                    productosSeleccionados.appendChild(row);
                });
                const eliminarBtns = productosSeleccionados.querySelectorAll('.eliminar');
                eliminarBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        eliminarProductoDeCotizacion(btn.dataset.nombre);
                    });
                });
            }
            actualizarContadorItems();
        }
    
        function eliminarProductoDeCotizacion(nombre) {
            let cotizacion = JSON.parse(localStorage.getItem('cotizacion')) || [];
            cotizacion = cotizacion.filter(producto => producto.nombre !== nombre);
            localStorage.setItem('cotizacion', JSON.stringify(cotizacion));
            cargarProductos();
        }
    
        function actualizarContadorItems() {
            let cotizacion = JSON.parse(localStorage.getItem('cotizacion')) || [];
            document.getElementById('contador-items').textContent = `${cotizacion.length} Item(s)`;
        }
    
        cargarProductos();
    
});


