<?php
        $nombre = $_POST['yourname'];
        $email = $_POST['email'];
        $mensaje = $_POST['comments'];
        $subject=$_POST['subject'];
        
        
        $para .= 'miguel_ml_50@hotmail.com';

        //$para = "miguel_ml_50@hotmail.com";
         
        $encabezados = "From: $nombre <$email>";
        $respuesta = mail($para, $s
            ubject, $mensaje, $encabezados);

        if ( $respuesta == true) {
            echo 'El email se envió exitosamente';
        }
        else {
            echo 'Hubo un problema en el envío del mensaje';
        }
    ?>