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
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <head><script src="../assets/js/color-modes.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
  <style>
    	body {
	        overflow-x: hidden;
	    }
    </style>
<script type="text/javascript">
    window.onload = function(){
        (function(d, script) {
            script = d.createElement('script');
            script.type = 'text/javascript';
            script.async = true;
            script.src = 'https://w.app/widget-v1/5YNhpf.js';
            d.getElementsByTagName('head')[0].appendChild(script);
        }(document));
    };
</script>
</head>
<body>
    <div class="b-example-divider"></div>
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis">Contact Us</h1>
            <p class="lead"> We're excited to hear from you! <br>
                If you have questions, comments, or just want to get in touch, feel free to do so. We're here to assist you with whatever you need. You can use the contact form below.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="h-100 p-4 bg-body-tertiary border rounded-3">
                <h2>Contact Information</h2>
                <p class="fs-6">Address: Av. Montes Americanos, Sector 35, 31216 Chihuahua, Chih. </p>
                <p class="fs-6">Phone: +52 6141157677 </p>
                <a href="https://wa.me/6141157677?text=I%20want%20more%20information%20about%20the%20product%20" target="_blank">
                    I want more info
                </a>
                <hr>
                <img src="whatsapp.svg" width="300px">
                <p class="fs-6">Email: <a class="fs-6" href="mailto:learnlinkcuu@outlook.com">learnlinkcuu@outlook.com</a></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-4 bg-body-tertiary border rounded-3">
                <h2> Map </h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.5706126499654!2d-106.14999002570596!3d28.642628583624337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea42c17167dc41%3A0x51865060df9440fb!2sUTCH!5e0!3m2!1ses-419!2smx!4v1699485670693!5m2!1ses-419!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="contact-us.php" method="post" style="max-width: 500px; width: 100%;">
            <h2 class="text-center">Contact Form</h2>
            <div class="form-floating mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
            </div>
            <div class="form-floating mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
            </div>
            <div class="form-floating mb-3">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-floating mb-3">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" placeholder="Leave your comment here" style="height: 100px" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #3FA39A; width: 100%;">Send</button>
        </form>
    </div>
</body>

</html>
<?php 
include("footer.php");
?>
