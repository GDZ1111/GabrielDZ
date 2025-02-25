<?php
// busquedas.php - Consultas a la base de datos

/*define("username","root");
define("password","");
define("database","instituto");
define("server","localhost");
*/

const username = "root";
const password = "";
const database = "instituto";
const host = "localhost";

$conexion = new mysqli(hostname: host, username: username, password: password, database: database);
if ($conexion->connect_error) {
    echo "Error en conexion";
    die("error en la conexion" .$conexion->connect_error);
} else {
    echo "conexion realizada con exito";
}

?>