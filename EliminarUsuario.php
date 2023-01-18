<?php  

include("DataBaseConnect.php");  
$delete_id=$_GET['del'];  
$delete_query="delete from usuarios WHERE email_user='$delete_id'";//delete query  
$run=mysqli_query($conn,$delete_query);  
if($run)
{  
//javascript function to open in the same window   
    echo "<script>window.open('Usuarios.php?deleted=user has been deleted','_self')</script>";  
}else{
    echo ("Usuario no eliminado");
}
    mysqli_close($conn);//comando para cerrar la conexión a la base de datos

?> 