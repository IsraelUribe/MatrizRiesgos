<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body>
<?php require_once("DataBaseConnect.php");
    if(isset($_POST["registrar"])){
        $correo = $_POST["email"];
        $nombre = $_POST["nameUser"];
        $contrasenia = $_POST["password"];
        $confirmar_contrasenia = $_POST["confirm"];
        $verificacion = "SELECT * FROM usuarios WHERE email_user='$correo'";
        $runQuery = mysqli_query($conn, $verificacion);
        if($correo==''){
            ?>
            <script type="text/javascript">
                swal({
                    title: "Ha ocurrido un error!",
                    text: "Ingrese un correo electronico!",
                    icon: "error",
                });
            /* /* echo "<script type=text/javascript>alert('Por favor ingrese un correo');" */
                setTimeout("location.href='Registro.php'", 100);
            </script>
        <?php } 
        else if($nombre==''){
            ?>
            <script type="text/javascript">
                swal({
                    title: "Ha ocurrido un error!",
                    text: "Ingrese un nombre!",
                    icon: "error",
                });
            /* /* echo "<script type=text/javascript>alert('Por favor ingrese un correo');" */
                setTimeout("location.href='Registro.php'", 100);
            </script>
        <?php }
        elseif($contrasenia==''){
            ?>
            <script type="text/javascript">
                swal({
                    title: "Ha ocurrido un error!",
                    text: "Ingrese una contraseña!",
                    icon: "error",
                });
            /* /* echo "<script type=text/javascript>alert('Por favor ingrese un correo');" */
                setTimeout("location.href='Registro.php'", 100);
            </script>
        <?php }
        elseif($confirmar_contrasenia!=$contrasenia){
            ?>
            <script type="text/javascript">
                swal({
                    title: "Ha ocurrido un error!",
                    text: "Las contraseñas no coinciden!",
                    icon: "error",
                });
            /* /* echo "<script type=text/javascript>alert('Por favor ingrese un correo');" */
                setTimeout("location.href='Registro.php'", 100);
            </script>
        <?php }
        elseif($confirmar_contrasenia!=$contrasenia and $correo=='' and $nombre=='' and $contrasenia=='' and $confirmar_contrasenia==''){
            ?>
            <script type="text/javascript">
                swal({
                    title: "Ha ocurrido un error!",
                    text: "Los campos están vacíos, rellenelos con los datos correspondientes!",
                    icon: "error",
                });
                setTimeout("location.href='Registro.php'", 100);
                
            </script>
            
        <?php exit;}
        elseif(mysqli_num_rows($runQuery)>0){
            ?>
            <script type="text/javascript">
                swal({
                    title: "Ha ocurrido un error!",
                    text: "El correo ya se encuentra en uso, utilice uno diferente!",
                    icon: "error",
                });
            /* /* echo "<script type=text/javascript>alert('Por favor ingrese un correo');" */
                setTimeout("location.href='Registro.php'", 100);
            </script>
        <?php }
        $insercion = "INSERT INTO usuarios VALUES ('$correo','$contrasenia','$nombre')";

        if(mysqli_query($conn, $insercion) and $confirmar_contrasenia!='' and $correo!='' and $nombre=!'' and $contrasenia!=''){
            ?>
            <script type="text/javascript">
                swal({
                    title: "Inserción completada!",
                    text: "El usuario ha sido registrado correctamente, inicie sesión!",
                    icon: "success",
                });
            /* /* echo "<script type=text/javascript>alert('Por favor ingrese un correo');" */
                setTimeout("location.href='login.php'", 400);
            </script>
        <?php
        }  else{
            ?><div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Error al insertar el usuario</h4>
            </div>
            <?php
        }
       // mysqli_close($conn);//comando para cerrar la conexión a la base de datos
    }
?>
</body>