<!--
Programa ej1b.php: Transformar un número decimal a binario usando bucles (no se podrá utiliza la
función decbin)
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ1B – Conversor decimal a binario</title>
</head>

<body>
    <?php
    $num = "168";
    $binario = "";
    $x = $num;
    while ($x > 0) {
        $resto = $x % 2;
        $binario = $resto . $binario;
        $x = intdiv($x, 2);
    }
    $binario = str_pad($binario, 8, "0", STR_PAD_LEFT);
    echo "Numero $num en binario = $binario";
    ?>
</body>

</html>