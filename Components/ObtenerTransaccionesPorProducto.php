<?php

// Obtener el ID del cliente de la URL
$id_producto = $_GET['id'];

// Detalles de la conexión
$servername = "sql.freedb.tech";
$username = "freedb_usuarioBD";
$password = "bH366bfPMJbHc?v";
$database = "freedb_MedControl";
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
T.Med_ID,
M.Imagen AS ImagenProducto,
M.NombreComercial,
T.Fecha,
C.Nombre,
C.Cli_ID,
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
M.Med_ID = '$id_producto';";

$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    echo "Error al ejecutar la consulta: " . $conn->error;
} else {
    // Obtener los detalles del cliente
    $Transacciones = $result->fetch_all(MYSQLI_ASSOC);
}

// Cerrar la conexión
$conn->close();
?>
