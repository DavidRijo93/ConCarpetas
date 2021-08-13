function agendar(){
    var nombre = document.getElementsByName("nombres")[0].value;
    var apellido = document.getElementsByName("apellido")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var tel = document.getElementsByName('telefono')[0].value;
    if (nombre == '' || apellido == '' || email == '' || tel == ''){
      
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Llenar campos vacios'
            
          })
    } else{
        Swal.fire({
            icon: 'success',
            title: 'Completado',
            text: 'Gracias por completar el formulario, nos estaremos comunicando para coordinar la cita.',
           timer: 10500 
           })
    }
     
    
   
  }