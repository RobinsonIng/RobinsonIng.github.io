<?php
// LLamando a los campos


// ================================Este es el correo al que se enviara
    $nombre =$_POST['fullname'];
    $email =$_POST['email'];
    $telefono =$_POST['phone'];
    $affair =$_POST['affair'];
    $message =$_POST['message'];

// ================================Datos para el correo

    $destinatario = 'clientes@solarserviciosindustriales.com.ar';
    $asunto ='Contacto desde SolarServiciosIndustriales';

// ==================================Ahora configuro todo lo que quiero que me llegue 

$mensajecompleto = "De: $nombre \n";
     $mensajecompleto .="Correo: $email \n";
     $mensajecompleto .="Telefono: $telefono \n";  
     $mensajecompleto .="Tema de consulta: $affair \n";  
     $mensajecompleto .="Mensaje: $message";


//=======================================Ahora con lo siguiente envio el mansaje

mail($destinatario, $asunto , $mensajecompleto);

//==============Lo siguiente me lleva a la pagina de envio que es mensaje_enviado.html==
header("Location:mensaje_enviado.html");

?>
