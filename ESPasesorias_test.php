<?php 
$filePath = __FILE__;
$fileName = basename($filePath);
$fileName = substr($fileName, 3);


$language=1;
include("header.php"); 

if (isset($es_asesor) && $es_asesor == 0) {
    include("ESPasesormodal.php");
} elseif (empty($es_asesor)) {
   include("ESPasesormodal.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Asesorias</title>

<style>
        
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
        #spinner {
            opacity: 0;
            visibility: hidden;
            transition: opacity .5s ease-out, visibility 0s linear .5s;
            z-index: 99999;
        }

        #spinner.show {
            transition: opacity .5s ease-out, visibility 0s linear 0s;
            visibility: visible;
            opacity: 1;
        }

        .back-to-top {
            position: fixed;
            display: none;
            right: 45px;
            bottom: 45px;
            z-index: 99;
        }


        .hero-header {
            margin-top: -85px;
            background: url(https://t4.ftcdn.net/jpg/05/36/23/57/360_F_536235793_wlduO29kZpQNvC0P4qaoe3oRzAalZ0LI.jpg) center center no-repeat;
            background-size: cover;
        }

        .hero-header .breadcrumb-item+.breadcrumb-item::before {
            color: var(--light);
        }
    </style>
</head>
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-black mb-4 animated slideInRight"><strong>No tienes que hacerlo solo</strong></h1>
                    <p class="text-black mb-4 animated slideInRight">Explora nuestra diversa lista de tutores experimentados que se dedican a ayudarte a alcanzar tus objetivos académicos. Ya sea que esté abordando temas desafiantes, preparándose para exámenes o buscando orientación sobre temas específicos, nuestro equipo de tutores está aquí para brindarle apoyo personalizado adaptado a sus necesidades.</p>
                    <a href="ESPpricing.php" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">¿Quieres ser asesor? Obtener mas informacion</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                <img class="img-fluid mb-3" style="margin-bottom: -40px;" src="https://st2.depositphotos.com/1662991/7257/i/450/depositphotos_72579983-stock-photo-couple-studying-together.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php 
    include ("Display.php");
    ?>

</body>
</html>


<?php 
include ("footer.php");
?>
