<?php
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta = trim($_POST["respuesta"]);
    if ($respuesta == "") {
        $mensaje = "❌ ¡Debes escribir una respuesta!";
    } elseif (strtolower($respuesta) == "el aguacate") {
        $mensaje = "✅ ¡Correcto!";
    } else {
        $mensaje = "❌ Lo siento, no es correcto.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Juego: Adivinanza</title></head>
<body>
<h1>¿Puedes adivinar?</h1>
<p>Tengo piel rugosa, por dentro soy verde y estoy en el guacamole. ¿Qué soy?</p>
<form method="post">
    <input type="text" name="respuesta" placeholder="Tu respuesta">
    <input type="submit" value="Responder">
</form>
<p><?= $mensaje ?></p>
<a href="index.html">⬅ Volver al menú</a>
</body>
</html>