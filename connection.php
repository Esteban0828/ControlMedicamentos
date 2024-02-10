<?php

// Detalles de la conexión
$servername = "sql5.freemysqlhosting.net";
$username = "sql5682245";
$password = "QU5YmpaNqv";

// Establecemos una conexión con el servidor PostgreSQL
$conn = new mysqli($servername, $username, $password);


// Revisamos el estado de la conexión en caso de errores.
if (!$conn) {
    echo "Error: No se ha podido conectar a la base de datos\n";
} else {
    echo "Conexión exitosa\n";
}



?>
