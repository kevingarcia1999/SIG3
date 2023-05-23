html>
    <head>
        <title>P&aacute;gina de inicio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
            <div class="row text-center">
                <h3>Acceder</h3>
                <h3>primer cambio</h3>
                <h3>segundo Cambio</h3>
                <h3>terser Cambio</h3>
            </div>
            <div class="row">
                <div class="col">
                </div>
                <div class="col-6">
                    <form action="ingreso.php" method="post">
                        <div class="row mb-2">
                            <label for="nombreUsuario">Usuario: </label>
                            <input type="text" name="nombreUsuario" required><br>
                        </div>

                        <div class="row mb-2">
                            <label for="contraseñaUsuario">Contraseña: </label>
                            <input type="password" name="contrasenaUsuario" pattern=".{8,15}" required><br>
                        </div>

                        <div class="row mb-2">
                            <input type="submit" value="Ingresar" class="btn btn-primary">
                        </div>
                    </form>
                    <div class="text-center">
                        ¿Aún no tiene una cuenta? <a href="registrarse.php">Regístrese</a>
                    </div>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </body>
</html>
