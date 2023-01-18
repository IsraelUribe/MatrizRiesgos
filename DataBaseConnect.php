<?php /* Etiqueta de apertura de código PHP */
    $servername = "127.0.0.1";
    $database = "matrizadminriesgositeshu";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "<script type='text/javascript'>console.log('Connected successfully'); </script>";//Comando para imprimir mensajes.
    
?> <!-- Etiqueta de cierre de código PHP -->