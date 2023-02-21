<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico"/>
    <title>Agregar Áreas/Servidores</title>
    <link rel="stylesheet" href="styles/InsertAreasServidores.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <?php 
        require_once("DataBaseConnect.php");
        if(isset($_POST['registrar'])){
            $area = $_POST['area'];
            $servidor = $_POST['encargado'];
            
            $query = "INSERT INTO areas_encargados VALUES ('','$area','$servidor')";
            if(mysqli_query($conn, $query) /* and $area!='' and $servidor!='' */){
                ?>
                <script type="text/javascript">
                    swal({
                        title: "Inserción completada!",
                        text: "Los datos han sido registrados correctamente!",
                        icon: "success",
                    });
                /* /* echo "<script type=text/javascript>alert('Por favor ingrese un correo');" */
                    setTimeout("location.href='AreasEncargados.php'", 400);
                </script>
            <?php
            }  else{
                ?><div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Error al insertar el usuario</h4>
                </div>
                <?php
            }
        }  
    ?>
    <div class="container">
        <h2 class="">&nbsp</h2>
	    <div class="row">
		    <div class="col-12 col-md-8 col-lg-6 pb-5">
                <!--Form with header-->
                <form action="InsertarAreaEncargado.php" th:action="@{/addUser}" th:object="${user}" method="post">
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Registro</h3>
                                <p class="m-0">Módulo para Agregar Áreas y Servidores </p>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Área</div>
                                    </div>
                                    <input type="text" class="form-control" id="area" name="area" placeholder="Área Institucional" required th:field="*{area}"></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Servidor</div>
                                    </div>
                                    <input type="text" class="form-control" id="encargado" name="encargado" placeholder="Titular del Área" required th:field="*{encargado}"></input>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2" name="registrar"></input>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
	    </div>
    </div>
</body>
</html>