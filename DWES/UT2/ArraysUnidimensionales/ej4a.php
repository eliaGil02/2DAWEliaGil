<!--
Programa ej4a.phpa partir del array definido en el ejercicio anterior crear un nuevo array que almacene
los números binarios en orden inverso.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ4A – Array con 20 números binarios y en inverso</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Indice</th>
            <th>Binario</th>
            <th>Octal</th>
            <th>Inverso</th>
        </tr>
        <?php
        $binarios = [];
        for ($i = 0; $i < 20; $i++) {
            $binarios[$i] = decbin($i);
        }

        $binariosInverso = [];
        $n = count($binarios);
        for ($i = 0; $i < $n; $i++) {
            $binariosInverso[$i] = $binarios[$n - 1 - $i];
        }

        for ($i = 0; $i < 20; $i++) {
            $binario = $binarios[$i];
            $octal = decoct($i);
            $inverso = $binariosInverso[$i];

            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$binario</td>";
            echo "<td>$octal</td>";
            echo "<td>$inverso</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>