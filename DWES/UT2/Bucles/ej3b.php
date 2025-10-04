<!--
Programa ej3b.php: Transformar un número decimal a hexadecimal usando bucles (no se podrá utilizar
lafunciónde conversióndechex)
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ3B – Conversor decimal a base 16</title>
</head>

<body>
    <?php
    $num = "48";

    $resultado = "";
    $x = $num;

    while ($x > 0) {
        $resto = $x % 16;
        // convertir resto a símbolo hexadecimal
        if ($resto < 10) {
            $digito = $resto;
        } else {
            $digito = chr(55 + $resto);
        }
        $resultado = $digito . $resultado;
        $x = intdiv($x, 16);
    }

    if ($resultado == "") {
        $resultado = "0";
    }

    echo "Numero $num en base 16 = $resultado";
    ?>
</body>

</html>