<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de alumnos 2</title>
</head>

<body>
    <form action="" method="post">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Primer Apellido:</label><br>
        <input type="text" name="apellido1" required><br><br>

        <label>Segundo Apellido:</label><br>
        <input type="text" name="apellido2" required><br><br>

        <label>Fecha de Nacimiento:</label><br>
        <input type="text" name="fecha" required><br><br>

        <label>Localidad:</label><br>
        <input type="text" name="localidad" required><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>

</html>

<?php
function recogerDatos()
{
    $datos = [];
    $datos['nombre'] = trim($_POST["nombre"] ?? "");
    $datos['apellido1'] = trim($_POST["apellido1"] ?? "");
    $datos['apellido2'] = trim($_POST["apellido2"] ?? "");
    $datos['fecha'] = trim($_POST["fecha"] ?? "");
    $datos['localidad'] = trim($_POST["localidad"] ?? "");

    return $datos;
}
function guardarAlumno($nombre, $apellido1, $apellido2, $fecha, $localidad)
{
    $linea = "$nombre##$apellido1##$apellido2##$fecha##$localidad\n";
    file_put_contents("alumnos2.txt", $linea, FILE_APPEND);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos = recogerDatos();
    guardarAlumno(
        $datos['nombre'],
        $datos['apellido1'],
        $datos['apellido2'],
        $datos['fecha'],
        $datos['localidad']
    );
}
?>