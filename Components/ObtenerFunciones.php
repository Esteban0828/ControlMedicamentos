<?php
// Detalles de la conexión
$servername = "sql5.freemysqlhosting.net";
$username = "sql5682245";
$password = "QU5YmpaNqv";
$database = "sql5682245";

// Establecemos una conexión con el servidor MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los detalles de todas las funciones
$sql = "SELECT * FROM `Funciones`";
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    echo "Error al ejecutar la consulta: " . $conn->error;
} else {
    // Inicializar un arreglo para almacenar todas las funciones
    $Funciones = array();

    // Iterar sobre los resultados y almacenar cada fila en el arreglo
    while ($row = $result->fetch_assoc()) {
        $Funciones[] = $row;
    }
}

// Cerrar la conexión
$conn->close();
?>
