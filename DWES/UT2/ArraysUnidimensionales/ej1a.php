<!--
Programa ej1a.php: definir un array y almacenar los 20 primeros números impares. Mostrar en la salida
una tabla como la de la figura
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ1A – Array con 20 números impares</title>
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
        for ($i = 0; $i < 20; $i++) {
            $valor = $impares[$i];
            $suma += $valor;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$valor</td>";
            echo "<td>$suma</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>