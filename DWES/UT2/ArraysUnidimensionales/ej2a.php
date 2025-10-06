<!--
Programa ej2a.phpmodificar el ejemplo anterior para que calcule la media de los valores que están en
las posiciones pares y las posiciones impares.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ2A – Array con 20 números impares y medias</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Indice</th>
            <th>Valor</th>
            <th>Suma</th>
        </tr>
        <?php
        $impares = [];
        for ($i = 0; $i < 20; $i++) {
            $impares[$i] = 2 * $i + 1;
        }
        $suma = 0;

        $sumaPares = 0;
        $sumaImpares = 0;
        $contPares = 0;
        $contImpares = 0;

        for ($i = 0; $i < 20; $i++) {
            $valor = $impares[$i];
            $suma += $valor;

            if ($i % 2 == 0) {  // índice par
                $sumaPares += $valor;
                $contPares++;
            } else {            // índice impar
                $sumaImpares += $valor;
                $contImpares++;
            }

            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$valor</td>";
            echo "<td>$suma</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <?php
    echo "Media posiciones pares: " . ($sumaPares / $contPares) . "<br>";
    echo "Media posiciones impares: " . ($sumaImpares / $contImpares) . "<br>";
    ?>
</body>

</html>