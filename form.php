<?php  

// Llamando a los campos
$nombre = $_POST['name'];
$empresa = $_POST['empresa'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


// Datos para el correo
$destinatario = "chamed16@gmail.com";
$asunto = "Contacto desde la web";

$carta = "De: $nombre : $empresa \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
?>
<script language="javascript">
window.location="confirmacion.php";
</script> 