<!--
Programa ej7a.php crear un array asociativo con los nombres de 5 alumnos y la edad de cada uno de
ellos. Se pide:
a. Mostrar el contenido del array utilizando bucles.
b. Sitúa el puntero en la segunda posición del array y muestra su valor
c. Avanza una posición y muestra el valor
d. Coloca el puntero en la última posición y muestra el valor
e. Ordena el array por orden de edad (de menor a mayor) y muestra la primera posición del
array y la última.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ7A – Array asociativo con 5 alumnos</title>
</head>

<body>
    <?php
    $array = ["Wen" => 21, "Riz" => 27, "Elia" => 19, "Miguel" => 19, "Hola" => 15];

    //a. Mostrar el contenido del array utilizando bucles.
    foreach ($array as $nombre => $edad) {
        echo "Alumno: $nombre → Edad: $edad<br><br>";
    }

    //b. Sitúa el puntero en la segunda posición del array y muestra su valor
    reset($array);
    next($array);
    echo "Puntero en 2ª posición: " . key(array: $array) . current($array) . "<br><br>";

    //c. Avanza una posición y muestra el valor
    next($array);
    echo "Avanzamos una posición: " . key(array: $array) . current($array) . "<br><br>";

    //d. Coloca el puntero en la última posición y muestra el valor
    end($array);
    echo "Puntero en última posición: " . key(array: $array) . current($array) . "<br><br>";

    //e. Ordena el array por orden de edad (de menor a mayor) y muestra la primera posición del array y la última.
    asort($array);
    $arrayOrdenado = $array;

    reset($arrayOrdenado);
    echo "Primera posición: " . key($arrayOrdenado) . " → " . current($arrayOrdenado) . "<br>";

    end($arrayOrdenado);
    echo "Última posición: " . key($arrayOrdenado) . " → " . current($arrayOrdenado);
    ?>
</body>

</html>