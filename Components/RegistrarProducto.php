<?php
// Detalles de la conexión
$servername = "sql.freedb.tech";
$username = "freedb_usuarioBD";
$password = "bH366bfPMJbHc?v";
$database = "freedb_MedControl";

// $servername = "sql300.infinityfree.com";
// $username = "if0_35963147";
// $password = "qZINsYHXj4gi";
// $database = "if0_35963147_sql5682245";
// Establecemos una conexión con el servidor MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$PrincipioActivo = $_POST['PrincipioActivo'];
$NombreComercial = $_POST['NombreComercial'];
$Laboratorio= $_POST['Laboratorio'];
$Funcion= $_POST['Funcion'];
$Caducidad= $_POST['Caducidad'];
$Gramaje= $_POST['Gramaje'];
$Existencia= $_POST['Cantidad'];
$Anaquel= $_POST['Anaquel'];


// Preparar la consulta SQL para insertar el cliente en la base de datos
$sql = "";

//Si se quiere subir una imagen
$archivo = $_FILES['Imagen']['name'];
if (isset($archivo) && $archivo != "") {
    //Obtenemos algunos datos necesarios sobre el archivo
    $tipo = $_FILES['Imagen']['type'];
    $tamano = $_FILES['Imagen']['size'];
    $temp = $_FILES['Imagen']['tmp_name'];
    //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
    if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
    } else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, '../images/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('../images/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido correctamente la imagen
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            // echo '<p><img src="../images/'.$archivo.'"></p>';
            $imagen= "/images/$archivo";
            // Preparar la consulta SQL para insertar el cliente en la base de datos
            $sql = "INSERT INTO Medicamentos (PrincipioActivo, NombreComercial, Laboratorio, Funcion, Caducidad, Imagen, Gramaje, Existencia, Anaquel) VALUES ('$PrincipioActivo', '$NombreComercial', '$Laboratorio','$Funcion','$Caducidad','$imagen','$Gramaje','$Existencia','$Anaquel')";
        } else {
            //Si no se ha podido subir la imagen, mostramos un mensaje de error
            echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
    }
}else{
    $imagen = "/images/Unkwon_Pills.jpg";
    $sql = "INSERT INTO Medicamentos (PrincipioActivo, NombreComercial, Laboratorio, Funcion, Caducidad, Imagen, Gramaje, Existencia, Anaquel) VALUES ('$PrincipioActivo', '$NombreComercial', '$Laboratorio','$Funcion','$Caducidad','$imagen','$Gramaje','$Existencia','$Anaquel')";
}

// Ejecutar la consulta y verificar si fue exitosa
if ($sql != "" && $conn->query($sql) === TRUE) {
    echo "Producto registrado exitosamente";
    header("Location: /index.php?registro_producto=true");
    exit();
} elseif ($sql != "") {
    echo "Error al registrar el producto: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
