<?php
//enviar.php

    //Conseguir los datos con el método post
    // Entre [] el name del archivo con el form
    $nombre = $_POST ['nombre'];
    $email = $_POST ['email'];
    $mensaje = $_POST ['mensaje'];
    $asunto = $_POST ['asunto'];

    //Todo lo que te va a mostrar el mail
    $destinatario = "martin.quirogavaldez@gmail.com,
                    martiin.q@hotmail.com";
                    
    //junto todos los datos solicitados en el form en una sola variable : cuerpo
    $cuerpo = "Su nombre es $nombre y su mail es $email y su mensaje es $mensaje .";
    $cabeceras = "From: Nombre A <mail@sitio.com>";
    
    mail (  $destinatario,
            $asunto,
            $cuerpo,
            $cabeceras
        );

    echo "Mensaje enviado: $cuerpo";
?>