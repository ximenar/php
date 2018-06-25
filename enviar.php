<?php
 $destinatario ="Expeler@protonmail.com";
 $asunto="contacto desde nuestra web";
 
 $carta="de:$nombre \n";
 $carta.="correo:$correo \n";
 $carta.="Asunto:$asunto \n";
 $carta.="Mensaje:$mensaje";
 
 
 
 
 mail( $destinatario, $asunto, $carta);
 HEADER ("LOCATION:href="https://expelerpiloto.blogspot.com/2018/06/blog-post_24.html" )
 
 
 ?>