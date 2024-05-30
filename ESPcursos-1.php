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
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
 <style >
   

    body {
            background-color: #f8f9fa;
        }

        .jumbotron {
            background-color: #3fa39a;
            color: white;
        }

        .search-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-input {
            width: 60%;
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

        .card {
            transition: transform 0.2s ease-in-out;
            border: none;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            object-fit: cover;
            height: 200px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .pagination {
            justify-content: center;
        }

        .page-item.active .page-link {
            background-color: #3fa39a;
            border-color: #3fa39a;
        }

        .page-link {
            color: #3fa39a;
        }
 </style>
</head>
<body>      
<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold text-body-emphasis">Cursos Disponibles</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Conoce los cursos disponibles en la ciudad y los principales centros que los imparten.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="img/cursosportada.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
     <br>
     <br>

    
<br>

    <?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $searchValue = isset($_POST['search']) ? $_POST['search'] : '';

    
    if (!empty($searchValue)) {
        echo "Buscando: " . $searchValue;
    } else {
    }
}

$servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cursos";
$result = $conn->query($sql);

if ($result === false) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $idcursos  = $row["idcursos"];
        $nombrecursos  = $row["nombrecursos"];
        $compania  = $row["compania"];
        $linkapagina  = $row["linkapagina"];
        $imgcursos  = $row["imgcursos"];

        
            echo '
            <div class="album py-5 bg-body-tertiary">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="imgcursos/'.$imgcursos.'" alt="img" width="100%" height="225" class="bd-placeholder-img card-img-top" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <div class="card-body">
                                    <p class="card-text"><strong>'.$nombrecursos.'</strong><br>Impartido por '.$compania.'</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="'.$linkapagina.'" target="_blank" style="text-decoration: none;">
                                                <button type="button" class="btn btn-sm btn-outline-secondary" style="color: white; background-color: #3FA39A;"> Conoce los requisitos</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        
            
    }
} else {
    echo "no cursos";
}

$conn->close();
?>



     
    <div class="container mt-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="ESPcursos.php">1</a></li>
            <li class="page-item"><a class="page-link" href="ESPcursos-1.php">2</a></li>
    </div>
</body>

</html>
<?php
include("footer.php");
?>