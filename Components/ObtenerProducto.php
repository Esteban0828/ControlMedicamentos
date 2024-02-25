<?php

// Obtener el ID del cliente de la URL
$id_Producto = $_GET['id'];

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
$sql = "SELECT * FROM `Medicamentos` AS M 
        INNER JOIN `Funciones` AS F ON M.Funcion = F.Fun_ID 
        WHERE Med_ID = $id_Producto";
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    echo "Error al ejecutar la consulta: " . $conn->error;
} else {
    // Obtener los detalles del cliente
    $Producto = $result->fetch_assoc();
}

// Cerrar la conexión
$conn->close();
?>
