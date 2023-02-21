<?php  
    require_once("DataBaseConnect.php");  
    $update_id=$_GET['num'];  
    $update_query="UPDATE areas_encargados SET area = $update_id'";//delete query  
    $run=mysqli_query($conn,$update_query);  
    if($run)
    {  
    //javascript function to open in the same window   
        echo "<script>window.open('AreasEncargados.php?update=área actualizada','_self')</script>";  
    }else{
        echo ("Area/servidor no eliminado");
    }
    mysqli_close($conn);//comando para cerrar la conexión a la base de datos
?> 