<?php
$json = file_get_contents("https://jsonplaceholder.typicode.com/users/1");
$usuario = json_decode($json, true);
?>
<!DOCTYPE html>
<html>
<head><title>Formulario desde JSON</title>
<script>
function muestraObjeto(obj) {
    for (const prop in obj) {
        const input = document.getElementById(prop);
        if (input) input.value = obj[prop];
    }
}
</script>
</head>
<body onload='muestraObjeto(<?= json_encode($usuario) ?>)'>
<h1>Formulario de usuario</h1>
<form>
    Nombre: <input type="text" id="name"><br>
    Usuario: <input type="text" id="username"><br>
    Email: <input type="text" id="email"><br>
</form>
<a href="index.html">⬅ Volver al menú</a>
</body>
</html>