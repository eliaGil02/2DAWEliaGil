<!--
Programa ej2s.php realizar el mismo programa del ejercicio anterior pero sin utilizar las funciones printf
o sprintf
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ1 - Conversion IP Decimal a Binario</title>
</head>

<body>
    <?php
    $ip = "192.18.16.204";

    $pos1 = strpos($ip, ".");
    $b1 = substr($ip, 0, $pos1);

    $pos2 = strpos($ip, ".", $pos1 + 1);
    $b2 = substr($ip, $pos1 + 1, $pos2 - $pos1 - 1);

    $pos3 = strpos($ip, ".", $pos2 + 1);
    $b3 = substr($ip, $pos2 + 1, $pos3 - $pos2 - 1);

    $b4 = substr($ip, $pos3 + 1);

    function decimalABinario($num)
    {
        if ($num == 0)
            return "0";
        $bin = "";
        while ($num > 0) {
            $resto = $num % 2;
            $bin = $resto . $bin;
            $num = intdiv($num, 2);
        }
        return str_pad($bin, 8, "0", STR_PAD_LEFT);
    }

    $bin1 = decimalABinario($b1);
    $bin2 = decimalABinario($b2);
    $bin3 = decimalABinario($b3);
    $bin4 = decimalABinario($b4);

    echo "IP " . $ip . " en binario es " . $bin1 . "." . $bin2 . "." . $bin3 . "." . $bin4;
    ?>
</body>

</html>