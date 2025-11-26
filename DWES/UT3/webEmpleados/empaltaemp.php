<?php
//cargamos el archivo
require_once "webEmpleados.php";

//llamamos a la funcion para conectarnos
$conn = conectar();

//variable vacia para el msj
$mensaje = "";

//cargamos los dptos para el desplegable
$departamentos = $conn->query("select cod_dpto, nombre_dpto from departamento");

//comprobamos si el form ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //recogemos y limpiamos los datos con la funcion test_input
    $dni = test_input($_POST["dni"]);
    $nombre = test_input($_POST["nombre"]);
    $apellidos = test_input($_POST["apellidos"]);
    $fecha_nac = test_input($_POST["fecha_nac"]);
    $salario = test_input($_POST["salario"]);
    $cod_dpto = test_input($_POST["cod_dpto"]);
    $fecha_ini = date("Y-m-d"); //le ponemos la fecha de hoy

    try {
        //creamos la sentencia sql para insertar en la tabla empleado
        $sql = "insert into empleado (dni, nombre, apellidos, fecha_nac, salario) values (:dni, :nombre, :apellidos, :fecha_nac, :salario)";
        //preparamos la consulta
        $stmt = $conn->prepare($sql);
        //enlazamos los parametros
        $stmt->bindParam(":dni", $dni);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellidos", $apellidos);
        $stmt->bindParam(":fecha_nac", $fecha_nac);
        $stmt->bindParam(":salario", $salario);
        //ejecutamos
        $stmt->execute();

        //creamos la sentencia sql para insertar en emple_depart
        $sql2 = "insert into emple_depart (dni, cod_dpto, fecha_ini, fecha_fin) values (:dni,:cod_dpto, :fecha_ini, NULL)";
        //preparamos la consulta
        $stmt2 = $conn->prepare($sql2);
        //enlazamos los parametros
        $stmt2->bindParam(":dni", $dni);
        $stmt2->bindParam(":cod_dpto", $cod_dpto);
        $stmt2->bindParam(":fecha_ini", $fecha_ini);
        //ejecutamos
        $stmt2->execute();

        $mensaje = "Empleado insertado correctamente"; //si funciona msj de que se ha insertado
    } catch (PDOException $e) {
        $mensaje = "Error: " . $e->getMessage(); //sino da el mensaje de error de porque no se ha insertado
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Empleado</title>
</head>

<body>
    <form action="empaltaemp.php" method="post">
        <label>DNI:</label><br>
        <input type="text" name="dni" maxlength="10" required>
        <br><br>

        <label>Nombre:</label><br>
        <input type="text" name="nombre" required>
        <br><br>

        <label>Apellidos:</label><br>
        <input type="text" name="apellidos" required>
        <br><br>

        <label>Fecha de nacimiento:</label><br>
        <input type="date" name="fecha_nac" required>
        <br><br>

        <label>Salario:</label><br>
        <input type="number" name="salario" step="0.01" required>
        <br><br>

        <label>Departamento:</label><br>
        <select name="cod_dpto" required>
            <option value="">Seleccione un departamento</option>
            <?php
            foreach ($departamentos as $dep) {
                echo "<option value=\"{$dep['cod_dpto']}\">{$dep['nombre_dpto']}</option>";
            }
            ?>
        </select>
        <br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <div><?php echo $mensaje; ?></div>
</body>

</html>