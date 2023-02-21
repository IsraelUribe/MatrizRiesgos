<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico"/>
    <title>Áreas y Servidores</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://unpkg.com/sweetalert2@9.5.3/dist/sweetalert2.all.js"></script> -->
    
</head>
<body>
    <?php include("NavBar.php"); ?>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 table-responsive"><!--this is used for responsive display in mobile and other devices-->  
                <table class="table table-bordered table-hover table-striped" style="table-layout: fixed" id="">  
                    <thead>  
                    <tr class="text-center">
                        <!-- <th>Numero usuario</th>   -->
                        <th with="12%">Número</th>  
                        <th>Área Administrativa</th>  
                        <th>Servidor</th> 
                        <th>Eliminar</th>
                        <th>Editar Área</th>
                        <th>Editar Servidor</th>
                    </tr>  
                    </thead>  
                    <?php  
                        require_once("DataBaseConnect.php");  
                        $view_areas_query="SELECT * FROM areas_encargados";//select query for viewing users.  
                        $run = mysqli_query($conn,$view_areas_query);//here run the sql query.  
                    
                    while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
                    {    
                        $num=$row[0];  
                        $area=$row[1];  
                        $servidor=$row[2];  
                        ?>
                        
                        <tr class="text-center" id="<?php echo $num;?>">    
                            <td><?php echo $num;?></td>  
                            <td><?php echo $area;?></td>  
                            <td><?php echo $servidor;?></td>  
                            <td class="text-center"><a href="EliminarAreaEncargado.php?del=<?php echo $num ?>">
                            <button class="btn btn-danger" align= center>Eliminar</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
                            <td class="text-center"><button class="btn btn-outline-warning" onclick="EditarArea()">Editar<!-- </i> --></button></td>
                            <td class="text-center"><button class="btn btn-outline-warning" onclick="EditarServidor()">Editar</button></td>
                        </tr>
                        <?php 
                    }?>
                    <script>
                        function EditarArea(){   
                            swal({
                                title: "Editar Área",
                                content: {
                                    element: "input",
                                    attributes: {
                                        placeholder: "Nombre de la Área",
                                        type: "text",
                                    },
                                    
                                },
                                buttons: true
                            }).then((confirmar) =>{
                                if (confirmar) {
                                    $.ajax({
                                    type: 'POST',
                                    url: 'UpdateArea.php',
                                    data: {num:num},
                                    success: function(data) {
                                        swal({
                                            icon: 'success',
                                            title: 'Usuario modificado correctamente',
                                            showConfirmButton: false,
                                            timer: 1500,
                                        })
                                    }
                                });
                                } else {
                                    swal("Se ha cancelado la actualización!");
                                }
                            });
                        }
                        function EditarServidor(){   
                            swal({
                                title: "Editar Servidor",
                                content: "input",
                                button: "confirmar"
                            });
                        }
                    </script>
                </table>  
            </div>  
        </div>
        <a href="InsertarAreaEncargado.php"><button type="submit" class="btn btn-primary bg-blue-600 float-left" name="nuevo">Agrgar</button></a>
    </div>
</body>  
</html>  

