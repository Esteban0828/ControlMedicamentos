<?php 

try {
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
    
    // Consulta SQL para obtener la última transacción registrada
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
    ORDER BY T.Fecha DESC
    LIMIT 1;";
    $result = $conn->query($sql);

    // Verificar si la consulta fue exitosa
    if ($result === false) {
        throw new Exception("Error al ejecutar la consulta: " . $conn->error);
    }

    // Obtener la última transacción como un arreglo asociativo
    $ultima_transaccion = $result->fetch_assoc();
    
} catch (Exception $e) {
    echo "Hubo un problema: " . $e->getMessage();
}

// Cerrar la conexión
$conn->close();

?>