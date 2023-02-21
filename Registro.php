<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/favicon.ico"/>
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="styles/registro.css"/>
    
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
	
    <div class="container">
		<div class="row main">
		    <div class="panel-heading">
	            <div class="panel-title text-center">
                    <h1 class="title text-center text-blue-600 text-6xl">ITESHU</h1>
	                <hr />
	            </div>
	        </div> 
			<div class="main-login main-center">
			    <form class="form-horizontal" method="post" action="AddUser.php">		
					<div class="form-group">
						<label for="nameUser" class="cols-sm-2 control-label">Nombre</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="nameUser" id="nameUser"  placeholder="Enter your Name"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="cols-sm-2 control-label">Email</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="email" id="email"  placeholder="abcdefg@iteshu.edu,mx"/>
							</div>
						</div>
					</div>

					<!-- <div class="form-group">
						<label for="username" class="cols-sm-2 control-label">Nombre de usuario</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
							</div>
						</div>
					</div> -->

					<div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Password</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="confirm" class="cols-sm-2 control-label">Confirmar Password</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
							</div>
						</div>
					</div>
					<div class="pb-6 pt-6 text-center">
						<button type="submit" class="btn btn-primary bg-blue-600 rounded-1xl" name="registrar">Registrar</button>
					</div>
					<div class="text-center">
			            <a href="MatrizRiesgos.php"><button type="button" class="btn btn-primary bg-blue-600">Iniciar sesión</button></a>
		            </div>
				</form>
			</div>
	    </div>
	</div>
	
</body>
</html>