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
$nombre = $_POST['Nombre'];
$apellidoP = $_POST['ApellidoP'];
$apellidoM= $_POST['ApellidoM'];
$imagen= $_POST['Imagen'];
echo $nombre;

// Preparar la consulta SQL para insertar el cliente en la base de datos
$sql = "INSERT INTO Clientes (Nombre, ApellidoPaterno, ApellidoMaterno, Imagen) VALUES ('$nombre', '$apellidoP', '$apellidoM','$imagen')";

// Ejecutar la consulta y verificar si fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "Cliente registrado exitosamente";
    header("Location: /index.php?registro_exitoso=true");
    exit();
} else {
    echo "Error al registrar el cliente: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
