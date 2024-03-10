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
    
    // Consulta SQL para obtener los 3 productos más recientes agregados
    $sql = "SELECT * FROM `Medicamentos` ORDER BY FechaCreacion DESC LIMIT 2";
    $result = $conn->query($sql);

    // Verificar si la consulta fue exitosa
    if ($result === false) {
        throw new Exception("Error al ejecutar la consulta: " . $conn->error);
    }

    // Obtener todos los resultados de la consulta como un arreglo asociativo
    $ProductosRecientes = $result->fetch_all(MYSQLI_ASSOC);
    
} catch (Exception $e) {
    echo "Hubo un problema: " . $e->getMessage();
}

// Cerrar la conexión
$conn->close();

?>