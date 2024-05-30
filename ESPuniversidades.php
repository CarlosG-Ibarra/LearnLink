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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Universidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <style>
    	body {
	        overflow-x: hidden;
	    }

	    .content {
	        margin-top: 20px;
	    }

        .imagen {
            width: 18rem;
            display: inline-block;
            margin: 60px; 
        }

        .img-top {
            width: 100%;
            height: 30%;
            border: none;
        }

        .texto {
            padding: 10px 20px;
            background-color: #3FA39A;
            border-radius: 4%;
        }

        .boton {
            text-decoration: none;
            color: white;
        }

        .acordeon-item {
            margin-top: 20px; 
            cursor: pointer;
            padding: 24px;
            font-size: 60px;
            background-color: #FCD34C;
            color: white;
            width: 100%;
            border: none;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Carusel -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="https://wizi.academy/assets/img/landings/Fondo-UACH.webp" class="d-block w-100" alt="imagen1" 
                style="height: 800px; object-fit: cover;">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="fotospagina/school2.jpg" class="d-block w-100" alt="imagen2" 
                style="height: 800px; object-fit: cover;">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="fotospagina/UTCH-1.jpg" class="d-block w-100" alt="imagen3"
                style="height: 800px; object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <br>

    <!-- Divider -->
    <div class="acordeon-item">
        Descubre las Universidades para ti
    </div>

    <!-- Universities Section -->
    <div class="content">
        <?php 
        $servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM universidades";
        $result = $conn->query($sql);

        if ($result === false) {
            die("Query failed: " . $conn->error);
        }

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $iduniversidades  = $row["iduniversidades"];
                $linkapagina  = $row["linkapagina"];
                $imguni  = $row["imguni"];

                echo "
                <div class='imagen'>
                    <img src='uniimg/$imguni' class='img-top' alt='imagen$iduniversidades'>
                    
                    <div class='texto'>
                        <a href='$linkapagina' class='boton'>Más información....</a>
                    </div>
                </div>
                ";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>



    <!-- Divider2 -->
    <div class="acordeon-item">
		Ventajas de continuar con la universidad
    </div>

	<!-- Ventajas Section -->
	<figure class="imagenes_ventajas" style="display: flex; flex-wrap: wrap; justify-content: center; font-size: 1.5em; padding: 20px; margin-top: 20px;">
	    <div style="margin: 20px; text-align: center;">
	        <img src="https://media.sitioandino.com.ar/p/9863fc57c73acca933611fdbd3f9b6c6/adjuntos/335/imagenes/000/629/0000629951/1200x630/smart/trabajadores-portadajpgwebp.png" class="imagenes_ventajas" alt="imagen_1" style="border-radius: 50%; width: 200px; height: 200px; margin-bottom: 20px;">
	        <figcaption class="ventajas_text" style="margin-top: 20px;">Te prepara para áreas especializadas.</figcaption>
	    </div>

	    <div style="margin: 20px; text-align: center;">
	        <img src="https://d2yoo3qu6vrk5d.cloudfront.net/images/20221010180547/cropped-sueldo-1-3.webp" class="imagenes_ventajas" alt="imagen_2" style="border-radius: 50%; width: 200px; height: 200px; margin-bottom: 20px;">
	        <figcaption class="ventajas_text" style="margin-top: 20px;">Aumenta la posibilidad de ganar un mejor sueldo.</figcaption>
	    </div>

	    <div style="margin: 20px; text-align: center;">
	        <img src="https://blog.nubox.com/hubfs/%C2%BFQu%C3%A9%20tipos%20de%20remuneraciones%20hay%20en%20Chile.jpg" class="imagenes_ventajas" alt="imagen_3" style="border-radius: 50%; width: 200px; height: 200px; margin-bottom: 20px;">
	        <figcaption class="ventajas_text" style="margin-top: 20px;">Te proporcionan estabilidad económica.</figcaption>
	    </div>
	</figure>

	<!-- Divider3 -->
    <div class="acordeon-item">
    	Carreras en la Ciudad
    </div>
    <br><br><br><br>
    <?php include("test_carears.php"); ?>





    <?php include("footer.php"); ?>
	

</body>
</html>
