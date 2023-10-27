
//Aqui es donde usará jQuery
$(document).ready(function(){
    id=null;
    $(document).on('click', '#btnEnviar', function(){
        correo=$("#correo").val();
     
        //Incluir todas las validaciones..
        if(correo!=""){
            ajaxOlvidoContrasena(correo);
        }
        else{
            Swal.fire({
                text:"Digite los datos del correo",
                icon: "error",
                title: "Correo"
            })
        }
        $(location).attr('href',"olvidoContrasena.php?msg=Se ha enviado el correo");
    });
    $(document).on('click', '#btnCancelar', function(){
        $(location).attr('href',"../index.php");
    });
  });

// Aqui viene el uso de AJAX con jQuery
function ajaxOlvidoContrasena(correo){
        $.ajax({ // sin utilizar XML,... usar json
            data: { //Datos a enviar
                   "correo" : correo
            },
            type: "POST",
            dataType: "json",
            url: "/adopet/controlador/accion/ajax_olvidoContrasena.php"
        })
         .done(function(response) {   // Cuando no hay problema
            var mens=response.msg;

            if(mens!=""){
                Swal.fire({
                    text:mens,
                    icon: response.type,
                    title: "Envío de correo"

                }).then((result) => {
                    if (result.isConfirmed) {
                    $(location).attr('href',response.ruta); //Redireccinar a una ruta
                    }
                  })
                
               
            }
            /* hacer append, modificar o eliminar de lo ingresau */
         })
         .fail(function(jqXHR, textStatus, errorThrown) {  // Si encuentra algun problema

            Swal.fire({
                title: "ALERTA",
                text: "La solicitud a fallado: " +  errorThrown
            });
        });
}


