
// JavaScript para abrir el modal
function abrirModal(event) {
    event.preventDefault(); // Evita la acción predeterminada del enlace

    // Obtiene el ID del atributo data-id
    var idRefugio = event.currentTarget.getAttribute('data-id');

    // Ahora puedes usar idRefugio en tu lógica o pasarlo a la función abrirModal
    // Cargar la información específica del refugio utilizando AJAX
    cargarInformacionRefugio(idRefugio);
}

// Función para cargar la información específica del refugio utilizando AJAX
function cargarInformacionRefugio(idRefugio) {
    // Realiza una solicitud AJAX para obtener la información específica del refugio
    $.ajax({
        type: 'POST',
        url: './obtener_informacion_refugio.php', // Ruta a tu script PHP que obtiene la información del refugio
        data: { idRefugio: idRefugio },
        success: function (response) {
            // Coloca la información del refugio en el modal
            document.getElementById('modalSolicitudDonacion').innerHTML = response;
            document.getElementById('modalSolicitudDonacion').style.display = 'block';
        },
        error: function (error) {
            console.error('Error al cargar la información del refugio: ', error);
        }
    });
}

// JavaScript para cerrar el modal
function cerrarModal() {
    document.getElementById('modalSolicitudDonacion').style.display = 'none';
}