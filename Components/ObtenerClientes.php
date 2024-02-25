<?php 

//obtener Cantidad de transacciones
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
    
    // Consulta SQL para contar el número de filas en la tabla `Funciones`
    $sql = "SELECT COUNT(*) AS count FROM `Transacciones`";
    $result = $conn->query($sql);
    
    // Verificar si la consulta fue exitosa
    if ($result === false) {
        throw new Exception("Error al ejecutar la consulta: " . $conn->error);
    }
    
    // Obtener el resultado de la consulta
    $row = $result->fetch_assoc();
    $count = $row['count'];
    
    // // Imprimir el resultado
    // echo "El número de filas en la tabla Funciones es: " . $count;
} catch (Exception $e) {
    echo "Hubo un problema: " . $e->getMessage();
}

//obtener Cantidad de Clientes
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
    
    // Consulta SQL para obtener todos los datos de la tabla `Clientes`
    $sql = "SELECT * FROM `Clientes`";
    $result = $conn->query($sql);

    // Verificar si la consulta fue exitosa
    if ($result === false) {
        throw new Exception("Error al ejecutar la consulta: " . $conn->error);
    }

    // Obtener todos los resultados de la consulta como un arreglo asociativo
    $Clientes = $result->fetch_all(MYSQLI_ASSOC);

    
    // // Imprimir el resultado
    // echo "El número de filas en la tabla Funciones es: " . $count;
    } catch (Exception $e) {
        echo "Hubo un problema: " . $e->getMessage();
    }


    // Cerrar la conexión
    $conn->close();
?>
