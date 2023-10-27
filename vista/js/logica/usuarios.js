$(document).ready(function() { 
    verUsuarios()
    
})

function verUsuarios(){
    $.ajax({url: "../controlador/accion/act_verUsuarios.php",
       success: function(result){
        
          agregarUsuariosEnTabla(JSON.parse(result))
  }})

}

function agregarUsuariosEnTabla(result){
    let usuarios = ''

    $.each(result, function(i) {

        usuarios +='<tr id='+result[i].id+'>'
        +'<td width="100"  style=" border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].nombre+'</td>'
        +'<td width="100"  style=" border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].apellido+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].fecha_nacimiento+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].correo+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].password+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].cedula+'</td>'
        +'<td width="10" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].telefono+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].direccion+'</td>'
        +'<td width="150" style="border: 1px solid #dddddd; text-align: left;padding: 8px;"><a href="#" class="editar mr-3 btn btn-info btn-md" role="button" aria-pressed="true">Editar</a>'
        +'<a href="../controlador/accion/act_eliminarUsuario.php?idUsuario='+result[i].id+'" class="btn btn-danger btn-md" role="button" aria-pressed="true">Eliminar</a></td>'
        +'</tr>'

    })

    $("#usuariosRegistrados tbody").append(usuarios)
    insertarDatosUsuarioEnModal()

}

function insertarDatosUsuarioEnModal(){
    $(".editar").on("click",function(){
        let idUsuario = $(this).closest("tr").attr("id")
      
        $.ajax({
            type: "POST",
            data: {idUsuario: parseInt(idUsuario, 10)},
            url: "../controlador/accion/act_verUsuarioPorId.php",
            success: function(data){
                let usuario = JSON.parse(data)
             
                $("#modalEditarUsuario").modal('show');

                $("#modalEditarUsuario input[name='idUsuario']").val(usuario.idUsuario)
                $("#modalEditarUsuario input[name='nombre']").val(usuario.nombre)
                $("#modalEditarUsuario input[name='nombre']").val(usuario.apellido)
                $("#modalEditarUsuario input[name='fechanac']").val(usuario.fecha_nacimiento)
                $("#modalEditarUsuario input[name='correo']").val(usuario.correo)
                $("#modalEditarUsuario input[name='password']").val(usuario.password)
                $("#modalEditarUsuario input[name='fechanac']").val(usuario.cedula)
                $("#modalEditarUsuario input[name='telefono']").val(usuario.telefono)
                $("#modalEditarUsuario input[name='fechanac']").val(usuario.cedula)

                if(usuario.sexo == 1){
                    $("#modalEditarUsuario .sexo option:eq(1)").prop('selected', true)
                }
                else if (usuario.sexo == 2){
                    $("#modalEditarUsuario .sexo option:eq(2)").prop('selected', true)
                }else{
                    $("#modalEditarUsuario .sexo option:eq(3)").prop('selected', true)
                }
          }})

    })
}
