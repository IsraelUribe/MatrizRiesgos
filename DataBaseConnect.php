<?php /* Etiqueta de apertura de código PHP */
    $servername = "127.0.0.1";//Servidor
    $database = "matrizadminriesgositeshu";//Nombre de la base de datos
    $username = "root";//Usuario en el que se creo la base de datos
    $password = "";//Contraseña del usuario
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database); //Comando para realizar la conexión a la base de datos
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "<script type='text/javascript'>console.log('Connected successfully'); </script>";//Comando para imprimir mensajes.
    
?> <!-- Etiqueta de cierre de código PHP -->