<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumnos 3</title>
</head>

<body>
    <?php
    $ruta = "../fichero1/alumnos1.txt";

    if (!file_exists($ruta)) {
        echo "<p><strong>Error:</strong> No se encontró el archivo alumnos1.txt</p>";
        exit;
    }

    $lineas = file($ruta, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if (empty($lineas)) {
        echo "<p>No hay alumnos registrados.</p>";
    } else {
        echo '<table border="1">';
        echo "<tr>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Localidad</th>
          </tr>";

        $contador = 0;

        foreach ($lineas as $linea) {
            $nombre = trim(substr($linea, 0, 40));
            $apellido1 = trim(substr($linea, 40, 41));
            $apellido2 = trim(substr($linea, 81, 42));
            $fecha = trim(substr($linea, 123, 10));
            $localidad = trim(substr($linea, 133, 27));

            echo "<tr>
                <td>$nombre</td>
                <td>$apellido1</td>
                <td>$apellido2</td>
                <td>$fecha</td>
                <td>$localidad</td>
              </tr>";

            $contador++;
        }

        echo "</table>";
        echo "<p><strong>Total de alumnos leídos:</strong> $contador</p>";
    }
    ?>

</body>

</html>
</body>

</html>