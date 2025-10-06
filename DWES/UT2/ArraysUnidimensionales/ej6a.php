<!--
Programa ej6a.php mostrar el array resultante del ejercicio anterior en orden inverso. Previamente, se
deberá borrar el módulo mecanizado que no se imparte en el ciclo DAW.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ6A – 3 arrays con módulos de DAW en inverso</title>
</head>

<body>
    <?php
    $array1 = ["Bases Datos", "Entornos Desarrollo", "Programación"];
    $array2 = ["Sistemas Informáticos", "FOL", "Mecanizado"];
    $array3 = ["Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Inglés"];

    //eliminar por valor
    $eliminar = "Mecanizado";
    $array2 = array_diff($array2, [$eliminar]);

    $array2 = array_values($array2);

    //array sin funciones de arrays
    $arrayA = [];
    $contador = 0;
    for ($i = count($array3) - 1; $i >= 0; $i--) {
        $arrayA[$contador++] = $array3[$i];
    }
    for ($i = count($array2) - 1; $i >= 0; $i--) {
        $arrayA[$contador++] = $array2[$i];
    }
    for ($i = count($array1) - 1; $i >= 0; $i--) {
        $arrayA[$contador++] = $array1[$i];
    }

    //array en reverso con array_merge
    $arrayB = array_merge(array_reverse($array3), array_reverse($array2), array_reverse($array1));

    //array con array_push3
    $arrayC = [];
    for ($i = count($array3) - 1; $i >= 0; $i--) {
        array_push($arrayC, $array3[$i]);
    }
    for ($i = count($array2) - 1; $i >= 0; $i--) {
        array_push($arrayC, $array2[$i]);
    }
    for ($i = count($array1) - 1; $i >= 0; $i--) {
        array_push($arrayC, $array1[$i]);
    }

    echo "a. Unir los 3 arrays en uno único sin utilizar funciones de arrays<br><br>";
    foreach ($arrayA as $indice => $valor) {
        echo "Índice $indice → $valor<br>";
    }
    echo "b. Unir los 3 arrays en uno único usando la función array_merge()<br><br>";
    foreach ($arrayB as $indice => $valor) {
        echo "Índice $indice → $valor<br>";
    }

    echo "c. Unir los 3 arrays en uno único usando la función array_push()<br><br>";
    foreach ($arrayC as $indice => $valor) {
        echo "Índice $indice → $valor<br>";
    }
    ?>
</body>

</html>