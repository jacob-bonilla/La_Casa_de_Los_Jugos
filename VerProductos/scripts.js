document.addEventListener('DOMContentLoaded', function () {
    // Manejo de overlay de ingredientes
    /*const ingredientesBtns = document.getElementById('ingred-btn');
    const closeBtns = document.getElementById('close-ingred');
    const ingredOverlay = document.getElementById('ingredientes-overlay')
    const ingredTexto = document.getElementById('ingred-texto');
    /*ingredientesBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.ingredientes-overlay')[index].classList.remove('hidden');
        });
    });*

    ingredientesBtns.addEventListener('click', function () {
        ingredTexto.textContent = "Cotización enviada exitosamente. Puede revisar la cotización en su correo.";
        ingredOverlay.classList.remove('hidden');
    });

    closeBtns.addEventListener('click', function() {
        ingredOverlay.classList.add('hidden');
    })*/

    /*closeBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.ingredientes-overlay')[index].classList.add('hidden');
        });
    });*/

    // Manejo de cantidad
    /*const restarBtns = document.querySelectorAll('.restar');
    const sumarBtns = document.querySelectorAll('.sumar');
    const cantidadNums = document.querySelectorAll('.cantidad-num');
    //let contador = 0;

    restarBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            let cantidad = parseInt(cantidadNums[index].textContent);
            if (cantidad > 0) {
                cantidad--;
                cantidadNums[index].textContent = cantidad;
            }
        });
    });

    sumarBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            let cantidad = parseInt(cantidadNums[index].textContent);
            cantidad++;
            cantidadNums[index].textContent = cantidad;
        });
    });

    // Manejo de agregar al carrito
    /*const agregarBtns = document.querySelectorAll('.agregar-btn');
    agregarBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            let cantidad = parseInt(cantidadNums[index].textContent);
            if (cantidad > 0) {
                contador += cantidad;
                document.getElementById('contador').textContent = contador;
                cantidadNums[index].textContent = 0; // Reset cantidad
            }
        });
    });*/

    const productos = document.querySelectorAll('.producto');
    let contador = 0;

    productos.forEach(producto => {
        const product_detalle2 = producto.querySelector('.product_detalle2');
        const agregarBtn = producto.querySelector('.agregar-btn');
        const sumarBtn = producto.querySelector('.sumar');
        const restarBtn = producto.querySelector('.restar');
        const cantidadNum = producto.querySelector('.cantidad-num');

        sumarBtn.addEventListener('click', () => {
            let cantidad = parseInt(cantidadNum.textContent);
            cantidad++;
            cantidadNum.textContent = cantidad;
        });

        restarBtn.addEventListener('click', () => {
            let cantidad = parseInt(cantidadNum.textContent);
            if (cantidad > 0) {
                cantidad--;
                cantidadNum.textContent = cantidad;
            }
        });

        agregarBtn.addEventListener('click', () => {
            let cantidad = parseInt(cantidadNum.textContent);
            if (cantidad > 0) {
                agregarProductoACotizacion({
                    nombre: agregarBtn.dataset.nombre,
                    imagen: agregarBtn.dataset.imagen,
                    cantidad: cantidad
                });
                cantidadNum.textContent = 0;
                actualizarContadorItems();
            }
        });
    });

    function agregarProductoACotizacion(producto) {
        let cotizacion = JSON.parse(localStorage.getItem('cotizacion')) || [];
        cotizacion.push(producto);
        localStorage.setItem('cotizacion', JSON.stringify(cotizacion));
    }

    function actualizarContadorItems() {
        let cotizacion = JSON.parse(localStorage.getItem('cotizacion')) || [];
        contador = cotizacion.length;
        document.getElementById('contador-cotizacion').textContent = contador;
    }

    actualizarContadorItems();
});

/*JAVASCRIPTS



let contador = 0;

function actualizarContador(nuevoValor) {
    const contadorElemento = document.getElementById('contador-cotizacion');
    contadorElemento.textContent = nuevoValor;
}

// Supongamos que cada vez que se añade un producto, se llama a esta función
function agregarProducto() {
    contador++;
    actualizarContador(contador);
}

// Event listeners para los botones de agregar producto
document.querySelectorAll('.boton-agregar').forEach(button => {
    button.addEventListener('click', agregarProducto);
});
*/
