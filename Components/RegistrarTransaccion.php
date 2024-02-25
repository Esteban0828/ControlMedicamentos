<?php
// Detalles de la conexión
$servername = "sql.freedb.tech";
$username = "freedb_usuarioBD";
$password = "bH366bfPMJbHc?v";
$database = "freedb_MedControl";

// Establecer conexión con el servidor MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$Producto = $_POST['Producto'];
$Cliente = $_POST['Cliente'];
$Fecha = date('Y-m-d H:i:s'); // Obtener la fecha y hora actual
$Cantidad = $_POST['Cantidad'];

// Comenzar una transacción
$conn->begin_transaction();

// Consulta para obtener la existencia actual del producto
$sql_existencia = "SELECT Existencia FROM Medicamentos WHERE Med_ID = '$Producto' FOR UPDATE";
$result_existencia = $conn->query($sql_existencia);

if ($result_existencia && $row = $result_existencia->fetch_assoc()) {
    $existencia_actual = $row['Existencia'];
    // Verificar si hay suficiente existencia para la transacción
    if ($existencia_actual >= $Cantidad) {
        // Actualizar la existencia del producto
        $nueva_existencia = $existencia_actual - $Cantidad;
        $sql_actualizar_existencia = "UPDATE Medicamentos SET Existencia = '$nueva_existencia' WHERE Med_ID = '$Producto'";
        $conn->query($sql_actualizar_existencia);

        // Insertar la transacción en la base de datos
        $sql_insertar_transaccion = "INSERT INTO Transacciones (Med_ID, Cli_ID, Fecha, Cantidad) VALUES ('$Producto', '$Cliente', '$Fecha', '$Cantidad')";
        if ($conn->query($sql_insertar_transaccion) === TRUE) {
            // Confirmar la transacción
            $conn->commit();
            echo json_encode(array("success" => true));
        } else {
            // Revertir la transacción en caso de error
            $conn->rollback();
            echo json_encode(array("success" => false, "error" => "Error al insertar la transacción: " . $conn->error));
        }
    } else {
        echo json_encode(array("success" => false, "error" => "No hay suficiente existencia para realizar la transacción."));
    }
} else {
    echo json_encode(array("success" => false, "error" => "Error al obtener la existencia del producto: " . $conn->error));
}

// Cerrar la conexión
$conn->close();
?>
