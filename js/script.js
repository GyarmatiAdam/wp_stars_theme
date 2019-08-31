$( "#submit" ).click(function() {
    Swal.fire({
        position: 'center',
        type: 'success',
        title: 'You made a comment....',
        showConfirmButton: false,
        timer: 1500
    })
  });