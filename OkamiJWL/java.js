// Al cargar la página, se asigna el estilo 'activa' al botón correcto
document.addEventListener("DOMContentLoaded", function() {
    let categoriaSeleccionada = localStorage.getItem("categoriaSeleccionada") || "todo";
    const botones = document.querySelectorAll(".categoria");

    botones.forEach(function(boton) {
        // Si el botón tiene la categoría seleccionada, se marca como activo
        if (boton.dataset.category === categoriaSeleccionada) {
            boton.classList.add("activa");
        }

        // Asignar el comportamiento de los botones
        boton.onclick = function() {
            // Guardar la categoría seleccionada en localStorage
            localStorage.setItem("categoriaSeleccionada", boton.dataset.category);
            // Redirigir a la categoría seleccionada
            window.location.href = `?categoria=${boton.dataset.category}`;
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
    const urlParams = new URLSearchParams(window.location.search);
    const categoriaActiva = urlParams.get('categoria') || 'todo';

    const botones = document.querySelectorAll('.categoria');
    botones.forEach(btn => btn.classList.remove('activa'));

    botones.forEach(btn => {
        if (btn.dataset.category === categoriaActiva) {
            btn.classList.add('activa');
        }
    });
});


