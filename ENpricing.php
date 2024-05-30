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
  <title>Our Plans</title>
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
        <h1 class="text-body-emphasis">Our Plans</h1>
        <p class="lead"> Discover the value of quality advice to boost your progress monthly.</p>
      </div>
    </div>

    <div class="row text-center">                                    
      <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
        <div class="single-pricing">
          <div class="price-head">                                
            <h2>Basic Plan</h2>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <h1 class="price">$199</h1>
          <h5>Monthly</h5>
          <ul>
            <li>Full access to our specialized advice.</li>
            <li>Receive personalized guidance based on your needs.</li>
            <li>Interact with experienced advisors in various areas.</li>
          </ul>
          <?php
              if (isset($_SESSION['idusuario'])) {
                  echo '<a href="#" class="buy-button" id="comprarButton1">BUY</a>';
              } else {
                  echo '<a href="Login-Register/ESPLogin-Registrar.html" class="buy-button" >Login</a>';
              }
          ?>
        </div>
      </div>


      <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
			  <div class="single-pricing single-pricing-white">
			    <div class="price-head">                                
			      <h2>Certified Advisor Plan</h2>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			    </div>
			    <span class="price-label">Best</span>
			    <h1 class="price">$299</h1>
			    <h5>Monthly</h5>
			    <ul>
			      <li>All benefits of the Advisor Plan.</li>
			      <li>Official verification as a certified advisor.</li>
			      <li>Increased visibility and credibility as an expert.</li>
			    </ul>
			    <?php
              if (isset($_SESSION['idusuario'])) {
                  echo '<a href="#" class="buy-button" id="comprarButton2">BUY</a>';
              } else {
                  echo '<a href="Login-Register/ESPLogin-Registrar.html" class="buy-button" >Login</a>';
              }
          ?>
			  </div>
			</div>

			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
			  <div class="single-pricing">
			    <div class="price-head">                                
			      <h2>Basic Advisor Plan</h2>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			      <span></span>
			    </div>
			    <h1 class="price">$249</h1>
			    <h5>Monthly</h5>
			    <ul>
			      <li>All benefits of the Basic Plan.</li>
			      <li>Opportunity to become an advisor and share your knowledge.</li>
			      <li>Access tools to offer advice to other users.</li>
			    </ul>
			    <?php
              if (isset($_SESSION['idusuario'])) {
                  echo '<a href="#" class="buy-button" id="comprarButton3">BUY</a>';
              } else {
                  echo '<a href="Login-Register/ESPLogin-Registrar.html" class="buy-button" >Login</a>';
              }
          ?>
			  </div>
			</div>
    </div>
  </section>

<script>
  function openSmallWindow(url) {
    var windowWidth = 400;
    var windowHeight = 400;

    var windowLeft = (window.innerWidth - windowWidth) / 2 + window.screenLeft;
    var windowTop = (window.innerHeight - windowHeight) / 2 + window.screenTop;

    var windowFeatures = 'width=' + windowWidth + ',height=' + windowHeight + ',left=' + windowLeft + ',top=' + windowTop;

    window.open(url, 'smallWindow', windowFeatures);
  }

  document.getElementById('comprarButton1').addEventListener('click', function(event) {
    event.preventDefault();
    openSmallWindow('ConfirmPurchaseU.php'); 
  });

  document.getElementById('comprarButton2').addEventListener('click', function(event) {
    event.preventDefault();
    openSmallWindow('ConfirmPurchase.php'); 
  });

  document.getElementById('comprarButton3').addEventListener('click', function(event) {
    event.preventDefault();
    openSmallWindow('ConfirmPurchase.php'); 
  });
</script>


<?php include("footer.php"); ?>
</body>
</html>
