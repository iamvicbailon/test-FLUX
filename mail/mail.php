<?php

 $msg = "Datos personales\r\n Nombre: ".$_POST["nombre"]."\r\n Teléfono: ".$_POST["telefono"]."\r\n Correo electrónico: ".$_POST["email"];

 $msg = wordwrap($msg,70);
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers.= 'From: ' .$_POST["nombre"].'<'.$_POST["email"].'>'. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

		$headers = "From: " .$_POST['email'] . PHP_EOL;
		$headers .= "MIME-Version: 1.0" . PHP_EOL;
		$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
		$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;


 mail("dev@ffffflux.com","Mensaje de ".$_POST["nombre"],$msg, $headers);

?>