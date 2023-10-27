

function onSignIn(googleUser){

    let profile = googleUser.getBasicProfile()
    localStorage.setItem('idUsuario', profile.getIdUsuario())
    localStorage.setItem('nombre', profile.getNambre())
    localStorage.setItem('correo', profile.getCorreo())
    localStorage.setItem('image', profile.getImageUrl())
    
    window.location.replace("../vista/usuarios.php")
}


