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
    
    // Consulta SQL para obtener todos los datos de la tabla `Medicamentos`
    $sql = "SELECT * FROM `Medicamentos` WHERE Existencia > 0";
    $result = $conn->query($sql);

    // Verificar si la consulta fue exitosa
    if ($result === false) {
        throw new Exception("Error al ejecutar la consulta: " . $conn->error);
    }

    // Obtener todos los resultados de la consulta como un arreglo asociativo
    $Productos = $result->fetch_all(MYSQLI_ASSOC);

    
    // // Imprimir el resultado
    // echo "El número de filas en la tabla Funciones es: " . $count;
    } catch (Exception $e) {
        echo "Hubo un problema: " . $e->getMessage();
    }


    // Cerrar la conexión
    $conn->close();
?>
