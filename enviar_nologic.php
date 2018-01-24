<?php
// Mensaje que se enviara a tu correo
$mensaje="";
// Ip del que envia el mensaje (opcional)
$ip = $_SERVER['REMOTE_ADDR'];
 
$mensaje.="Formulario de Contacto:". "\n\n";
$mensaje.="Nombre: ".$_POST['nombre']."\n";
$mensaje.="Apellidos: ".$_POST['apellidos']."\n";
$mensaje.="Telfono o celular: ".$_POST['telefono']."\n";
$mensaje.="Email: ".$_POST['email']."\n";
$mensaje.="Mensaje: ".$_POST['mensaje']."\n";
// Aqui pon el correo donde llegaran los mensajes
$tucorreo="info@mariadelpilar.pe";
$sujeto="Tu nombre";
// Vamos a verificar si funciono el envio
if (@mail($tucorreo,$sujeto,$mensaje,$ip,"Desde: Contacto<".$_POST['femail'].">")) {
    echo '<p align="center"><strong>Mensaje enviado, Gracias! </strong></p>';
} else {
    echo '<p align="center"><strong>No se pudo enviar el mensaje</strong> '.@$_POST['fname'].'</p>';
}
?>

