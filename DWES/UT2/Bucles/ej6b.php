<!--
Programa ej6b.php: Mostrar por pantalla el factorial de un número usando bucles.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ6B – Factorial</title>
</head>

<body>
    <?php
    $num = "5";
    $factorial = 1;
    echo "$num!=";

    for ($i = $num; $i >= 1; $i--) {
        $factorial *= $i;
        echo $i;
        if ($i > 1) {
            echo "x";
        }
    }

    echo "=$factorial";
    ?>
</body>

</html>