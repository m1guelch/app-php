<?php
// Archivo donde se guarda el contador
$archivo = 'contador.txt';

// Si el archivo no existe, se crea con valor 0
if (!file_exists($archivo)) {
    file_put_contents($archivo, 0);
}

// Leer el contador actual
$contador = (int) file_get_contents($archivo);
$contador++;

// Guardar el nuevo valor
file_put_contents($archivo, $contador);
?>

<!-- Página HTML que muestra el contador -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>¡Bienvenido!</h1>
    <p>Esta página ha sido visitada <?php echo $contador; ?> veces.</p>
</body>
</html>
