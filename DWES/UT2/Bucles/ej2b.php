<!--
Programa ej2b.php: Transformar un número decimal a cualquier otra base (base 2 a base 9) usando
bucles (no se podrán utilizar las funcionesde conversión).
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ2B – Conversor decimal a base n</title>
</head>

<body>
    <?php
    $num = "48";
    $base = "8";

    $resultado = "";
    $x = $num;

    while ($x > 0) {
        $resto = $x % $base;
        $resultado = $resto . $resultado;
        $x = intdiv($x, $base);
    }

    if ($resultado == "") {
        $resultado = "0";
    }

    echo "Numero $num en base $base = $resultado";
    ?>
</body>

</html>