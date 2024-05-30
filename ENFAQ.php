<?php 
$filePath = __FILE__;
$fileName = basename($filePath);
$fileName = substr($fileName, 2);


$language=2;
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
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Frequent questions</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <p class="lead">Find answers to the most common questions about our services.</p>
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
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">How can I register on the platform?</button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse">
        <div class="accordion-body">
        Registration as a user: press the “Register” button with the cursor located in the upper right corner, a new tab will open in which we will enter our personal data to start registering on the platform such as: email, name, password.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2"> What are the advisory services you offer and how can I access them?</button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse">
        <div class="accordion-body">
        We have very competent professionals in their area and with great mastery in the topics, since they have extensive knowledge, they are also trained to provide advice at the secondary or high school level. To access this section we click on the button that says “services” in which a small menu will appear which will channel you to the desired area, in this case we choose consultancies, search for the topic of your interest, with the data provided in In that section you can personally contact the teacher and schedule a consultation with him. In order to have a consultation first, before all this, you must be subscribed to our monthly plan to have access to this service.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">How does the course registration process work?</button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse">
        <div class="accordion-body">
          First you access our platform and look for the courses section, after that you choose the one that best suits you. In the section of each course you can view the information on the location of the site as well as its contact number, according to this data you get in touch. Contact the company to request more information. We are a platform that channels you to the desired place, providing you with all the complete and updated information, but as such we do not offer courses on it, there may be face-to-face, online or mixed courses, but this already varies depending on the corresponding company.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4"> Can I cancel a consultation or course after registering? What is the refund policy?</button>
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
        Starting the section, click on the section that says “Reset password” follow the instructions requested and they will send you a message to your cell phone or email according to the ones you added previously and in which you will have the password again.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6"> Where can I find up-to-date information on scheduled events and sessions?</button>
      </h2>
      <div id="collapse6" class="accordion-collapse collapse">
        <div class="accordion-body">
          We have professionals who are in charge of sending you the latest updates and most relevant things about our page by email, and we are also in charge of uploading all this information on our social networks where you can follow us and be aware of what is happening. last thing that is happening on our page.
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