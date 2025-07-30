<?php
$json = file_get_contents("https://api.publicapis.org/entries");
$data = json_decode($json, true);
?>
<!DOCTYPE html>
<html>
<head><title>Datos JSON</title></head>
<body>
<h1>Listado de APIs públicas</h1>
<ul>
<?php
foreach(array_slice($data['entries'], 0, 10) as $entry) {
    echo "<li><strong>{$entry['API']}</strong>: {$entry['Description']}</li>";
}
?>
</ul>
<a href="index.html">⬅ Volver al menú</a>
</body>
</html>