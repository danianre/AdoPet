$('.form-registro').submit(function(e){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Te has registrado correctamente',
        showConfirmButton: false,
        timer: 5000
    })
    //this.submit();
});


$('.form-eliminar').submit(function(e){
    Swal.fire({
        title: '¿Estás seguro?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si',
        confirmButtonColor: '#30085d6',
        cancelButtonText: 'No, cancelar!',
        cancelButtonColor: '#d33',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            // swalWithBootstrapButtons.fire(
            // 'Deleted!',
            // 'Your file has been deleted.',
            // 'success'
            // )
            this.submit();
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelled',
            'Tu cuenta está a salvo',
            'error'
            )
        }
    })
    e.preventDefault();
});

