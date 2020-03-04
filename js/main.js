
     $(document).ready(function(){
 	   
	    $(".enviar").click(function(){
	      if($('#nombre').val() == "" || $('#email').val() == "" || $('#telefono').val() == ""){
		  	$('#contenido').html('<h6 style="color:red;">Ingrese todos los datos</h6>');
	   	  }else{
  	        $.ajax({
	             type: 'POST',
	             url: "mail/mail.php",
	             data: $('#contact-form').serialize(), 
	             success: function(response) {
	               $('#contenido').html('<h6>¡Mensaje enviado correctamente!</h6>');
	             },
	            error: function(response) {
	                $('#contenido').html('<h6 style="color:red;">Error al enviar mensaje...</h6>');
	            }
	         })
		 }
	  });
	});