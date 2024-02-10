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

// Obtener los datos del formulario
$nombre = $_POST['funcion'];
// Preparar la consulta SQL para insertar el cliente en la base de datos
$sql = "INSERT INTO Funciones (Nombre) VALUES ('$nombre')";
// Ejecutar la consulta y verificar si fue exitosa
if ($sql != "" && $conn->query($sql) === TRUE) {
    echo "Función registrada exitosamente";
    header("Location: /pages/configuraciones/funciones.php?registro_exitoso_Funcion=true");
    exit();
} elseif ($sql != "") {
    echo "Error al registrar la funcion: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
