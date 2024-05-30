<?php 
$filePath = __FILE__;
$fileName = basename($filePath);
$fileName = substr($fileName, 3);


$language=1;
include("header.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preguntas Frecuentes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
     .accordion-item {
      text-align: center;
    }
    .accordion-button {
      width: 100%;
      text-align: left;
      background-color: #f8f9fa;
    }
    .accordion-button:not(.collapsed) {
      background-color: #e9ecef;
    }
  </style>
</head>
<body>
<div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Preguntas Frecuentes</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <p class="lead">Encuentra respuestas a las preguntas más comunes sobre nuestros servicios.</p>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="https://cdn.stocksnap.io/img-thumbs/960w/workspace-office_7HUKLFKXGU.jpg" alt="" width="720">
      </div>
    </div>
  </div>
  <div class="container">
  <div class="accordion accordion-flush">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"> ¿Cómo puedo registrarme en la plataforma?</button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse">
        <div class="accordion-body">
        Registro como usuario: presionamos con el cursor el botón “Registrarse” que se ubica en la esquina superior derecha, abrirá una pestaña nueva en la que introduciremos nuestros datos personales para iniciar con el registro en la plataforma como: el correo, nombre, contraseña.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2"> ¿Cuáles son los servicios de asesoría que ofrecen y cómo puedo acceder a ellos?</button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse">
        <div class="accordion-body">
        Contamos con profesionales muy competentes en su área y con gran domino en los temas, ya que cuentan con un conocimiento amplio también están capacitados para brindar asesorías a nivel secundaria o preparatoria. Para acceder a este apartado damos un clic en el botón de dice “servicios” en el se desplazara un pequeño menú el cual te canalizara a el área deseada, en este caso elegimos asesorías, buscas el tema de tu interés, con los datos proporcionados en ese apartado puedes contactar personalmente al maestro y agendar una asesoría con el, para poder tener una asesoría primero antes de todo esto deveras estar suscrito a nuestro plan mensual para tener acceso a este servicio.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">¿Cómo funciona el proceso de inscripción en los cursos?</button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse">
        <div class="accordion-body">
        Primero accedes a nuestra plataforma y buscas el apartado cursos, después de eso elijes el que mas te convenga en el apartado de cada curso se puede visualizar la información de la ubicación del sitio así como su número de contacto, según estos datos tu te pones en contacto con la empresa para pedir más información. Nosotros somos una plataforma que te canaliza al lugar deseado brindándote toda la información completa y actualizada, pero como tal no brindamos cursos en ella, puede haber cursos presenciales, en línea o mixto, pero esto ya varía según la empresa correspondiente.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4"> ¿Puedo cancelar una asesoría o curso después de registrarme? ¿Cuál es la política de reembolso?</button>
      </h2>
      <div id="collapse4" class="accordion-collapse collapse">
        <div class="accordion-body">
        Claro, puedes cancelarla o reagendar una cita según la disponibilidad y horario establecido por el maestro, tenemos varios paquetes por mes, en ese mes establecido puedes acceder a todas las asesorías y privilegios que te ofrece la página con fecha límite según el plan elegido. No hay reembolsos en los planes comprados.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5"> ¿Cómo puedo restablecer mi contraseña si la olvidé? </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse">
        <div class="accordion-body">
        Iniciando sección presionamos en el apartado que dice “Restablecer contraseña” sigue las instrucciones que se te piden y te mandaran un mensaje a tu celular o correo electrónico según los que agregaste anteriormente y en el tendrás de nuevo la contraseña.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6"> ¿Dónde puedo encontrar información actualizada sobre los eventos y sesiones programadas? </button>
      </h2>
      <div id="collapse6" class="accordion-collapse collapse">
        <div class="accordion-body">
          Nosotros contamos con profesionales que se encargan de mandarte las ultimas actualizaciones y cosas mas relevantes de nuestra pagina por medio de correo electrónico, además que nos encargamos de subir toda esta información en nuestras redes sociales en las que nos puedes seguir y estar al tanto de lo ultimo que esta pasando en nuestra página.
          </div>
      </div>
    </div> 
  </div>
</div>

</body>
</html>
<?php
include("footer.php");
?>