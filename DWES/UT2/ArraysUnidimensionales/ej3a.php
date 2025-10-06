<!--
Programa ej3a.php definir un array y almacenar los 20 primeros números binarios. Mostrar en la salida
una tabla como la de la figura
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ3A – Array con 20 números binarios</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Indice</th>
            <th>Binario</th>
            <th>Octal</th>
        </tr>
        <?php
        $binarios = [];
        for ($i = 0; $i < 20; $i++) {
            $binarios[$i] = decbin($i);
        }

        for ($i = 0; $i < 20; $i++) {
            $binario = $binarios[$i];
            $octal = decoct($i);
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$binario</td>";
            echo "<td>$octal</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>