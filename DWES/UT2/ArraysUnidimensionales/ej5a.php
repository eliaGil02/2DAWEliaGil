<!--
Programa ej5a.ph pdefinir tres arrays con los siguientes valores relativos a módulos que se imparten en
el ciclo DAW:
“Bases Datos”, “Entornos Desarrollo”, “Programación”
“Sistemas Informáticos”,”FOL”,”Mecanizado”
“Desarrollo Web ES”,”Desarrollo Web EC”,”Despliegue”,”Desarrollo Interfaces”, “Inglés”
Se pide:
a. Unir los 3 arrays en uno único sin utilizar funciones de arrays
b. Unir los 3 arrays en uno único usando la función array_merge()
c. Unir los 3 arrays en uno único usando la función array_push()
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ5A – 3 arrays con módulos de DAW </title>
</head>

<body>
    <?php
    $array1 = ["Bases Datos", "Entornos Desarrollo", "Programación"];
    $array2 = ["Sistemas Informáticos", "FOL", "Mecanizado"];
    $array3 = ["Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Inglés"];

    //array sin funciones de arrays
    $arrayA = [];
    $contador = 0;
    for ($i = 0; $i < count($array1); $i++) {
        $arrayA[$contador++] = $array1[$i];
    }
    for ($i = 0; $i < count($array2); $i++) {
        $arrayA[$contador++] = $array2[$i];
    }
    for ($i = 0; $i < count($array3); $i++) {
        $arrayA[$contador++] = $array3[$i];
    }

    //array con array_merge
    $arrayB = array_merge($array1, $array2, $array3);

    //array con array_push
    $arrayC = [];
    array_push($arrayC, ...$array1);
    array_push($arrayC, ...$array2);
    array_push($arrayC, ...$array3);

    echo "a. Unir los 3 arrays en uno único sin utilizar funciones de arrays<br>";
    foreach ($arrayA as $indice => $valor) {
        echo "Índice $indice → $valor<br>";
    }

    echo "b. Unir los 3 arrays en uno único usando la función array_merge()<br>";
    foreach ($arrayB as $indice => $valor) {
        echo "Índice $indice → $valor<br>";
    }

    echo "c. Unir los 3 arrays en uno único usando la función array_push()<br>";
    foreach ($arrayC as $indice => $valor) {
        echo "Índice $indice → $valor<br>";
    }
    ?>
</body>

</html>