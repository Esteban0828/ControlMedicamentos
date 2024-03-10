<?php
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

// Obtener los datos del formulario
$ID = $_POST['idFuncion'];
// Preparar la consulta SQL para insertar el cliente en la base de datos
$sql = "DELETE FROM Funciones WHERE Fun_ID = $ID";
// Ejecutar la consulta y verificar si fue exitosa
if ($sql != "" && $conn->query($sql) === TRUE) {
    header("Location: /pages/configuraciones/funciones.php");
    exit();
} elseif ($sql != "") {
    echo "Error al registrar la funcion: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
