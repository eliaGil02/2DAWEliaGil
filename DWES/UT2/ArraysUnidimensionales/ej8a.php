<!--
Programa ej8a.php crear un array asociativo con los nombres de 5 alumnos y la nota de cada uno de
ellos en Bases Datos. Se pide:
a. Mostrar el alumno con mayor nota.
b. Mostrar el alumno con menor nota.
c. Media notas obtenidas por los alumnos
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ8A – Array asociativo con 5 alumnos</title>
</head>

<body>
    <?php
    $array = ["Wen" => 5, "Riz" => 6, "Elia" => 7, "Miguel" => 8, "Hola" => 9];

    //a. Mostrar el alumno con mayor nota.
    $maxNota = max($array);
    $alumnoMax = array_search($maxNota, $array);
    echo "a) Alumno con mayor nota: $alumnoMax → $maxNota<br><br>";

    //b. Mostrar el alumno con menor nota.
    $minNota = min($array);
    $alumnoMin = array_search($minNota, $array);
    echo "b) Alumno con menor nota: $alumnoMin → $minNota<br><br>";

    //c. Media notas obtenidas por los alumnos
    $media = array_sum($array) / count($array);
    echo "c) Media de notas: $media<br>";
    ?>
</body>

</html>