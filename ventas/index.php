<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./librerias/bootstrap/css/bootstrap.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <!-- Incluye jQuery desde un CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Login de usuario</title>
    <style>
        .bg-custom-blue {
            background-color: #007bff;
            color: white;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }
    </style>
</head>
<body style="background-color: gray;">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="bg-custom-blue text-center">Sistema de ventas y almacen</div>

                    <div class="card-body">
                        <p>
                            <img src="./img/Logo.png" class="img-fluid mx-auto d-block" alt="Logo del sistema" title="Logo del sistema" width="200px" height="200px">
                        </p>
                        
                        <form action="" id="frmLogin">
                            <label>Usuario</label>
                            <input type="text" class="form-control input-sm" name="usuario" id="usuario">

                            <label>Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control input-sm">
                            <p></p>
                            <span class="btn btn-primary">Entrar</span>
                            <a href="./registro.php" class="btn btn-danger">Registrar</a>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>