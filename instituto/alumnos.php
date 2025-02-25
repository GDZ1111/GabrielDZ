<?php
// alumnos.php - Formulario de alumnos y procesamiento
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $conexion = new mysqli('localhost', 'root', '', 'instituto');
    $sql = "INSERT INTO alumnos (nombre, apellido, correo, telefono) VALUES ('$nombre', '$apellido', '$correo', '$telefono')";
    $conexion->query($sql);
    $conexion->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alumnos</title>
</head>
<body>
    <h1>Insertar Alumno</h1>

    <form method='POST'>
        Nombre: <input type='text' name='nombre'><br>
        Apellido: <input type='text' name='apellido'><br>
        Correo: <input type='email' name='correo'><br>
        Teléfono: <input type='text' name='telefono'><br>
        <input type='submit' value='Insertar'>
    </form>
</body>
</html>