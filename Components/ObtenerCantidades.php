<?php 


/**
 * Ayuda simple para depurar en la consola
 * 
 * @param  Array, Object, String $data
 * @return String
 */
function php_console_log( $data, $comment = NULL ) {	
    $output='';	
    if(is_string($comment))
        $output .= "<script>console.warn( '$comment' );";
    elseif($comment!=NULL)
        $comment==NULL;//Si se pasa algo que no sea un string se pone a NULL para que no de problemas
    if ( is_array( $data ) ) {
        if($comment==NULL)
            $output .= "<script>console.warn( 'Array PHP:' );";
        $output .= "console.log( '[" . implode( ',', $data) . "]' );</script>";
    } else if ( is_object( $data ) ) {
        $data    = var_export( $data, TRUE );
        $data    = explode( "\n", $data );
        if($comment==NULL)
            $output .= "<script>console.warn( 'Objeto PHP:' );";
        foreach( $data as $line ) {
            if ( trim( $line ) ) {
                $line    = addslashes( $line );
                $output .= "console.log( '{$line}' );";
            }
        }
        $output.="</script>";
    } else {
        if($comment==NULL)
            $output .= "<script>console.warn( 'Valor de variable PHP:' );";
        $output .= "console.log( '$data' );</script>";
    }
        
    echo $output;
}

//obtener Cantidad de transacciones
try {
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
    
    // Consulta SQL para contar el número de filas en la tabla `Funciones`
    $sql = "SELECT COUNT(*) AS count FROM `Clientes`";
    $result = $conn->query($sql);
    
    // Verificar si la consulta fue exitosa
    if ($result === false) {
        throw new Exception("Error al ejecutar la consulta: " . $conn->error);
    }
    
    // Obtener el resultado de la consulta
    $row = $result->fetch_assoc();
    $conteoClientes = $row['count'];
    
    // // Imprimir el resultado
    // echo "El número de filas en la tabla Funciones es: " . $count;
} catch (Exception $e) {
    echo "Hubo un problema: " . $e->getMessage();
}


// Cerrar la conexión
$conn->close();
?>
