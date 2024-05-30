<?php 
$filePath = __FILE__;
$fileName = basename($filePath);
$fileName = substr($fileName, 3);


?>
<?php
session_start();

if (isset($_SESSION['idusuario'])) {
    ?>
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      </head>
      <body>
        <section class="vh-100" style="background-color: #eee;">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                  <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                      <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registrar Como Asesor</p>

                        <form class="mx-1 mx-md-4" method="POST" action="registrarasesor.php">

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="text" id="Profesion" class="form-control" name="profesion" />
                              <label class="form-label" for="Profesion">Profesión</label>
                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="text" id="tel" class="form-control" name="tel" />
                              <label class="form-label" for="tel">Telefono</label>
                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="text" id="credenciales" class="form-control" name="credenciales" />
                              <label class="form-label" for="credenciales">Credenciales</label>
                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="text" id="temas" class="form-control" name="Temas" />
                              <label class="form-label" for="temas">Temas de Asesorias</label>
                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="text" id="Horario" class="form-control" name=" Horario" />
                              <label class="form-label" for="Horario">Horario de Disponibilidad</label>
                            </div>
                          </div>

                          <div class="form-check d-flex justify-content-center mb-5">
                            <label class="form-check-label" for="form2Example3">
                              Estoy de acuerdo con todas las declaraciones en <a href="https://drive.google.com/file/d/1NW0GtvdlnH_QNGaTmnpOTdtIV99V2gok/view?usp=sharing">Términos de servicio</a>
                            </label>
                          </div>

                          <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                          </div>

                        </form>


                      </div>
                      <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                        <img src="fotospagina/teaching.jpg"
                          class="img-fluid" alt="Sample image">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      </body>
    </html>
<?php 

} else {
    echo 'No estás registrado o conectado, redireccionando a la página de registro.';
    header("Refresh:3; url=Login-Register/ESPLogin-Registrar.html");
}
?>






