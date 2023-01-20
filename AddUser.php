<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script type="text/javascript" src="js/sweetalert.min.js"></script>
</head>
<?php require_once("DataBaseConnect.php");
    if(isset($_POST["registrar"])){
        $correo = $_POST["email"];
        $nombre = $_POST["nameUser"];
        $contrasenia = $_POST["password"];
        $confirmar_contrasenia = $_POST["confirm"];
        
        if($correo==''){
            echo "<script type=text/javascript>alert('Por favor ingrese un correo');</script>";
            exit;
        }
        if($nombre==''){
            echo "<script type=text/javascript>alert('Por favor ingrese un nombre de usuario');</script>";
            exit;
        }
        if($contrasenia==''){
            echo "<script type=text/javascript>alert('Por favor ingrese una contraseña');</script>";
            exit;
        }
        if($confirmar_contrasenia!=$contrasenia){
            echo "<script type=text/javascript>alert('Las contraseñas no son iguales');</script>";
            exit;
        }
        $verificacion = "SELECT * FROM usuarios WHERE email_user='$correo'";
        $runQuery = mysqli_query($conn, $verificacion);
        
        if(mysqli_num_rows($runQuery)>0){
            echo "<script type=text/javascript>alert('El correo ya se encuentra en uso');</script>";
            exit;
        }
        
        $insercion = "INSERT INTO usuarios VALUES ('$correo','$contrasenia','$nombre')";

        mysqli_query($conn, $insercion);
        /*     echo "<script type='text/javascript'>
                alertaCorrecta();
            </script>";
            //header("Location: login.php");
        }else{
            echo '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Error al insertar el usuario</h4>
            </div>';
        } */
       // mysqli_close($conn);//comando para cerrar la conexión a la base de datos
    }
?>

<body onload=redireccionar()></body>
<script>
    swal({
        title: "User created!",
        text: "Suceess message sent!!",
        icon: "success",
        button: "Ok",
        timer: 1000
    });
    function redireccionar(){
        setTimeout("location.href='login.php'", 500);
    }


</script>