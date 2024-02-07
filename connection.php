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



?>
