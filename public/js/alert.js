
document.getElementById('eliminar').addEventListener('click', function () {
  Swal.fire({
    title: 'Eliminar Registro?',
    text: "Una vez eliminado no podra recuperar el registro ",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Eliminar'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Eliminado!',
        'La operación ha sido eliminada correctamente...',
        'success'
      )
    }
  });
});
