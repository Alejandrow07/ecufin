<?php
$destino= "ecuafuturofinanciera@gmail.com";
$nombre = $_post["nombre"];
$correo = $_post["correo"];
$numero = $_post["numero"];
$mensaje = $_post["mensaje"];
$contenido = "nombre: " . $nombre . "/nCorreo: " . $correo . "/nNumero: " . $numero . "/nMensaje: " . $mensaje;
mail($destino,"Contacto", $contenido);

 ?>
<?php
$destino = 'ecuafuturofinanciera@gmail.com'
//esto se enviara al correo\\
$nombre = $POST['nombre'];
$correo = $POST['correo'];
$numero = $POST['numero'];
$mensaje = $POST['mensaje'];

$header = "Enviado desde Ecufuturo"
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre

mail($destino, $correo, $numero, $mensajeCompleto, $header);
echo "<script>alert('Mensaje enviado con éxito.')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
 ?>
