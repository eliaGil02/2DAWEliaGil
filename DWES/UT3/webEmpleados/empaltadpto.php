<?php
require_once "webEmpleados.php";

//conectamos a la BD
$conn = conectar();

//variable vacía para usar mas adelante
$mensaje = "";

//comprobamos si el formulario se ha enviado con post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //valor del formulario
    $nombreDep = test_input($_POST["nombreDep"]);

    //obtenemos ultimo codigo
    $sql = "select max(cod_dpto) as ultimo from departamento";

    //consulta de forma segura
    $stmt = $conn->prepare($sql);

    //ejecutamos la consulta
    $stmt->execute();

    //obtenemos un array asociativo
    $fila = $stmt->fetch(PDO::FETCH_ASSOC);

    //guardamos el ultimo codigo para hacer el nuevo
    $ultimo = $fila["ultimo"];

    //generamos el siguiente codigo
    if ($ultimo == null) {
        $nuevoCodigo = "D001"; //si no hay otros departamentos, iniciamos los codigos
    } else {
        $num = intval(substr($ultimo, 1)); //quitamos la letra y convertimos el codigo a entero
        $num++; //sumamos 1 al entero para hacer el siguiente
        $nuevoCodigo = "D" . str_pad($num, 3, "0", STR_PAD_LEFT); //volvemos a añadir la D
    }

    //insertamos los datos del nuevo dpto
    $insert = "insert into departamento (cod_dpto, nombre_dpto) values (:codigo, :nombre)";

    //consulta de forma segura
    $stmt2 = $conn->prepare($insert);

    //asociamos los valores
    $stmt2->bindParam(":codigo", $nuevoCodigo);
    $stmt2->bindParam(":nombre", $nombreDep);

    //si funciona el insert:
    if ($stmt2->execute()) {
        $mensaje = "Departamento creado correctamente.<br>Código generado: $nuevoCodigo<br>Nombre: $nombreDep";
    } else {
        $mensaje = "Error al insertar";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Departamentos</title>
</head>

<body>
    <form action="empaltadpto.php" method="post">
        <label>Nombre del departamento:</label>
        <input type="text" name="nombreDep" required>
        <br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <div><?php echo $mensaje; ?></div>
</body>

</html>