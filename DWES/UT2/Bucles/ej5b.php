<!--
Programa ej5b.php: Mostrar por pantalla la tabla de multiplicar de un número con su tabla HTML
correspondiente:
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ5B – Tabla multiplicar con TD</title>
</head>

<body>
    <table border="1">
        <?php
        $num = "8";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $num * $i;
            echo "<tr><td>$num x $i</td><td>$resultado</td></tr>";
        }
        ?>
    </table>

</body>

</html>