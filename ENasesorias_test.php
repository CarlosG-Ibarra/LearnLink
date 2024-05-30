<?php 
$filePath = __FILE__;
$fileName = basename($filePath);
$fileName = substr($fileName, 2);


$language=2;
include("header.php"); 

if (isset($es_asesor) && $es_asesor == 0) {
    include("ENasesormodal.php");
} elseif (empty($es_asesor)) {
   include("ENasesormodal.php");
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Tutoring</title>

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
<body>
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-black mb-4 animated slideInRight"><strong>You Don't Have To Do It Alone</strong></h1>
                    <p class="text-black mb-4 animated slideInRight">Explore our diverse list of experienced tutors who are dedicated to helping you achieve your academic goals. Whether you're tackling challenging subjects, preparing for exams, or seeking guidance on specific topics, our team of tutors is here to provide personalized support tailored to your needs.</p>
                    <a href="ENpricing.php" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Want to be a Tutor? Get more information</a>
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
