<!--
Programa ej3s.php: a partir de la dirección IP y la máscara de red, obtener la dirección de red, la
dirección de broadcast y el rango de IPs disponibles para los equipos.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ2 - Direccion Red - Broadcast y Rango</title>
</head>

<body>
    <?php
    $ip = "192.168.14.100/16";

    /* Separo dirección y prefijo */
    $posBarra = strpos($ip, "/");
    $direccion = substr($ip, 0, $posBarra);
    $prefijo = (int) substr($ip, $posBarra + 1);

    /* Saco los octetos */
    $pos1 = strpos($direccion, ".");
    $byte1 = (int) substr($direccion, 0, $pos1);

    $pos2 = strpos($direccion, ".", $pos1 + 1);
    $byte2 = (int) substr($direccion, $pos1 + 1, $pos2 - $pos1 - 1);

    $pos3 = strpos($direccion, ".", $pos2 + 1);
    $byte3 = (int) substr($direccion, $pos2 + 1, $pos3 - $pos2 - 1);

    $byte4 = (int) substr($direccion, $pos3 + 1);

    /* Paso a binario */
    $ipBinario = sprintf("%08b%08b%08b%08b", $byte1, $byte2, $byte3, $byte4);

    /* Calculo máscara en binario */
    $bits = str_repeat("1", $prefijo);
    $mascaraBinario = str_pad($bits, 32, "0", STR_PAD_RIGHT);

    /* Dirección de red */
    $redBin = substr($ipBinario, 0, $prefijo);
    $redBin = str_pad($redBin, 32, "0", STR_PAD_RIGHT);

    $red = bindec(substr($redBin, 0, 8)) . "." .
        bindec(substr($redBin, 8, 8)) . "." .
        bindec(substr($redBin, 16, 8)) . "." .
        bindec(substr($redBin, 24, 8));

    /* Dirección de broadcast */
    $broadcastBin = substr($ipBinario, 0, $prefijo);
    $broadcastBin = str_pad($broadcastBin, 32, "1", STR_PAD_RIGHT);

    $broadcast = bindec(substr($broadcastBin, 0, 8)) . "." .
        bindec(substr($broadcastBin, 8, 8)) . "." .
        bindec(substr($broadcastBin, 16, 8)) . "." .
        bindec(substr($broadcastBin, 24, 8));

    /* Calculo rango de hosts */
    $primerHost = long2ip(ip2long($red) + 1);
    $ultimoHost = long2ip(ip2long($broadcast) - 1);

    echo "IP: $ip" . PHP_EOL;
    echo "Mascara: $prefijo" . PHP_EOL;
    echo "Direccion Red: $red" . PHP_EOL;
    echo "Direccion Broadcast: $broadcast" . PHP_EOL;
    echo "Rango: $primerHost a $ultimoHost" . PHP_EOL;
    ?>
</body>

</html>