<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico"/>
    <title>Usuarios</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("NavBar.php"); ?>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 table-responsive"><!--this is used for responsive display in mobile and other devices-->  
                <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
                    <thead>  
                    <tr>
                        <!-- <th>Numero usuario</th>   -->
                        <th>Nombre usuario</th>  
                        <th>Email</th>  
                        <th>Contraseña</th>  
                        <th>Eliminar usuario</th>  
                    </tr>  
                    </thead>  
                    <?php  
                    include("DataBaseConnect.php");  
                    $view_users_query="select * from usuarios";//select query for viewing users.  
                    $run=mysqli_query($conn,$view_users_query);//here run the sql query.  
                    //int i=0;
                    while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
                    {    
                        $user_name=$row[2];  
                        $user_email=$row[0];  
                        $user_pass=$row[1];  
                    ?>
                    
                    <tr>    
                        <td><?php echo $user_name;  ?></td>  
                        <td><?php echo $user_email;  ?></td>  
                        <td><?php echo $user_pass;  ?></td>  
                        <td><a href="EliminarUsuario.php?del=<?php echo $user_email ?>">
                        <button class="btn btn-danger" align= center>Eliminar</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
                    </tr>
                    <?php 
                    }?>
                </table>  
            </div>  
        </div>
    </div>
</body>  
</html>  

