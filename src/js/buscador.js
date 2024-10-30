document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
});

function iniciarApp() {
    buscarPorFecha();
}

function buscarPorFecha() {
    const fechaInput = document.querySelector('#fecha');

    fechaInput.addEventListener('input', function(e) {
        const fechaSeleccionada = e.target.value;

        // Mandar por query string la fecha que el usuario seleccionó
        window.location = `?fecha=${fechaSeleccionada}`;
    });
}
function confirmDelete(e, idCita) {
    e.preventDefault();  // Evitar el envío automático del formulario

    Swal.fire({
        icon: "warning",
        title: "Confirmación de acción",
        text: "¿Estás seguro de que deseas eliminar esta cita?",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Enviar el formulario correspondiente
            document.querySelector("#formEliminar-" + idCita).submit();
        }
    });
}


