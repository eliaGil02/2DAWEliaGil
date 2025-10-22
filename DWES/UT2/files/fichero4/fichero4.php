<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumnos 4</title>
</head>

<body>
    <?php
    $ruta = "../fichero2/alumnos2.txt";

    if (!file_exists($ruta)) {
        echo "<p><strong>Error:</strong> No se encontró el archivo alumnos2.txt</p>";
    } else {
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
                $campos = explode("##", $linea);
                $nombre = isset($campos[0]) ? trim($campos[0]) : "";
                $apellido1 = isset($campos[1]) ? trim($campos[1]) : "";
                $apellido2 = isset($campos[2]) ? trim($campos[2]) : "";
                $fecha = isset($campos[3]) ? trim($campos[3]) : "";
                $localidad = isset($campos[4]) ? trim($campos[4]) : "";

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
    }
    ?>
</body>

</html>