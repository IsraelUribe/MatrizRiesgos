<?php  
    include("DataBaseConnect.php");  
    $delete_id=$_GET['del'];  
    $delete_query="delete from areas_encargados WHERE id_areaservidores='$delete_id'";//delete query  
    $run=mysqli_query($conn,$delete_query);  
    if($run)
    {  
    //javascript function to open in the same window   
        echo "<script>window.open('AreasEncargados.php?deleted=area/servidor eliminado','_self')</script>";  
    }else{
        echo ("Area/servidor no eliminado");
    }
    mysqli_close($conn);//comando para cerrar la conexión a la base de datos
?> 