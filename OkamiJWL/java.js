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

    const urlParams = new URLSearchParams(window.location.search);
    const categoriaActiva = urlParams.get('categoria') || 'todo';

    botones.forEach(btn => {
        btn.classList.remove('activa');
        if (btn.dataset.category === categoriaActiva) {
            btn.classList.add('activa');
        }
    });

    function handlePagination(event) {
        event.preventDefault();
        const url = event.currentTarget.href;
        const spinner = document.getElementById('loading-spinner');
        const overlay = document.getElementById('loading-overlay');
        spinner.style.display = 'block';
        overlay.style.display = 'block';
        fetch(url)
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newContent = doc.querySelector('#contenido').innerHTML;
                document.querySelector('#contenido').innerHTML = newContent;
                window.history.pushState({}, '', url);
                document.querySelector('#contenido').scrollIntoView({ behavior: 'smooth' });
                spinner.style.display = 'none';
                overlay.style.display = 'none';
                addPaginationEventListeners(); // Re-add event listeners
            })
            .catch(error => {
                console.error('Error:', error);
                spinner.style.display = 'none';
                overlay.style.display = 'none';
            });
    }

    function addPaginationEventListeners() {
        document.querySelectorAll('.paginacion a').forEach(link => {
            link.addEventListener('click', handlePagination);
        });
    }

    addPaginationEventListeners(); // Initial call to add event listeners
});

function mostrarTexto() {
    const recuadro = document.getElementById('texto-quienes-somos');
    // Si el recuadro está oculto, mostrarlo
    recuadro.style.display = recuadro.style.display === "none" ? "block" : "none";
}

// Función para cerrar el recuadro al hacer clic en el botón "Cerrar"
function quitarTexto() {
    document.getElementById('texto-quienes-somos').style.display = "none";
}


