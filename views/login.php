
<?php
require_once('resources/initiator.php')
?>

<link rel="stylesheet" href="../css/styleLogin.css">

<?php
require_once('resources/headerBasico.php')
?>

    <div class="container ">
        <div class="row justify-content-center pt-5 mt-5 m-1">

            <form class="formulario" action="check" method="post">
                <div class="title text-center mt-5 mb-5">
                    <p>Bienvenido</p>
                </div>
                <div>
                    <img class="avatar" src="../img/perfil.png" alt="">
                </div>
           
                <div class="col-md-7 mx-auto mb-4">

                    <b><label class="word" for="email">Correo</label></b>

                    <input class="form-control" type="email" name="email">
                </div>
                <div class="col-md-7 mx-auto mb-4 d-grid gap-2">

                    <b><label class="word" for="password">Contraseña</label></b>

                    <input class="form-control" type="password" name="password">

                    
                </div>
                <div class="col-md-5 mx-auto mb-4 text-center">
                    <button type="button" class="btn btn-light">Iniciar Sesión</button>
                </div>
                <div class="col-md-4 mx-auto mb-4 text-center">
                    <a class="" href="{{url('/')}}">Registrarse</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>