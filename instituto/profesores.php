<?php
// profesores.php - Formulario de profesores y procesamiento
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $especialidad = $_POST['especialidad'];

    $conexion = new mysqli('localhost', 'root', '', 'instituto');
    $sql = "INSERT INTO profesores (nombre, apellido, correo, especialidad) VALUES ('$nombre', '$apellido', '$correo', '$especialidad')";
    $conexion->query($sql);
    $conexion->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profesores</title>
</head>
<body>
    <h1>Insertar Profesor</h1>
    <form method='POST'>
        Nombre: <input type='text' name='nombre'><br>
        Apellido: <input type='text' name='apellido'><br>
        Correo: <input type='email' name='correo'><br>
        Especialidad:
        <select name='especialidad'>
            <option value='informatica'>Informática</option>
            <option value='administracion'>Administración</option>
            <option value='marketing'>Marketing</option>
        </select><br>
        <input type='submit' value='Insertar'>
    </form>
</body>
</html>