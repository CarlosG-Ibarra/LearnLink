<?php 
$filePath = __FILE__;
$fileName = basename($filePath);
$fileName = substr($fileName, 2);


$language=2;
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
      .search-container {
            display: flex;
            align-items: center;
            justify-content: center; 
        }
        .search-input {
            width: 800px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .search-button {
            background-color: #3fa39a;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
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
            <h1 class="text-body-emphasis">Main centers</h1>
            <p class="lead"> Get to know the main course centers in the city </p>
        </div>
    </div>
    <div class="container my-4">
    <div class="row">
      <div class="col-lg-4 text-center" >
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
      <title>Icatech</title> <image href="img/logoicatech.png" width="100%" height="100%" /></svg>
        <h2 class="fw-normal">Icatech</h2>
        <p>Icatech seeks to promote the development of people, training and corresponding to the needs linked to the industrial sector with the labor market.</p>
        <p><a class="btn btn-secondary" href="https://www.icatech.edu.mx/" target="_blank" style="color: white; text-decoration: none; background-color: #3FA39A"> Visit the page &raquo;</a></p>
      </div>
      <div class="col-lg-4 text-center">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
      <title>Celif</title> <image href="img/cenaltec.png" width="100%" height="100%" /></svg>        
        <h2 class="fw-normal">Cenaltec</h2>
        <p>At Cenaltec they contribute to economic growth in Chihuahua; offering a high level of technical training, technological development and consulting services, in various processes and machinery demanded by the industry.</p>
        <p><a class="btn btn-secondary" href="https://www.inadet.com.mx/" target="_blank" style="color: white; text-decoration: none; background-color: #3FA39A">Visit the page &raquo;</a></p>
      </div>
      <div class="col-lg-4 text-center">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
      <title>Capacinnova</title> <image href="img/celiderh.jpg" width="100%" height="100%" /></svg>           
        <h2 class="fw-normal">Celiderh</h2>
        <p>Celiderh seeks to detonate the leadership that each one possesses. That is, seeing in individuality the possibility of enabling people to become agents of change for social benefit.</p>
        <p><a class="btn btn-secondary" href="https://www.celiderh.org.mx/" target="_blank" style="color: white; text-decoration: none; background-color: #3FA39A">Visit the page &raquo;</a></p>
      </div>
    </div>
</div>


    <hr class="featurette-divider">
    <br>
    <br>
    <br>

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1 text-center">Workshops for self-employment <br> <span class="text-body-secondary">Taught by Icatech</span></h2>
        <p class="lead text-center">Self-employment workshops are training programs or sessions designed to provide people with the skills, knowledge and tools necessary to start and manage their own businesses or activities independently.
          <br> These workshops usually cover a wide range of topics ranging from basic aspects of entrepreneurship and business management to specific skills related to certain industries or areas of work..</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="img/unas.png"><title>Autoempleo</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1 text-center">Technical training for the industry<br> <span class="text-body-secondary"> Taught by Cenaltec. </span></h2>
        <p class="lead text-center">The main purpose of Cenaltec is to provide highly qualified technical personnel to national and foreign companies in the metalworking, aeronautics, automotive, plastics, automation, among others; and that this allows them to increase their level of competitiveness in addition to promoting the creation of better-paid jobs in the entity as well as production processes with greater added value.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="img/engineer.png"><title>Cenaltec training</title><rect width="100%" height="100%"></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1 text-center"> Sweet Art and Handmade Creations  <br> <span class="text-body-secondary">Pastry and Crafts Courses.</span></h2>
        <p class="lead text-center">Immerse yourself in a world of delicious culinary creations and exciting craft projects with our baking and craft courses. Discover the art of decorating cakes, making exquisite desserts and developing creative baking skills, while exploring the magic of creating unique objects by hand. </p>
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
      <li class="page-item"><a class="page-link" href="ENcursos.php">1</a></li>
      <li class="page-item"><a class="page-link" href="ENcursos-1.php">2</a></li>
</div>
</main>
</body>
</html>
<?php 
include ("footer.php");
?>