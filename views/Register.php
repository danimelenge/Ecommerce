<?php
require_once('resources/initiator.php')
?>
    <link rel="stylesheet" href="../css/styleRegister.css" />
<?php
require_once('resources/Header1.php')
?>

<body>

    <!-- Esto se remplaza por el Header del Proyecto -->
    <header class="p-5 text-bg-dark d-flex flex-wrap justify-content-center py-4 mb-4 border-bottom">
        Espacio header
    </header>

    <div class="d-flex flex-wrap justify-content-center mb-3">
        <h3>REGISTRO NUEVO USUARIO</h3>
    </div>

    <div class="con1 container border border-warning p-4">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="container d-flex flex-column align-items-center">

                    <div class="col-8">
                        <label for="inputName" class="form-label">Nombre</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-8">
                        <label for="inputLastName" class="form-label">Apellido</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-8">
                        <label for="dateOfBirth" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
                    </div>

                    <div class="country col-8">
                        <label for="inputAdress" class="form-label">Pais</label>
                        <select class="form-select " aria-label="Default select example">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="2">Three</option>

                        </select>
                    </div>
                    <div class="department col-8">
                        <label for="inputAdress" class="form-label">Departamento</label>
                        <select class="form-select  " aria-label="Default select example">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="2">Three</option>

                        </select>
                    </div>
                    <div class="municipality col-8">
                        <label for="inputMunicipality" class="form-label">Municipio</label>
                        <select class="form-select " aria-label="Default select example">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="2">Three</option>

                        </select>
                    </div>

                    <div class=" col-8">
                        <label for="inputAddress" class="form-label">Dirección</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container d-flex flex-column align-items-center">

                    <div class="col-8">
                        <label for="inputName" class="form-label">Sexo</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-8">
                        <label for="inputEmail" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                    </div>
                    <div class="col-8">
                        <label for="inputEmailVerification" class="form-label">Verificar Correo:</label>
                        <input type="email" class="form-control" id="inputEmailVerification"
                            name="inputEmailVerification">
                    </div>
                    <div class="col-8">
                        <label for="inputPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="col-8">
                        <label for="inputPassword2" class="form-label">Verificar Contraseña</label>
                        <input type="password" class="form-control">
                    </div>


                    <div class="mb-3 form-check" style="padding: 20px;">
                        <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
                        <label class="form-check-label" for="terminos">
                            Aceptar <a href="">términos y condiciones</a>
                        </label>
                    </div>
                    <div class="container d-flex flex-column align-items-center" style="padding: 10px;">

                        <button type="button" class="btn">Iniciar Sesión</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>