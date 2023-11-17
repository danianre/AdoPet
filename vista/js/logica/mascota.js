jQuery(document).ready(function($) {
    $('.select2').select2();
    rellenar_mascota();

    function rellenar_mascota() {
        $.post('./controlador/act_CrearMascota.php', { funcion: 'rellenar_mascota' }, function(response) {
            console.log(response);
            const laboratorios = JSON.parse(response);
            Let template='';
            laboratorios.forEach(laboratorio => {
             template+=`
                <option>${laboratio.nombre} </option>
             `; 
            });
            $('#tipo').html(template);
        })
    }
});
