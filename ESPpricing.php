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
  <title>Nuestros Planes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    	body {
	        overflow-x: hidden;
	    }
    body { margin-top: 20px; }
    .pricing-content { }
    .single-pricing {
      background: #fff;
      padding: 40px 20px;
      border-radius: 5px;
      position: relative;
      z-index: 2;
      border: 1px solid #eee;
      box-shadow: 0 10px 40px -10px rgba(0,64,128,.09);
      transition: 0.3s;
    }
    @media only screen and (max-width: 480px) { 
      .single-pricing { margin-bottom: 30px; }
    }
    .single-pricing:hover {
      box-shadow: 0px 60px 60px rgba(0,0,0,0.1);
      z-index: 100;
      transform: translate(0, -10px);
    }
    .price-label {
      color: #fff;
      background: #ffaa17;
      font-size: 16px;
      width: 100px;
      margin-bottom: 15px;
      display: block;
      -webkit-clip-path: polygon(100% 0%, 90% 50%, 100% 100%, 0% 100%, 0 50%, 0% 0%);
      clip-path: polygon(100% 0%, 90% 50%, 100% 100%, 0% 100%, 0 50%, 0% 0%);
      margin-left: -20px;
      position: absolute;
    }
    .price-head h2 {
      font-weight: 600;
      margin-bottom: 0px;
      text-transform: capitalize;
      font-size: 26px;
    }
    .price-head span {
      display: inline-block;
      background: #ffaa17;
      width: 6px;
      height: 6px;
      border-radius: 30px;
      margin-bottom: 20px;
      margin-top: 15px;
    }
    .price {
      font-weight: 500;
      font-size: 50px;
      margin-bottom: 0px;
    }
    .single-pricing h5 {
      font-size: 14px;
      margin-bottom: 0px;
      text-transform: uppercase;
    }
    .single-pricing ul {
      list-style: none;
      margin-bottom: 20px;
      margin-top: 30px;
    }
    .single-pricing ul li {
      line-height: 35px;
    }
    .single-pricing a {
      background: none;
      border: 2px solid #ffaa17;
      border-radius: 5000px;
      color: #ffaa17;
      display: inline-block;
      font-size: 16px;
      overflow: hidden;
      padding: 10px 45px;
      text-transform: capitalize;
      transition: all 0.3s ease 0s;
    }
    .single-pricing a:hover,
    .single-pricing a:focus {
      background: #ffaa17;
      color: #fff;
      border: 2px solid #ffaa17;
    }
    .single-pricing-white {
      background: #232434;
    }
    .single-pricing-white ul li {
      color: #fff;
    }
    .single-pricing-white h2,
    .single-pricing-white h1,
    .single-pricing-white h5 {
      color: #fff;
    }
  </style>
</head>
<body>
  <section id="pricing" class="pricing-content section-padding">
    <div class="b-example-divider"></div>
    <div class="container my-5">
      <div class="p-5 text-center bg-body-tertiary rounded-3">
        <h1 class="text-body-emphasis">Nuestros Planes</h1>
        <p class="lead"> Descubre el valor de un asesoramiento de calidad para impulsar tu progreso mensualmente.</p>
      </div>
    </div>

    <div class="row text-center">                                    
      <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
        <div class="single-pricing">
          <div class="price-head">                                
            <h2>Plan Básico</h2>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <h1 class="price">$199</h1>
          <h5>Mensual</h5>
          <ul>
            <li>Acceso Completo a nuestras asesorías especializadas.</li>
            <li>Recibe orientación personalizada según tus necesidades.</li>
            <li>Interactúa con asesores experimentados en diversas áreas.</li>
          </ul>
          <?php
              if (isset($_SESSION['idusuario'])) {
                  echo '<a href="#" class="buy-button" id="comprarButton1">Comprar</a>';
              } else {
                  echo '<a href="Login-Register/ESPLogin-Registrar.html" class="buy-button" >Iniciar sesión</a>';
              }
          ?>
        </div>
      </div>

      <!-- Repeat the same modification for other pricing cards -->

      <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
			  <div class="single-pricing single-pricing-white">
			    <div class="price-head">                                
			      <h2>Plan Asesor Certificado</h2>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			    </div>
			    <span class="price-label">Best</span>
			    <h1 class="price">$299</h1>
			    <h5>Mensual</h5>
			    <ul>
			      <li>Todos los beneficios del Plan Asesor.</li>
			      <li>Verificación oficial como asesor certificado.</li>
			      <li>Aumento en la visibilidad y credibilidad como experto.</li>
			    </ul>
			    <?php
              if (isset($_SESSION['idusuario'])) {
                  echo '<a href="#" class="buy-button" id="comprarButton2">Comprar</a>';
              } else {
                  echo '<a href="Login-Register/ESPLogin-Registrar.html" class="buy-button" >Iniciar sesión</a>';
              }
          ?>
			    <!-- Remove the following PayPal button-related code -->
			  </div>
			</div>

			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
			  <div class="single-pricing">
			    <div class="price-head">                                
			      <h2>Plan Básico Asesor</h2>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			    </div>
			    <h1 class="price">$249</h1>
			    <h5>Mensual</h5>
			    <ul>
			      <li>Todo lo del Plan Básico.</li>
			      <li>Oportunidad de convertirte en asesor y compartir tu conocimiento.</li>
			      <li>Accede a herramientas para ofrecer asesorías a otros usuarios.</li>
			    </ul>
			    <?php
              if (isset($_SESSION['idusuario'])) {
                  echo '<a href="#" class="buy-button" id="comprarButton3">Comprar</a>';
              } else {
                  echo '<a href="Login-Register/ESPLogin-Registrar.html" class="buy-button" >Iniciar sesión</a>';
              }
          ?>
			    <!-- Remove the following PayPal button-related code -->
			  </div>
			</div>
    </div>
  </section>

<script>
  // JavaScript function to open a small window
  function openSmallWindow(url) {
    // Define the window size
    var windowWidth = 400;
    var windowHeight = 400;

    // Calculate the center position
    var windowLeft = (window.innerWidth - windowWidth) / 2 + window.screenLeft;
    var windowTop = (window.innerHeight - windowHeight) / 2 + window.screenTop;

    // You can customize other window features if needed
    var windowFeatures = 'width=' + windowWidth + ',height=' + windowHeight + ',left=' + windowLeft + ',top=' + windowTop;

    // Open a new window with a specific URL
    window.open(url, 'smallWindow', windowFeatures);
  }

  // Attach a click event listener to each "Buy" button
  document.getElementById('comprarButton1').addEventListener('click', function(event) {
    event.preventDefault();
    openSmallWindow('ConfirmarCompraU.php'); // Specify the URL for comprarButton1
  });

  document.getElementById('comprarButton2').addEventListener('click', function(event) {
    event.preventDefault();
    openSmallWindow('ConfirmarCompra.php'); // Default URL for comprarButton2
  });

  document.getElementById('comprarButton3').addEventListener('click', function(event) {
    event.preventDefault();
    openSmallWindow('ConfirmarCompra.php'); // Specify the URL for comprarButton3
  });
</script>


  <!-- Footer and additional scripts -->
  <?php include("footer.php"); ?>
</body>
</html>