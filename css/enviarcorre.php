<?php
$destino= "ecuafuturofinanciera@gmail.com";
$numero = $_post["numero"];

$header = "Enviado desde Ecufuturo"
$mensajeCompleto = $mensaje . "\nAtentamente: " . $numero

mail($destino, $numero, $mensajeCompleto, $header);
echo "<script>alert('Mensaje enviado con éxito.')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
 ?>
