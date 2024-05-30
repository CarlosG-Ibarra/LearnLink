<?php 
$filePath = __FILE__;
$fileName = basename($filePath);
$fileName = substr($fileName, 3);


$language=1;
include("header.php"); 

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn Link CUU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <head><script src="../assets/js/color-modes.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
          overflow-x: hidden;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      .carousel-container {
      margin-top: 70px; 
      }
      
    </style>
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
<main>
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/portada.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/icatech.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/computacion.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script>
  const carousel = document.getElementById('carouselExampleFade');
  const myCarousel = new bootstrap.Carousel(carousel, {
    interval: 3000
  });
</script>
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis">Principales centros</h1>
            <p class="lead"> Conoce los principaples centros de cursos en la ciudad </p>
        </div>
    </div>
    <div class="container my-4">
    <div class="row">
      <div class="col-lg-4 text-center" >
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
      <title>Icatech</title> <image href="img/logoicatech.png" width="100%" height="100%" /></svg>
        <h2 class="fw-normal">Icatech</h2>
        <p>Icatech busca promover el desarrollo de personas, capacitándolas y que correspondan a las necesidades vinculadas del sector industrial con el mercado laboral.</p>
        <p><a class="btn btn-secondary" href="https://www.icatech.edu.mx/" target="_blank" style="color: white; text-decoration: none; background-color: #3FA39A"> Visita la página &raquo;</a></p>
      </div>
      <div class="col-lg-4 text-center">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
      <title>Celif</title> <image href="img/cenaltec.png" width="100%" height="100%" /></svg>        
        <h2 class="fw-normal">Cenaltec</h2>
        <p>En Cenaltec contribuyen al crecimiento económico en Chihuahua; ofreciendo un alto nivel de capacitación técnica, servicios de desarrollo tecnológico y consultoría, en diversos procesos y maquinaria que demanda la industria.</p>
        <p><a class="btn btn-secondary" href="https://www.inadet.com.mx/" target="_blank" style="color: white; text-decoration: none; background-color: #3FA39A">Visita la página &raquo;</a></p>
      </div>
      <div class="col-lg-4 text-center">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
      <title>Capacinnova</title> <image href="img/celiderh.jpg" width="100%" height="100%" /></svg>           
        <h2 class="fw-normal">Celiderh</h2>
        <p>Celiderh busca detonar el liderazgo que cada uno posee. Es decir, ver en la individualidad, la posibilidad de habilitar a las personas para que se conviertan en agentes de cambio para un beneficio social.</p>
        <p><a class="btn btn-secondary" href="https://www.celiderh.org.mx/" target="_blank" style="color: white; text-decoration: none; background-color: #3FA39A">Visita la página &raquo;</a></p>
      </div>
    </div>
</div>
    <hr class="featurette-divider">
    <br>
    <br>
    <br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1 text-center"> Talleres para el autoempleo <br> <span class="text-body-secondary">Impartidos por Icatech</span></h2>
        <p class="lead text-center">Los talleres para el autoempleo son programas o sesiones de capacitación diseñadas para brindar a las personas las habilidades, conocimientos y herramientas necesarias para emprender y gestionar sus propios negocios o actividades de manera independiente.
          <br> Estos talleres suelen abarcar una amplia gama de temas que van desde aspectos básicos de emprendimiento y gestión empresarial hasta habilidades específicas relacionadas con determinadas industrias o áreas de trabajo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="img/unas.png"><title>Autoempleo</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1 text-center">Capacitación técnica para la industria <br> <span class="text-body-secondary"> Impartidos por Cenaltec. </span></h2>
        <p class="lead text-center">La finalidad principal del Cenaltec es proveer de personal técnico altamente calificado a empresas nacionales y extranjeras de los sectores de metalmecánica, aeronáutica, automotriz, plásticos, automatización, entre otros; y que esto les permita incrementar su nivel de competitividad además de impulsar la creación de empleos mejor remunerados en la entidad así como de procesos productivos de mayor valor agregado.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="img/engineer.png"><title>Cenaltec capacitación</title><rect width="100%" height="100%"></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1 text-center"> Arte Dulce y Creaciones Hechas a Mano  <br> <span class="text-body-secondary">Cursos de Repostería y Manualidades.</span></h2>
        <p class="lead text-center">Sumérgete en un mundo de deliciosas creaciones culinarias y emocionantes proyectos artesanales con nuestros cursos de repostería y manualidades. Descubre el arte de decorar pasteles, elaborar postres exquisitos y desarrollar habilidades creativas en repostería, mientras exploras la magia de crear objetos únicos a mano. </p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="img/bakery.png"><title>Crafts</title><rect width="100%" height="100%"></svg>
      </div>
    </div>
    <hr class="featurette-divider">
  </div>
  
<div class="container mt-4">
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item"><a class="page-link" href="ESPcursos.php">1</a></li>
      <li class="page-item"><a class="page-link" href="ESPcursos-1.php">2</a></li>
</div>
</main>
  
</body>
</html>
<?php 
include ("footer.php");
?>