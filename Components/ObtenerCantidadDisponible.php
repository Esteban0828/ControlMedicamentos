<?php
// Obtener el ID del producto de la URL
$id_Producto = $_GET['id_producto'];

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

// Consulta SQL para obtener la cantidad disponible del producto
$sql = "SELECT Existencia FROM `Medicamentos` WHERE Med_ID = $id_Producto";
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    echo "Error al ejecutar la consulta: " . $conn->error;
} else {
    // Obtener los detalles del producto
    $producto = $result->fetch_assoc();
    if ($producto) {
        // Devolver la cantidad disponible como respuesta
        echo $producto['Existencia'];
    } else {
        echo "Producto no encontrado";
    }
}

// Cerrar la conexión
$conn->close();
?>
