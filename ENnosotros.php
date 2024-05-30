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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    	body {
	        overflow-x: hidden;
	    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      .bg-body-tertiary {
    text-align: justify;
  }
  .team-member {
            margin-bottom: 30px;
        }
        .team-member img {
            height: 400px;
            width: auto;
            border-radius: 10%; 
            display: block;
            margin: 0 auto; 
        }
        .member-info {
            text-align: center;
        }
        .team-member:hover {
            transform: translateY(-5px); 
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); 
        }
    </style>
  </head>
  <body> 
<main class="min-vh-100">
  <div class="container py-4">
    <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="fotospagina/nosotros.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Welcome</h1>
        <p class="lead">In Learn Link Chihuahua, we believe in facilitating access to education and professional development. Our platform is designed to be your comprehensive guide on the path to academic and professional growth, offering a wide range of services including counseling, courses, and university career options, all in one place.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" style="background-color: #3FA39A;"><a href="ENindex.php" style="color: #ffffff">Discover our services.</button></a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>Mission</h2>
          <p>Our mission is to provide residents of Chihuahua and its surrounding areas with a reliable and convenient platform to explore and access educational and developmental opportunities. We believe in the transformative power of education and are committed to helping you achieve your goals.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
          <h2> Vision </h2>
         <p>In the future, Learn Link Chihuahua will consolidate itself as the primary reference for accessing education and professional development in the region. We aspire to be the platform that inspires and empowers individuals of all ages and backgrounds, providing them with the necessary tools and resources to achieve their academic and professional goals, thus contributing to the growth and prosperity of Chihuahua and its residents.</p>  
        </div>
      </div>
    </div>
  </div>
  <section id="equipo" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="mb-2">Our Team</h2>
            <p class="lead">Meet the incredible team behind our work.</p>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="team-member">
            <img src="profilepics/Michelle.jpg" alt="Miembro del equipo" class="img-fluid">
            <div class="member-info mt-3">
                <h4>Michelle Morales</h4>
                <p>CEO</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="team-member">
            <img src="profilepics/11_Carlos-Ibarra.jpg" alt="Miembro del equipo" class="img-fluid">
            <div class="member-info mt-3">
                <h4>Carlos Ibarra</h4>
                <p>Fullstack Developer</p>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="team-member">
            <img src="profilepics/Vanessa.jpg" alt="Miembro del equipo" class="img-fluid">
            <div class="member-info mt-3">
                <h4>Vanessa Martinez</h4>
                <p>Backend Developer</p>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="team-member">
            <img src="profilepics/Brenda.jpg" alt="Miembro del equipo" class="img-fluid">
            <div class="member-info mt-3">
                <h4>Brenda Nájera</h4>
                <p>Frontend Developer</p>
                
            </div>
        </div>
    </div>
</div>
</section>
</main>
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://cdn.stocksnap.io/img-thumbs/960w/workspace-office_QJFP4CM7G3.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"> We invite you to explore our services.</h1>
        <p class="lead"> We offer a variety of services ranging from personalized counseling to specialized courses and options for university development, all gathered in one place for your convenience and continuous growth.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" style="background-color: #3FA39A;">
          <a href="index.php" style="color: white; text-decoration: none;">Home</a> </button>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Services </button>
              <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="ENasesorias_test.php">Tutoring</a></li>
                    <li><a class="dropdown-item" href="ENcursos.php">Courses</a></li>
                    <li><a class="dropdown-item" href="ENuniversidades.php">Universities</a></li>
                  </ul>
                </div>
        </div>
      </div>
    </div>
  </div>
    </body>
</html>

  </body>
</html>
<?php 
include ("footer.php");
?>