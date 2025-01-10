
    // Al cargar la página, se asigna el estilo 'activa' al botón correcto
    document.addEventListener("DOMContentLoaded", function() {
        let categoriaSeleccionada = localStorage.getItem("categoriaSeleccionada") || "promociones";
        const botones = document.querySelectorAll(".categoria");

        botones.forEach(function(boton) {
            // Si el botón tiene la categoría seleccionada, se marca como activo
            if (boton.innerText.toLowerCase() === categoriaSeleccionada) {
                boton.classList.add("activa");
            }

            // Asignar el comportamiento de los botones
            boton.onclick = function() {
                // Guardar la categoría seleccionada en localStorage
                localStorage.setItem("categoriaSeleccionada", boton.innerText.toLowerCase());
                // Redirigir a la categoría seleccionada
                window.location.href = `?categoria=${boton.innerText.toLowerCase()}`;
            };
        });
    });



/****************************************************************************** */



function mostrarTexto() {
    const recuadro = document.getElementById('texto-quienes-somos');
    
    // Si el recuadro está oculto, mostrarlo
    if (recuadro.style.display === "none") {
        recuadro.style.display = "block";
    } else {
        recuadro.style.display = "none"; // Si ya está visible, lo ocultamos
    }
}

// Función para cerrar el recuadro al hacer clic en el botón "Cerrar"
function quitarTexto() {
    const recuadro = document.getElementById('texto-quienes-somos');
    recuadro.style.display = "none";
}






/****************************************************************************** */


document.addEventListener('DOMContentLoaded', () => {
    // Obtener la categoría activa desde la URL, o 'todo' si no está especificada
    const urlParams = new URLSearchParams(window.location.search);
    const categoriaActiva = urlParams.get('categoria') || 'todo'; 
    
    // Obtener todos los botones de categorías
    const botones = document.querySelectorAll('.categoria');

    // Desmarcar todos los botones
    botones.forEach(btn => btn.classList.remove('activa'));

    // Marcar el botón correspondiente como activo
    botones.forEach(btn => {
        if (btn.dataset.category === categoriaActiva) {
            btn.classList.add('activa');
        }
    });
});
