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
    <script src="./js/funciones.js"></script>
    <title>Registro</title>
    <style>
        .bg-custom-red-light {
            background-color: #f1818b;
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
                    <div class="bg-custom-red-light text-center">Registro de usuario</div>

                    <div class="card-body">

                        <form action="" id="frmRegistro">
                            <label>Nombre</label>
                            <input type="text" class="form-control input-sm" name="nombre" id="nombre">

                            <label>Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control input-sm">

                            <label>Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control input-sm">

                            <label>Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control input-sm">
                            <p></p>
                            <span class="btn btn-primary" id="registro">Registrar</span>
                            <a href="./index.php" class="btn btn-default">Volver</a>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>

<script type="text/javascript">
    $(document).ready(function() {
        //  Script para evento click y ajax
        $('#registro').click(function() {

            vacios = validarFormVacio('frmRegistro')

            if(vacios > 0) {
                alert("Debes llenar todos los campos!!")
                return false;
            }

            datos=$('#frmRegistro').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "./procesos/reLogin/registrarUsuario.php",
                success: function(r) {
                    if(r==1) {
                        alert("Usuario agregado con exito");
                    } else {
                        alert("Usuario agregado con exito");
                    }
                }
            });
        });
    });
</script>

</html>

<!-- video n8 -->