<?php
require_once('resources/initiator.php')
?>
<link rel="stylesheet" href="../css/styleEditUser.css">
<?php
require_once('resources/header2.php')
?>

<body>
<br>
  <div class="container">
    <div class="d-flex flex-wrap justify-content-center">
      <h1>EDITAR PERFIL</h1>
    </div>


  </div>
  <form class=" sc container border border-warning  p-4 ">
    <div class="row">
      <div class="col-md-6">

        <div class="container d-flex flex-column align-items-center">
          <!-- Contenido del primer div container -->


          <div class="Logo2">
            <div class="containerimg">

              <img src="../img/logo_pato.png" alt="Logo pato">

              <!-- </div> -->
            </div>
          </div>
          <br>
          <div class="container d-flex flex-column align-items-center ">
            <button type="button" id="Editphoto" class=" btn ">Editar Perfil</button>
          </div>

          <div class="Edit_name col-8">
            <label for="EditName" class="form-label">Editar nombre</label>
            <input type="text" class="form-control " id="EditName" aria-describedby="emailHelp">
          </div>

          <div class="Edit_lastname col-8">
            <label for="EditLastName" class="form-label">Editar apellidos</label>
            <input type="text" class="form-control" id="EditLastName" aria-describedby="emailHelp">
          </div>

          <div class="sex col-8">
            <label for="EditSex" class="form-label">Sexo</label>
            <input type="text" class="form-control " id="EditSex" aria-describedby="emailHelp">
          </div>

          <div class="birth_date col-8">
            <label for="EditDateOfBirth" class="form-label">Fecha Nacimiento</label>
            <input type="date" class="form-control" id="EditDateOfBirth" name="dateOfBirth">
          </div>

        </div>
      </div>

      <div class="col-md-6">
        <div class="container d-flex flex-column align-items-center">
          <!-- <div class="" style="background-color: #ffffff; padding: 20px;"> -->
          <!-- Contenido del segundo div container -->
          <div class="country col-8">
            <label for="EditCountry" class="form-label">Pais</label>
            <select class="form-select " id="EditCountry" aria-label="Default select example">
              <option selected></option>
              <option value="1">One</option>
              <option value="2">Two</option>

            </select>
          </div>
          <div class="department col-8">
            <label for="EditDepartament" class="form-label">Departamento</label>
            <select class="form-select  " id="EditDepartament" aria-label="Default select example">
              <option selected></option>
              <option value="1">One</option>
              <option value="2">Two</option>

            </select>
          </div>
          <div class="municipality col-8">
            <label for="EditMunicipality" class="form-label">Municipio</label>
            <select class="form-select " id="EditMunicipality" aria-label="Default select example">
              <option selected></option>
              <option value="1">One</option>
              <option value="2">Two</option>

            </select>
            <div class="address col-14">
              <label for="EditAddress" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="EditAddress" aria-describedby="emailHelp">
            </div>
            <div class="current_pass col-14">
              <label for="CurrentPass" class="form-label">Contraseña actual</label>
              <input type="password" class="form-control" id="CurrentPass" aria-describedby="emailHelp">
            </div>
            <div class="new_pass col-14">
              <label for="NewPass" class="form-label">Contraseña nueva</label>
              <input type="password" class="form-control" id="NewPass" aria-describedby="emailHelp">
            </div>
            <div class="verify_pass col-14">
              <label for="VerifyPass" class="form-label">Verificar contraseña</label>
              <input type="password" class="form-control" id="VerifyPass" aria-describedby="emailHelp">
              <br>
            </div>
            <!-- <div  id="btn" class="container d-flex flex-column align-items-center">
                                    <button type="button" class="btn  ">Guardar</button>
                                </div> -->
            <div class="container d-flex flex-column align-items-center" style="padding: 10px;">

              <button type="button" class="btn ">Iniciar Sesión</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>



</body>

</html>