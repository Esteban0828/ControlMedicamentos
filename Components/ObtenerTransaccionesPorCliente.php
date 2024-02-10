<?php

// Obtener el ID del cliente de la URL
$id_cliente = $_GET['id'];

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
// Consulta SQL para obtener los detalles del cliente con el ID proporcionado
$sql = "SELECT
T.Tran_ID AS TransaccionID,
T.Cantidad,
M.Imagen AS ImagenProducto,
M.NombreComercial,
T.Fecha,
C.Nombre,
C.ApellidoPaterno,
C.ApellidoMaterno,
C.Imagen AS ImagenCliente
FROM
Transacciones T
INNER JOIN
Medicamentos M ON T.Med_ID = M.Med_ID
INNER JOIN
Clientes C ON T.Cli_ID = C.Cli_ID
WHERE
C.Cli_ID = '$id_cliente';";

$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    echo "Error al ejecutar la consulta: " . $conn->error;
} else {
    // Obtener los detalles del cliente
    $Transacciones = $result->fetch_assoc();
}

// Cerrar la conexión
$conn->close();
?>
